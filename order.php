<?php
    function executeQuery($query)
    {
        $connect = mysqli_connect("localhost", "jovana13", "1310", "vina");
        $result = mysqli_query($connect, $query);
        return $result;
    }

    if(isset($_POST['ASC']))
    {
        $asc_query = "SELECT * FROM vina ORDER BY cena ASC";
        $result = executeQuery($asc_query);
    }
    elseif (isset($_POST['DESC']))
    {
        $desc_query = "SELECT * FROM vina ORDER BY cena DESC";
        $result = executeQuery($desc_query);
    }
?>