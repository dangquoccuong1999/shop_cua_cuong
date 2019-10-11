<?php

namespace App;


class WishList
{
    public $product = null;

    public function __construct($wishList)
    {
        if ($wishList) {
            $this->product = $wishList->product;
        }
    }

    public function add($product, $id)
    {
        $storedItem = ['item' => $product];

        $this->product[$id] = $storedItem;
    }

    public function remove($id)
    {
        if (array_key_exists($id,$this->product)) {
            unset($this->product[$id]);
        }
    }
}
