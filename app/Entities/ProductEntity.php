<?php


namespace App\Entities;


class ProductEntity
{
    private int $id;
    private string $title;
    private string $description;
    private float $price;

    /**
     * ProductEntity constructor.
     * @param int $id
     * @param string $title
     * @param string $description
     * @param float $price
     * @return ProductEntity
     */
    public static function create(int $id, string $title, string $description, float $price)
    {
        $product = new ProductEntity();
        $product->setId($id);
        $product->setTitle($title);
        $product->setDescription($description);
        $product->setPrice($price);

        return $product;
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

}
