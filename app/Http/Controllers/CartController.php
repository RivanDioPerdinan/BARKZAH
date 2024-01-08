<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart; // Pastikan untuk mengimpor model yang diperlukan

class CartController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman keranjang belanja
        // Misalnya: Menampilkan daftar item yang ada di keranjang
        $cartItems = Cart::all(); // Ambil semua item dari model Cart

        return view('cart.index', ['cartItems' => $cartItems]);
    }

    public function addItem(Request $request)
    {
        // Logika untuk menambahkan item ke keranjang
        // Misalnya: Menyimpan item yang ditambahkan ke dalam database

        // Contoh logika sederhana:
        $productId = $request->product_id;
        $quantity = $request->quantity;

        Cart::create([
            'product_id' => $productId,
            'quantity' => $quantity,
        ]);

        return redirect()->route('cart.index'); // Redirect kembali ke halaman keranjang belanja
    }

    public function deleteItem(Request $request)
    {
        // Logika untuk menghapus item dari keranjang
        // Misalnya: Menghapus item dari database berdasarkan ID

        $itemId = $request->id;
        $cartItem = Cart::find($itemId);

        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }
}
