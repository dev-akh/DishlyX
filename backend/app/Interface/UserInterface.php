<?php

namespace App\Interface;

interface UserInterface
{
    public function getUsers($request);
    public function getUserById($id);
}
