<?php

class Speciality{

    private $id;
    private $type_speciality;
    private $created_at;
    private $hidden;


    function __construct($id, $type_speciality, $created_at, $specialty_id, $hidden) {
        $this->id = $id;
        $this->type_speciality = $type_speciality;
        $this->created_at = $created_at;
        $this->specialty_id = $specialty_id;
        $this->hidden = $hidden;
    }
}