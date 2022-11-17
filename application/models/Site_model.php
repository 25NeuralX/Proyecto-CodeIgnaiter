<?php
class Site_model extends CI_Model {
public function login(){

}

public function insertarProfesor(){
  $array = array(
    "nombre"=>"Carlos",
    "apellido"=>"gomez",
    "curso"=>"11"
  );
$this->db->insert("profesores",$array);
  }

  public function getProfesores(){
    $this->db->select("*");
    $this->db->from("profesores");

    $query=$this->db->get();
    if($query->num_rows()>0){
        return $query->result();
      }else{
        return NULL;
      }
    }

    public function updateProfesor(){
  $array = array(
    "nombre"=>"geral programer",
    "apellido"=>"millan  dias",
    "curso"=>11
  );
  $this->db->where("id",2);
  $this->db->update("profesores",$array);

}

  }
?>
