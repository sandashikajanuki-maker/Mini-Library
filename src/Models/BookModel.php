<?php

require_once 'Config/DBConnection.php';

function getBookByID ($conn, $isbn) {
    $isbn = mysqli_real_escape_string($conn, $isbn);
    $sql = "SELECT * FROM book WHERE id = '$isbn' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    
    return mysqli_fetch_assoc($result);
}

