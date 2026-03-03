<?php

require_once __DIR__ . '/../../Config/DBConnection.php';

class MemberModel extends DBConnection
{
    /**
     * @param string $username
     * @param string $password
     * @param string $fullName
     * @param string $nic
     * @param string $email
     */
    public function insertMember($username, $password, $fullName, $nic, $email)
    {
        $query = 'INSERT INTO user (username, password, full_name, nic, email) VALUES (?, ?, ?, ?, ?)';

        if ($stat = $this->conn->prepare($query)) {
            $stat->bind_param('sssss', $username, $password, $fullName, $nic, $email);
            $stat->execute();
            $stat->close();
        } else {
            echo 'Error Preparing Statements:' . $this->conn->error;
        }
    }
}


