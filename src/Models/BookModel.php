<?php

require_once __DIR__ . '/../../Config/DBConnection.php';

class BookModel extends DBConnection
{
    /**
     * Insert a new book record into the `book` table.
     *
     * @param string      $bookname
     * @param string      $author
     * @param int|string  $isbn
     * @param string      $category
     * @param string|null $coverBlob  Raw binary contents of the cover image
     */
    public function insertBook($bookname, $author, $isbn, $category, $coverBlob = null)
    {
        // make sure isbn is integer or null
        $isbnInt = $isbn !== '' ? (int) $isbn : 0;

        $query = 'INSERT INTO book (bookname, author, isbn, category, coverimg) VALUES (?, ?, ?, ?, ?)';

        if ($stmt = $this->conn->prepare($query)) {
            // bind types: s = string, i = integer, s = string (category), s = blob/string
            $stmt->bind_param('ssiss', $bookname, $author, $isbnInt, $category, $coverBlob);
            $stmt->execute();
            $stmt->close();
        } else {
            // propagate error for debugging
            throw new Exception('Error preparing insertBook statement: ' . $this->conn->error);
        }
    }
}
