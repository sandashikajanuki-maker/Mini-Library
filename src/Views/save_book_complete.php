<?php
// simple endpoint that delegates to BookController
require_once __DIR__ . '/../Controllers/BookController.php';

$controller = new BookController();
$controller->saveBook();

// if execution reaches here it means no POST was handled
// you can optionally redirect back
header('Location: libariandashboard.php');
exit;
