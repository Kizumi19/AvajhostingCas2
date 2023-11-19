<?php

class Doctor{

    private $id;
    private $name;
    private $surname;
    private $specialty_id;
    private $location_id;
    private $hidden;


    function __construct($id, $name, $surname, $specialty_id, $location_id, $hidden=0) {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->specialty_id = $specialty_id;
        $this->location_id = $location_id;
        $this->hidden = $hidden;
    }
    function __construct1($id, $name, $surname, $specialty_id, $location_id) {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->specialty_id = $specialty_id;
        $this->location_id = $location_id;
    }
    
function create_normal() {
    include_once(__DIR__ . '/../connect.php');  

    $sql = "INSERT INTO Doctor VALUES $this->id, $this->name, $this->surname, $this->specialty_id, $this->location_id, $this->hidden";
    return $conn->query($sql);        

}
}

?>
