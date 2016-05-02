<?php
class DBController {
	
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
}

?>