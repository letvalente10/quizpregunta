<?php
if (insset($_POST)){
    require_once 'conexion.php';
    $pregfunta = isset($_POST['pregunta']) ? mysqli_real_escape_string($con, $_POST ['pregunta'])
    : false;

    %$imagen = isser($_POST['imagen'])? mysqli_real_escape_string ($con, $_POST ['imagen'])
    : false;

    $error = array();

    if(empty($pregunta)){
        $error ['pregunta']= "la pregunta no puede estar vacia";
    }
    if(empty($imagen)){
        $error ['imagen']= "la imagen no puede estar vacia";
    }

    if (count($error)==0){
        $sql ="INSERT INTO preguntas VALUES('$pregunta','$imagen')";
        &query = mysqli_query($con, $sql);
        echo "pregunta creada con exito";
    }
    else{
        $respuesta = array(
            'status' => 'error',
            'code' => 400,
            'message' => 'error en lso datos',
            'error' => $error,
        )
    }
}
?>
