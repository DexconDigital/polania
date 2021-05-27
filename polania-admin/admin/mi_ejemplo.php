 
 <?php
  
        require_once("conexion.php");
        $id = $_GET["id"];
        $con = Conect();
        $query ="SELECT * FROM noticias WHERE id = $id AND id_inmobiliaria2 = 16";
        $resultado=$con->prepare($query);
        $resultado->execute();
        // $sql = mysqli_query($con, $query);
        // $res = json_encode($sql->fetch_array(MYSQLI_ASSOC));
        $res = json_encode($resultado->fetch(PDO::FETCH_ASSOC));
        echo($res);

    ?> 
   
   

    
    
    


 