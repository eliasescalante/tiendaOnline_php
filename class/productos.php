<?php
/* @autor Elías Escalante */

class Productos {

    private $id;
    private $nombre;
    private $precio;
    private $categoria_id;
    private $descripcion;
    private $imagen;
    private $db;



    public function __construct($nombre = "", $precio = 0, $categoria_id = null, $id = null, $descripcion = "", $imagen = "") {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria_id = $categoria_id;
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
        $this->db = new Database();
    }


    public function guardar() {
        $datos = [
            "nombre" => $this->nombre,
            "precio" => $this->precio,
            "categoria_id" => $this->categoria_id,
            "descripcion" => $this->descripcion,
            "imagen" => $this->imagen
        ];
        return $this->db->insert("productos", $datos);
    }


    public function eliminar($id) {
        return $this->db->delete("productos", "id=$id");
    }

    public static function listar() {
        $db = new Database();
        return $db->select("productos");
    }

    public static function listarCompleto() {
        $db = new Database();

        $sql = "SELECT
                    p.id,
                    p.nombre,
                    p.precio,
                    p.descripcion,
                    p.imagen,
                    c.nombre AS categoria
                FROM productos p
                INNER JOIN categorias c ON p.categoria_id = c.id";

        return $db->selectRaw($sql);
    }

}
