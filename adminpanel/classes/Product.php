<?php
class product {
    public function register($query) {
        $db = new Db();
        $result = $db->query($query);
        // var_dump($result);die;
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }
    public function lists() {
        $db = new db();
        $query = "select * from product";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }
    public function edit($id) {
        $db = new db();
        $query = "select * from product where id = '$id'";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }
    public function editProduct($query) {
        $db = new db();
        $result = $db->query($query);
        if ($result === true) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($id) {
        $db = new db();
        $query = "select * from product where id = '$id'";
        $result = $db->select($query);
        return $result;
    }
    public function deleteProduct($query) {
        $db = new db();
        $result = $db->query($query);
        if ($result === true) {
            return true;
        } else {
            return false;
        }
    }
    public function search($keyword) {
        $db = new db();
        $query = "select * from news where name like'" . $keyword . "%' ";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }
}
?>