<?php

class Schedule{

    private $id;
    private $doctor_id;
    private $shift;
    private $created_at;
    private $hidden;


    function __construct($id, $doctor_id, $shift, $created_at, $hidden) {
        $this->id = $id;
        $this->doctor_id = $doctor_id;
        $this->shift = $shift;
        $this->created_at = $created_at;
        $this->hidden = $hidden;
    }
}