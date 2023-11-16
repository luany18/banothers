<?php
include('config.php');
class Mysql{
    public static $pdo;
    public static function conectar(){

       $host = 'localhost'; // Coloque o endereço do seu servidor MySQL
        $dbname = 'cliente'; // Nome do seu banco de dados
        $usuario = 'root'; // Seu nome de usuário do MySQL
        $senha = ''; // Sua senha do MySQL

        if (self::$pdo == null) {
            try {
                $opcoes = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                );

                self::$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha, $opcoes);
            } catch (Exception $e) {
                echo '<h2 style="color:red;">Erro ao conectar com o banco de dados:(</h2>';
                die();
            }
        }
        return self::$pdo;
    }
}