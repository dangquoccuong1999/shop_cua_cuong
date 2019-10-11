<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        //Tao mot phan tu trong gio hang
        $storedItem = ['qty' => 0, 'price' => $item->GiaTien, 'item' => $item];
        if ($this->items) {
            //Kiem tra san pham da ton tai trong gio hang chua
            //Neu co roi thi cap nhat phan tu do
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['price'] = $item->GiaTien * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        //Tang tong so luong san pham trong gio hang
        $this->totalQty++;
        //Tinh tong gia tien trong gi hang
        $this->totalPrice += $item->GiaTien;
    }

    public function remove($id)
    {
        if ($this->items) {
            $productsIntoCart = $this->items;
            if (array_key_exists($id, $productsIntoCart)) {
                $priceProDelete = $productsIntoCart[$id]['price'];
                $this->totalPrice -= $priceProDelete;
                //giam tong so luong san pham co trong gio han
                $this->totalQty -= $productsIntoCart[$id]['qty'];
            }

            unset($productsIntoCart[$id]);
            $this->items = $productsIntoCart;
        }
    }
}
