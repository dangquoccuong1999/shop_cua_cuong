<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 5500000;
        $product->HinhAnh = "storage/anh/anh_1.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();

        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 6500000;
        $product->HinhAnh = "storage/anh/anh_2.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();

        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 7000000;
        $product->HinhAnh = "storage/anh/anh_12.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();

        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 8500000;
        $product->HinhAnh = "storage/anh/anh_3.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();

        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 5500000;
        $product->HinhAnh = "storage/anh/anh_4.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();

        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 4500000;
        $product->HinhAnh = "storage/anh/anh_5.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();

        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 6400000;
        $product->HinhAnh = "storage/anh/anh_6.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();

        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 3300000;
        $product->HinhAnh = "storage/anh/anh_7.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();

        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 2200000;
        $product->HinhAnh = "storage/anh/anh_8.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();

        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 4800000;
        $product->HinhAnh = "storage/anh/anh_9.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();

        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 4900000;
        $product->HinhAnh = "storage/anh/anh_10.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();

        $product = new Product();
        $product->TenSp = "Printed Hooded Sweatshirt";
        $product->GiaTien = 8700000;
        $product->HinhAnh = "storage/anh/anh_11.jpg";
        $product->TrangThai = "Còn Hàng";
        $product->save();
    }
}
