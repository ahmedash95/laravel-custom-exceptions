<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Exceptions\ProductNotFoundException;

class ProductsController extends Controller
{
    public function show($id, ProductService $productService)
    {
    	try {
        	$product = $productService->find($id);
    	} catch (ProductNotFoundException $e) {
    		return 'Talk to customer support!';
    	}

        return 'Product title: '.$product->getTitle();
    }
}
