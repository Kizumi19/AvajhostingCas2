<?php

class User{

    private $id;
    private $username;
    private $role;
    private $created_at;
    private $hidden;


    function __construct($id, $username, $role, $created_at, $hidden) {
        $this->id = $id;
        $this->username = $username;
        $this->role = $role;
        $this->created_at = $created_at;
        $this->hidden = $hidden;
    }
}