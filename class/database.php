<?php
/* @autor Elías Escalante */

class Database {

    private $conexion;

    public function __construct(
        $host = "localhost",
        $user = "root",
        $pass = "",
        $db = "MIPROYECTO"
    ) {
        $this->conexion = new mysqli($host, $user, $pass, $db);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }

        // Para tildes
        $this->conexion->set_charset("utf8");
    }

    public function insert($tabla, $datos) {
        $columnas = implode(",", array_keys($datos));
        $valores = "'" . implode("','", array_values($datos)) . "'";
        $sql = "INSERT INTO $tabla ($columnas) VALUES ($valores)";
        return $this->conexion->query($sql);
    }

    public function update($tabla, $datos, $condicion) {
        $set = "";
        foreach ($datos as $col => $val) {
            $set .= "$col='$val',";
        }
        $set = rtrim($set, ",");
        $sql = "UPDATE $tabla SET $set WHERE $condicion";
        return $this->conexion->query($sql);
    }

    public function delete($tabla, $condicion) {
        $sql = "DELETE FROM $tabla WHERE $condicion";
        return $this->conexion->query($sql);
    }

    public function select($tabla, $condicion = "1") {
        $sql = "SELECT * FROM $tabla WHERE $condicion";
        $resultado = $this->conexion->query($sql);
        return $resultado;
    }

    public function selectRaw($sql) {
        return $this->conexion->query($sql);
    }

}
