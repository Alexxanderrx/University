<?php
session_start();
require("connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //si es POST inicia secion con email y pass
    $_SESSION["email_Lg"] = $_POST["emailLg"];
    $_SESSION["pass_Lg"] = $_POST["passLg"];

    $eLG = $_SESSION["email_Lg"];
    $pLG = $_SESSION["pass_Lg"];

    $resultLog = $mysqli->query("SELECT * FROM info WHERE email = '$eLG' AND password ='$pLG'");
    $datosLog = $resultLog->fetch_assoc();

    // $resultLog = $mysqli->query("SELECT * FROM info WHERE email = '$eLG' AND password ='$pLG'");
    // $datosLog = $resultLog->fetch_assoc();

    $datosLogRow = $resultLog->num_rows;

    if ($datosLogRow == 1) {

        $_SESSION["nombre"] = $datosLog["name"];


        if ($datosLog["id_rol"] == 1) {

            $_SESSION["cargo"] = "Administrador";
            // $_SESSION[""]=;
            // $_SESSION[""]=;
            // $_SESSION[""]=;
            // $show = "SELECT * FROM user WHERE email = '$eLG' AND password = '$pLG' AND rol = 1";
        } elseif ($datosLog["id_rol"] == 2) {
            $_SESSION["cargo"] = "Maestro";
        } elseif ($datosLog["id_rol"] == 3) {
            $_SESSION["cargo"] = "Alumno";
        }

        header("Location:lobbyAdmin.php");
        die();
    } else {
        $_SESSION["message_error"] = "Usuario o contraseña incorrectos.";
        header("Location:index.php");
        die();
    }

    // if ($datosVery["rol"] == "admin") {
    //     $show = "SELECT * FROM user WHERE email = '$eLG' AND password = '$pLG' AND rol = 1";
    // } elseif ($datosVery["rol"] == "mod") {
    //     $show = "SELECT * FROM user WHERE email = '$eLG' AND password = '$pLG' AND rol = 2";
    // } elseif ($datosVery["rol"] == "empleado") {
    //     $show = "SELECT * FROM user WHERE email = '$eLG' AND password = '$pLG' AND rol = 3";
    // }

    // if (password_verify($pLG, $datosVery["password"])) {

    // $show = "SELECT * FROM user WHERE email = '$eLG'";
    // } else {
    // $show = "SELECT * FROM user WHERE email = '$eLG' AND password = '$pLG'";
    //     $show = "SELECT * FROM user WHERE email = '$eLG' AND password = '$pLG' AND rol ='admin'";
    // }
} else {
    //si NO es POST inicia secion con id
    // $dId = $_SESSION["info_id"];
    // $show = "SELECT * FROM users WHERE id = '$dId';";
    $_SESSION["message_error"] = "Erro al enviar datos.";
    header("Location:index.php");
    die();
}

// $result = $mysqli->query($show);
// $datos = $result->fetch_assoc();
// $numFilas = $result->num_rows;



// if ($numFilas === 1) {
//     header("Location: lobbyAdmin.php");
// } else {
//     $_SESSION["error_lg"] = "Wrong email or password.";
//     header("Location: login.php");
//     die();
// }

// $_SESSION["datos"] = $datos;
// $_SESSION["info_id"] = $_SESSION["datos"]["id_info"];
// $ssId = $_SESSION["info_id"];

// $showId = "SELECT * FROM users_admin WHERE id_info = '$ssId'";

// $resultId = $mysqli->query($showId);
// $datosId = $resultId->fetch_assoc();
// $_SESSION["datosId"] = $datosId;

// $numFilasId = $resultId->num_rows;

// $_SESSION["info_photo"] = $_SESSION["datosId"]["photo"];
// $_SESSION["info_name"] = $_SESSION["datosId"]["name"];
// $_SESSION["info_bio"] = $_SESSION["datosId"]["bio"];
// $_SESSION["info_phone"] = $_SESSION["datosId"]["phone"];
// $_SESSION["info_email"] = $_SESSION["datosId"]["email"];
// $_SESSION["info_password"] = $_SESSION["datosId"]["password"];
// if ($numFilasId === 1) {

//     header("Location: lobyAdmin.php");
// } else {
//     $_SESSION["error_lg"] = "Wrong email or password.";
//     header("Location: login.php");
//     die();
// }