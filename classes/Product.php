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

     public function add_cart($query) {
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
        $query = "select * from product order by id DESC";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }

  public function listapple() {
        $db = new db();
        $query = "select * from product where brand='apple'";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }

     public function listsamsung() {
        $db = new db();
        $query = "select * from product where brand='samsung'";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }

     public function listdell() {
        $db = new db();
        $query = "select * from product where brand='dell'";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }

     public function listlg() {
        $db = new db();
        $query = "select * from product where brand='lg'";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }

     public function listhp() {
        $db = new db();
        $query = "select * from product where brand='hp'";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }

    public function edit($id) {
        $db = new db();
        $query = "select * from product where id = '$id'";
        $result = $db->select($query);
        // var_d$ump($result);die;
        // print_r()
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

     public function deleteCart($id) {
        $db = new db();
        $query = "delete * from cart where cart_id = '$id'";
        $result = $db->select($query);
        return $result;
    }

    //  public function deleteCart($query) {
    //     $db = new db();
    //     $result = $db->query($query);
    //     if ($result === true) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }


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