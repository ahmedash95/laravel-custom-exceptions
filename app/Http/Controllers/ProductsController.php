<?php

namespace App\Http\Controllers;

use App\Services\ProductService;

class ProductsController extends Controller
{
    public function show($id, ProductService $productService)
    {
        $product = $productService->find($id);

        return 'Product title: '.$product->getTitle();
    }
}
