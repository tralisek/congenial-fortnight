<html>

   <head>
      <title>Naplnovani databaze</title>
   </head>

   <body>

   <?php
      // vypis hlasky
      if (array_key_exists("message", $_GET)) {
         echo "<pre>".$_GET["message"]."</pre>";
      }
   ?>

   <form method = "post" action = "addUser.php">
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


   </body>
</html>
