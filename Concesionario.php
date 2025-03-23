<?php
require_once 'Coche.php';
require_once 'Database.php'; // Clase para la conexión a la BBDD

class Concesionario {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function obtenerCoches() {
        $query = "SELECT * FROM coches";
        $result = $this->db->query($query);
        $coches = [];

        while ($row = $result->fetch_assoc()) {
            $coches[] = new Coche(
                $row['id'], $row['marca'], $row['modelo'], $row['precio'], $row['descripcion_corta'],
                $row['anyo'], $row['km'], $row['combustible'], $row['color'],
                $row['motor'], $row['puertas'], $row['transmision'], $row['imagenes']
            );
        }

        return $coches;
    }
}
?>
