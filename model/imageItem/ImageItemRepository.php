<?php 
class ImageItemRepository {
    function fetchAll($condition= null) {
        global $conn;
        $imageItems = array();
        $sql = "SELECT * FROM image_item" ;
        if ($condition) {
            $sql .= " WHERE $condition";
        }
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()){
                $imageItem = new ImageItem($row['id'],$row['product_id'],$row['name']);
                $imageItems[] = $imageItem;
            }
        }
        return $imageItems;
    }
    function getByProductId($product_id) {
        global $conn;
        $condition = "product_id = $product_id";
        $imageItems = $this->fetchAll($condition);
        return $imageItems;
    }
}
?>