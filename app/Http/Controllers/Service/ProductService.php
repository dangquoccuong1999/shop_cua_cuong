<?php


namespace App\Http\Controllers\Service;


use App\Http\Controllers\Repository\ProductRepository;

class ProductService
{
    public $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        return $this->productRepository->index();
    }
}
