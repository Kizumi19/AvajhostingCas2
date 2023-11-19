<?php

class Locations{

    private $id;
    private $floor;
    private $room;
    private $created_at;
    private $hidden;


    function __construct($id, $floor, $room, $created_at, $hidden) {
        $this->id = $id;
        $this->floor = $floor;
        $this->room = $room;
        $this->created_at = $created_at;
        $this->hidden = $hidden;
    }
}