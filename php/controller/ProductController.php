<?php
//class tanımlama
class ProductController
{
    //method tanımlama
    function products(): void
    {
        $title = "Ürünler";
        $ProductModel = new ProductModel;
        $products = $ProductModel->getProducts();
        print "Ben ProductsController içindeki product methodu...";
        require_once APP_ROOT . '/view/products.php';
    }

    function product(int $id): void
    {
        $title = $id . " Idli ürün";
        $ProductModel = new ProductModel;
        $product = $ProductModel->getProductId($id);
        require_once APP_ROOT . '/view/product.php';
    }
}
