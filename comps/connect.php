<?php
function dbConnect () {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=baction","root","");
        return $conn;
    } catch (\Throwable $e) {
        print "Erreur " .$e->getMessage() . "<br/>";
    }
}
