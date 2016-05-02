<?php

class user {

    public function register($query) {
        $db = new db();       
        $result = $db->query($query);
         // var_dump($result);die;
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }

    public function checkout($query) {
        $db = new db();       
        $result = $db->query($query);
         // var_dump($result);die;
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }

    public function contact($query) {
        $db = new db();       
        $result = $db->query($query);
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }
    
    public function login($query) {
        $db = new db();
         $result = $db->select($query);
        return $result;      
    }
    
    public function lists() {
        $db = new db();
        $query = "select * from user";
        $result = $db->select($query);
        return $result;
    }


    public function contactlists() {
        $db = new db();
        $query = "select * from contact";
        $result = $db->select($query);
        return $result;
    }
    
    public function update() {
        $db = new db();
        $query = "select * from user where id='$id'";
        $result = $db->update($query);
        return $result;
    }
    public function edit($id) {
        $db = new db();
        $query = "select * from user where id = '$id'";
        $result = $db->select($query);
        return $result;
    }

    public function editUser($query) {
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
        $query = "select * from user where id = '$id'";
        $result = $db->select($query);
        return $result;
    }

    public function deleteUser($query) {
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
        $query = "select * from register where user like'" . $keyword . "%' ";
        $result = $db->select($query);
        return $result;
    }
}
?>