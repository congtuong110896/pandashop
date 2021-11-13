<?php 
class WardRepository {
    function fetchAll($condition = null) {
        global $conn;
        $sql = "SELECT * FROM ward";
        $wards = array();
        if ($condition) {
            $sql .= " WHERE $condition";
        }
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ward = new Ward($row['id'],$row['name'],$row['type'],$row['district_id']);
                $wards[] = $ward;
            }
        }
        return $wards;
    }
    function find($ward_id) {
        $condition = "id = '$ward_id'";
        $wards = $this->fetchAll($condition);
		$ward = current($wards);
		return $ward;
    }
    function getByDistrictId($district_id) {
		global $conn; 
		$condition = "district_id = '$district_id'";
		return $this->fetchAll($condition, "name ASC");
	}
}
