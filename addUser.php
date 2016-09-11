

<?php
$conn = $sql = $add = $id_person = $pozice = $jmeno = $prijmeni = null;
if(array_key_exists("add", $_POST)){
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "objednavky";

      // pripojeni k databazy
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // kontrola
      if ($conn->connect_error) 
	      {
	      die("Connection failed: " . $conn->connect_error);
          }

      // definovani promenych pro naplneni databaze
     $jmeno     = $_POST['jmeno'];
         $prijmeni  = $_POST['prijmeni'];
        $pozice    = $_POST['pozice'];
        $id_person = $_POST['id_person'];
	   // vkladani dat to databaze

       $sql = "insert into person (id, jmeno, prijmeni, pozice)
	           values ($id_person, '$jmeno', '$prijmeni', '$pozice')";



        mysqli_select_db($conn, 'objednavky');
        $retval = mysqli_query($conn, $sql );
            
        if(! $retval ) 
		    {
               die('Could not enter data: ' . mysqli_error($conn));
            }
            
            echo "Entered data successfully\n";
            
            mysqli_close($conn);
  }
 
            ?>


                 
