<?php
class Vino
{
    public $id;
    public $naziv;
    public $zemlja;
    public $opis;
    public $cena;

    public function __construct($id = null, $naziv = null, $zemlja = null, $opis = null, $cena = null)
    {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->zemlja = $zemlja;
        $this->opis = $opis;
        $this->cena = $cena;
    }

    public static function getAll(mysqli $conn)
    {
        $q = "SELECT * FROM vina";
        return $conn->query($q);
    }

    public static function getById($id, mysqli $conn)
    {
        $q = "SELECT * FROM vina WHERE id=$id";
        $myArray = array();
        if ($result = $conn->query($q)) {

            while ($row = $result->fetch_array(1)) {
                $myArray[] = $row;
            }
        }
        return $myArray;
    }

    public static function deleteById($id, mysqli $conn)
    {
        $q = "DELETE FROM vina WHERE id=$id";
        return $conn->query($q);
    }

    public static function add($naziv, $zemlja, $opis, $cena, mysqli $conn)
    {
        $q = "INSERT INTO vina(naziv,zemlja,opis,cena) values('$naziv','$zemlja', '$opis', $cena)";
        return $conn->query($q);
    }

    public static function update($id, $naziv, $zemlja, $opis, $cena, mysqli $conn)
    {
        $q = "UPDATE sir set naziv='$naziv', zemlja='$zemlja', opis='$opis', cena='$cena' where id=$id";
        return $conn->query($q);
    }
}