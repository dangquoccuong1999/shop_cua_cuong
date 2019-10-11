<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart');
        $priceShip = 30000;
        $total = $cart->totalPrice + $priceShip;
        return view('cart', compact(['cart', 'priceShip', 'total']));
    }

    public function add($id)
    {
        $product = Product::findOrFail($id);

        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
        } else {
            $oldCart = null;
        }
        //khoi tao gio hang

        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);


        //luu du lieu gio hang vao session
        Session::put('cart', $cart);
        return redirect()->route('index');
    }

    public function remove($id)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Cart($oldCart);
                $cart->remove($id);
                Session::put('cart', $cart);
            }
        } else {
            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
        }
        return redirect()->route('index.cart');
    }
}
