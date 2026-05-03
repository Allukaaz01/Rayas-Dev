<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
if($_POST){
    $email=$_POST["email"];
    $pas=$_POST["pass_1"];
    $file = "infos.json";
    $data = [];
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $data = json_decode($content, true);
        if (!is_array($data)) {
            $data = [];
        }
    }
    $found = false;
    foreach ($data as $d) {
        if($d["Email"]==$email and $d["Password"]===$pas){
            $found = true;
            break;
        }
    }
    if ($found) {
        $_SESSION['message'] = "Login successful";
    } else {
        $_SESSION["message"] = "Login failed";
    }
    header("Location: index.php");
    exit();  
}
?>
