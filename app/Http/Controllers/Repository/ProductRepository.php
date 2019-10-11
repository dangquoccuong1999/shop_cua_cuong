<?php


namespace App\Http\Controllers\Repository;


use App\Product;

class ProductRepository extends RepositoryEloquent
{

    public function setModel()
    {
        return Product::class;
    }
}
