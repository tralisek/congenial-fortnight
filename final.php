<?php
		//login
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "objednavky";
	    //******************************************************
	  include 'simple_html_dom.php';
      $html = file_get_html('http://www.quickbistro.cz/cs/rozvoz');
      $count = substr_count($html,'<li class="item">');
      $jidloA = array();
      $cenaA = array();   
	   //********************************************************
	  // pripojeni k databazy
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // kontrola pripojeni
      if ($conn->connect_error) 
	      {
	      $message = "Connection failed: " . $conn->connect_error;
          } else { 
		  //pripojeni navazano
			 for($x = 0; $x <= $count; $x++) 
		    {
		     $cena = $html->find("span[class=price]", $x);
			 $cenaA[$x] = $html->find("span[class=price]", $x);
		     $jidlo = $html->find("div[class=article]", $x); 
			 $jidloA[$x] = $html->find("div[class=article]", $x);
		   
			 $nerozvazaneJidlo = $jidloA[$x];
			 $jidloSQL = strip_tags($nerozvazaneJidlo);
			 $nerozvazanaCena = $cenaA[$x];
			 $cenaSQL = strip_tags($nerozvazanaCena);
			  
			 $sql = "insert into jidla (id, popis, cena)
	              values ($x, '$jidloSQL', '$cenaSQL')";
			 
			 }  
     
	      
			 }
	   if($conn->query($sql) === TRUE) {
		echo "Data inserted succesfully";
	} else {
		echo "error creating table" . $conn->error;
	}
	$conn->close();
?>
