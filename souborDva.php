<html>
   
   <head>
      <title>Naplnovani databaze</title>
   </head>
   
   <body>

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
         $prijmeni  = $_POST['id_person'];
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
  else 
  {
            ?>


<form method = "post" action = "">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Person ID</td>
                        <td><input name = "id_person" type = "text" 
                           id = "id_person"></td>
                     </tr>
                     
                     <tr>
                        <td width = "100">Jmeno</td>
                        <td><input name = "jmeno" type = "text" 
                           id = "jmeno"></td>
                     </tr>	
					 
                     <tr>
                        <td width = "100">prijmeni</td>
                        <td><input name = "prijmeni" type = "text" 
                           id = "prijmeni"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">pozice</td>
                        <td><input name = "pozice" type = "text" 
                           id = "pozice"></td>
                     </tr>
                  
                   
                
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Pridat uzivatele">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            
    <?php } ?>
   </body>
</html>
