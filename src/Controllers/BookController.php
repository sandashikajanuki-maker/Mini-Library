<?php

require_once 'src/Models/BookModel.php';

if (isset($_POST['isbn'])) {
    $isbn = $_POST ['isbn'];

    $book = getBookByID($conn, $isbn);

    if (!$book) {
        die ("Book not found");
    
    } else {
        die ("No ISBN Provided");
}
}

