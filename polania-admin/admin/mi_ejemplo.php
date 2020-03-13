 
 <?php
  
        require_once("conexion.php");
        $id = $_GET["id"];
        $con = Conect();
        $query ="SELECT * FROM `noticias` WHERE id = $id AND id_inmobiliaria = 16";
        $sql = mysqli_query($con, $query);
        $res = json_encode($sql->fetch_array(MYSQLI_ASSOC));
        echo($res);

    ?> 
   
   

    
    
    


 