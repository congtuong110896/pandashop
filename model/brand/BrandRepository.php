<?php 
class BrandRepository {
    function fetchAll($condition = null) {
        global $conn;
        $brands = array();
        $sql = "SELECT * FROM brand";
        if ($condition) {
            $sql .= " WHERE $condition";    
        }
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $brand = new Brand ($row['id'],$row['name']);
                $brands[] = $brand;
            }
        }
        return $brands;
    }

    function find($brand_id) {
        global $conn;
        $conditon = "id = $brand_id";
        $brands = $this->fetchAll($conditon);
        $brand = current($brands);
        return $brand;
    }
}
