<?php

// zpracovavame pouze pokud prijde parametr pro pridani
if (array_key_exists("add", $_POST)) {
    // informace pro pripojeni
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "objednavky";

    // pripojeni k databazi
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        // nepodarilo se pripojit do databaze
        $message = "Connection failed: " . $conn->connect_error;
    } else {
        // definovani promenych pro naplneni databaze
        $jmeno     = $_POST['jmeno'];
        $prijmeni  = $_POST['prijmeni'];
        $pozice    = $_POST['pozice'];
        $id_person = $_POST['id_person'];

        // vkladani dat to databaze
        $sql = "INSERT INTO person (id, jmeno, prijmeni, pozice)
                VALUES ($id_person, '$jmeno', '$prijmeni', '$pozice')";

        // provadime query
        if (mysqli_query($conn, $sql)) {
            $message = "Entered data successfully";
        } else {
            $message = 'Could not enter data: ' . mysqli_error($conn);
        }

        // ukonceni spojeni
        mysqli_close($conn);
    }

    // presmerovani s informaci, co se provedlo
    header("Location: formular.php?message=$message");
}