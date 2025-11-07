<?php
/* @autor Elías Escalante */

class Categorias {

    private $id;
    private $nombre;
    private $db;

    public function __construct($nombre = "", $id = null) {
        $this->nombre = $nombre;
        $this->id = $id;
        $this->db = new Database();
    }

    public function guardar() {
        $datos = ["nombre" => $this->nombre];
        return $this->db->insert("categorias", $datos);
    }

    public function eliminar($id) {
        return $this->db->delete("categorias", "id=$id");
    }

    public static function listar() {
        $db = new Database();
        return $db->select("categorias");
    }
}
