<?php

/**
 * Clase utilitaria que maneja la conexion/desconexion a la base de datos
 * mediante las funciones PDO (PHP Data Objects).
 * Utiliza el patron de diseno singleton para el manejo de la conexion.
 * @author mrea
 */
class Database {

//Propiedades estaticas con la informacion de la conexion (DSN):
    private static $dbName = 'automoviles';
    private static $dbHost ='navirojas.jl.serv.net.mx';
    private static $dbUsername = 'root';
    private static $dbUserPassword = 'NOOpde84779';
//Propiedad para control de la conexion:
    private static $conexion = null;

    /**
     * No se permite instanciar esta clase, se utilizan sus elementos
     * de tipo estatico.
     */

    /**
     * Metodo estatico que crea una conexion a la base de datos.
     * @return type
     */
    public static function connect() {
// Una sola conexion para toda la aplicacion (singleton):
        if (null == self::$conexion) {
            try {
                self::$conexion = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::
                        $dbName, self::$dbUsername, self::$dbUserPassword);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$conexion;
    }
    /**
     * Metodo estatico para desconexion de la bdd.
     */
    public static function disconnect() {
        self::$conexion = null;
    }
}
?>