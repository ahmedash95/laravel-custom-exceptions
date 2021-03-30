<?php


namespace App\Repositories;


use App\Entities\ProductEntity;

class ProductRepository
{
    private array $products = [];

    public function __construct()
    {
        $this->products[] = ProductEntity::create(1, "Product 1", "Product 1 description", 100);
        $this->products[] = ProductEntity::create(2, "Product 2", "Product 2 description", 150);
    }

    public function find($id) : ?ProductEntity
    {
        return collect($this->products)->filter(fn($o) => $o->getId() == $id)->first();
    }
}
