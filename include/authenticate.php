<?php
    session_start();
    require('include/envLoader.php');

    $auth_json_path = getenv(AUTH_FILE);
    $json = file_get_contents($auth_json_path);
    $userinfo = json_decode($json);

    if(isset($_GET['logout'])) {
        session_destroy();
        header('Location: /login.php');
    }

    if(isset($_POST['username'])) {
        $username = $_POST['username'];
        if($userinfo->users->$username == $_POST['password']) {
            $_SESSION['username'] = $_POST['username'];
        }else {
            //Invalid Login
        }
    }

    if(!isset($_SESSION['username'])){
        header('Location: /login.php');
    }
?>
