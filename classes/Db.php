<?php

class db {

   public function connect() {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'eshop';

    $conn = mysqli_connect($host, $username, $password, $db_name);
    return $conn;        
}

public function query($query) {
 
    $connection = $this->connect();
    $result = $connection->query($query);
    return $result;
}


public function select($query) {
    $rows = array();
    $result = $this->query($query);
    if ($result === false) {
        return false;
    }
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

function cartDetail() {
    $sql = "select * from cart where user_id = '$_SESSION[id]'";
    $result = $this->select($sql);
    return $result;
}

function selectCart($id) {
    $sql = "select * from product where id = $id";
    $result = $this->select($sql);
    return $result;
}

function addCart($id, $uid, $quan=1) {
    $con = $this->connect();
    $sql = mysqli_query($con, "insert into cart set productid='$id', user_id=$uid, quantity='$quan'");
    echo "<script>window.location='?action=cart'</script>";
}

function updateCart($id, $quan) {
    $con = $this->connect();
    $sql = mysqli_query($con, "update cart set quantity='$quan' where cart_id=$id");
    echo "<script>window.location='?action=cart'</script>";
}




public function error() {
    $connection = $this->connect();
    return $connection->error;
}

public function quote($value) {
    $connection = $this->connect();
    return "'" . $connection->real_escape_string($value) . "'";
}

}
?>