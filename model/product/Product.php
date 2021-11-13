<?php
class Product
{
    public $id;
    public $barcode;
    public $sku;
    public $name;
    public $price;
    public $discount_percentage;
    public $discount_from_date;
    public $discount_to_date;
    public $featured_image;
    public $inventory_qty;
    public $category_id;
    public $brand_id;
    public $created_date;
    public $description;
    public $start;
    public $feature;
    public $sale_price;
    function __construct($id, $barcode, $sku, $name, $price, $discount_percentage, $discount_from_date, $discount_to_date, $featured_image, $inventory_qty, $category_id, $brand_id, $created_date, $description, $star, $featured, $sale_price)
    {
        $this->id = $id;
        $this->barcode = $barcode;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->discount_percentage = $discount_percentage;
        $this->discount_from_date = $discount_from_date;
        $this->discount_to_date = $discount_to_date;
        $this->featured_image = $featured_image;
        $this->inventory_qty = $inventory_qty;
        $this->category_id = $category_id;
        $this->brand_id = $brand_id;
        $this->created_date = $created_date;
        $this->description = $description;
        $this->star = $star;
        $this->featured = $featured;
        $this->sale_price = $sale_price;
    }
    function getId()
    {
        return $this->id;
    }

    function getName()
    {
        return $this->name;
    }

    function getBarcode()
    {
        return $this->barcode;
    }

    function getSku()
    {
        return $this->sku;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getDiscountPercentage()
    {
        return $this->discount_percentage;
    }

    function getDiscountFromDate()
    {
        return $this->discount_from_date;
    }

    function getDiscountToDate()
    {
        return $this->discount_to_date;
    }

    function getSalePrice()
    {
        return $this->sale_price;
    }

    function getFeaturedImage()
    {
        return $this->featured_image;
    }

    function getInventoryQty()
    {
        return $this->inventory_qty;
    }

    function getCreatedDate()
    {
        return $this->created_date;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getStar()
    {
        return $this->star;
    }

    function getFeatured()
    {
        return $this->featured;
    }

    function getCategoryId()
    {
        return $this->category_id;
    }

    function getBrandId()
    {
        return $this->brand_id;
    }

    function getBrand() {
		$brandRepository = new BrandRepository();
		$brand = $brandRepository->find($this->brand_id);
		return $brand;

	}
    function getImageItems() {
        $imageRepository = new ImageItemRepository();
        $imageItems = $imageRepository->getByProductId($this->id);
        return $imageItems;
    }
    
}
