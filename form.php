<?php

    // Funcion de validación de campos
    function validaCampos($nombre, $apellido1, $apellido2, $email, $login, $password)
    {
        if (!preg_match("/^[a-zA-Z\s]*$/", $nombre) || !preg_match("/^[a-zA-Z\s]*$/", $apellido1) || !preg_match("/^[a-zA-Z\s]*$/", $apellido2)) {
            return "Este campo solo puede contener letras y espacios.";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "El formato de correo electrónico no es válido.";
        } else if (strlen($password) < 4 || strlen($password) > 8) {
            return "La contraseña debe tener entre 4 y 8 caracteres.";
        }
        return "ok";
    }

    if($_POST){

        // datos de conexión
        $servername = "localhost";
        $username = "root";
        $passwordDB = "";
        $dbname = "practicafinal";

        // crea la conexion
        $conn = new mysqli($servername, $username, $passwordDB, $dbname);

        // comprueba la conexión
        if($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Recogida de datos del formulario
        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $password = $_POST['password'];

        // Validación de datos
        $validacion = validaCampos($nombre, $apellido1, $apellido2, $email, $login, $password);

        // Si la validación no ha sido correcta
        if($validacion != "ok"){
            echo $validacion;
            echo '<br>';
            echo '<a href="index.html">Volver</a>';
        } else {

            // Si la validación ha sido correcta, se comprueba la existencia del mail
            $usuariosEmail = "SELECT * FROM usuario WHERE email = '$email'";
            $result = $conn->query($usuariosEmail);

            // Si ya existe un usuario con ese email
            if($result->num_rows > 0) {
                echo "Ya existe una cuenta asociada a ese email. Por favor, intentelo con otro email.";
                echo '<br>';
                echo '<a href="index.html">Volver</a>';
            } else {

                // Si no existe ningún usuario con ese email, se añade
                $sql = "INSERT INTO usuario(nombre, apellido1, apellido2, email, login, password) 
                    VALUES ('$nombre', '$apellido1', '$apellido2', '$email', '$login', '$password')";

                if($conn->query($sql) === TRUE) {
                    echo "Registro completado con éxito";
                    echo '<br><a href="index.html">Volver al registro</a>';
                    echo '<br><a href="consultaUsuarios.php">Consulta usuarios</a>';
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        $conn->close();
    }
?>