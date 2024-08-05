<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\SizeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        // Lấy ID của người dùng hiện tại
        $userId = auth()->id();

        // Truy vấn để lấy tất cả sản phẩm trong giỏ hàng của người dùng
        $cartItems = Cart::where('id_kh', $userId)
            ->join('sanpham_kichco', 'gio_hang.id_sp_kc', '=', 'sanpham_kichco.id')
            ->join('san_pham', 'sanpham_kichco.id_sp', '=', 'san_pham.id')
            ->join('kich_co', 'sanpham_kichco.id_kc', '=', 'kich_co.id')
            ->select('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'san_pham.id_thuong_hieu', 'sanpham_kichco.id_sp', 'sanpham_kichco.id_kc', 'gio_hang.so_luong', 'sanpham_kichco.gia','gio_hang.id_sp_kc','kich_co.kich_co')
            ->get();

        // Tính tổng số tiền đơn hàng
        $totalAmount = $cartItems->sum(function ($item) {
            return $item->gia * $item->so_luong;
        });

        // Truyền dữ liệu đến view
        return view('client.cart.index', compact('cartItems', 'totalAmount'));
    }


    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'size_id' => 'required|integer',
            'quantity' => 'required|integer|min:1'
        ]);

        $sizeProduct = SizeProduct::where('id_sp', $request->product_id)
            ->where('id_kc', $request->size_id)
            ->first();

        if ($sizeProduct && $sizeProduct->so_luong >= $request->quantity) {
            $cart = Cart::updateOrCreate(
                ['id_kh' => auth()->id(), 'id_sp_kc' => $sizeProduct->id],
                ['so_luong' => DB::raw('so_luong + ' . $request->quantity)]
            );

            $sizeProduct->so_luong -= $request->quantity;
            $sizeProduct->save();

            return response()->json(['success' => 'Successfully']);
        }

        return response()->json(['success' => 'Error'], 400);
    }

    public function update(Request $request)
    {
        $userId = auth()->id();
        $quantities = $request->input('quantities', []);

        foreach ($quantities as $sizeId => $quantity) {
            $cartItem = Cart::where('id_kh', $userId)
                ->where('id_sp_kc', $sizeId)
                ->first();
           // dd($cartItem);
            if ($cartItem) {
                $productSize = SizeProduct::where('id_kc', $sizeId)->first();

                if ($productSize && $productSize->so_luong >= $quantity) {
                    $difference = $quantity - $cartItem->so_luong;

                    $productSize->so_luong -= $difference;
                    $productSize->save();

                    $cartItem->so_luong = $quantity;
                    $cartItem->save();
                }
            }
        }

        return redirect()->route('cart.index')->with('success','Successfully');
    }
    public function remove($id_sp_kc)
    {
        $userId = auth()->id();

        $cartItem = Cart::where('id_kh', $userId)
            ->where('id_sp_kc', $id_sp_kc)
            ->first();

        if ($cartItem) {
            $productSize = SizeProduct::where('id_kc', $id_sp_kc)->first();

            if ($productSize) {
                $productSize->so_luong += $cartItem->so_luong;
                $productSize->save();
            }

            $cartItem->delete();
        }

        return redirect()->route('cart.index')->with('success','Successfully');
    }
}
