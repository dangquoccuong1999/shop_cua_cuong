<?php

namespace App\Http\Controllers;

use App\Product;
use App\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WishListController extends Controller
{
    public function index()
    {
        $wishlist = Session::get('wishList')->product;
        return view('WishList', compact('wishlist'));
    }

    public function add($id)
    {
        $product = Product::findOrFail($id);

        if (Session::has('wishList')) {
            $oldWishList = Session::get('wishList');
        } else {
            $oldWishList = null;
        }
        //khoi tao gio hang

        $wishlist = new WishList($oldWishList);
        $wishlist->add($product, $product->id);
        //luu du lieu gio hang vao session
        Session::put('wishList', $wishlist);

        return redirect()->route('index.wishlist');
    }

    public function remove($id)
    {
        if (Session::has('wishList')) {
            $oldWishList = Session::get('wishList');

            $cart = new WishList($oldWishList);
            $cart->remove($id);
            Session::put('wishList', $cart);
        }
        return redirect()->route('index.wishlist');
    }
}
