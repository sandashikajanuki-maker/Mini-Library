<?php

require_once __DIR__ . '/../Models/MemberModel.php';

class MemberController
{
    private $memberModel;

    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function addMember($uname, $password, $fname, $nic, $email)
    {
        $this->memberModel->insertMember($uname, $password, $fname, $nic, $email);
    }
}