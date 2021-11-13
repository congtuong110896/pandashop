<?php 
class ImageItem {
    public $id;
    public $product_id;
    public $name;
    function __construct($id,$product_id,$name) {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->name = $name;
    }   
    function getId() {
        return  $this->id;
    }
    function getName() {
       return $this->name;
    }
}
?>