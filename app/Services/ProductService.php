<?php

namespace App\Services;

use App\Entities\ProductEntity;
use App\Exceptions\ProductNotFoundException;
use App\Repositories\ProductRepository;

class ProductService
{

    private ProductRepository $repo;

    public function __construct(ProductRepository $repo)
    {
        $this->repo = $repo;
    }

    public function find($id) : ProductEntity
    {
        $product = $this->repo->find($id);

        if ($product == null) {
            throw new ProductNotFoundException(sprintf("Product id [%d] is not found!", $id));
        }

        return $product;
    }
}
