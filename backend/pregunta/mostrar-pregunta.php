<?php
require_once 'conexion.php';
$query = "SELECT * FROM pregunta";

echo '<h1>pregunta</h1>
   <table class="table">
      <thead>
          <tr>
             <th scope="col">ID</th>
             <th scope="col">pregunta</th>
             <th scope="col">imagen</th>
           <tr> 
       <thead>
       <tbody>';
   while ($pregunta = mysqli_fetch_assoc($query)){      
        echo'<tr>
            <th scope="row">'.$pregunta['id'].'</th>
             <th>' .$pregunta['pregunta'].'</td>
             <th>' .$pregunta['imagen'].'</td>
       </tr>';
   }
      
    echo '</tbody></table>';

    
?>

    


    