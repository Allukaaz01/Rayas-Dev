<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label>Email :</label>
            <input type="email" name="ema" pattern="[A-Za-z0-9.]+@gmail\.[A-Za-z]{2,}$" required >
        <div>
        <div>
            <label>Mot de passe : </label>
            <input type="password" name="pass">
        </div>
        <div>
            <a href="index.php">S'inscrire</a>
        <div>
            <input type="submit" value="Se connecter">
        <form>


    <?php
    if($_POST){
        $email=$_POST["ema"];
        $pas=$_POST["pass"];
        $jsonContent = file_get_contents('infos.json');
        $data = json_decode($jsonContent, true);
        foreach ($data as $d) {
            if($d["Email"]==$email and $d["Password"]==$pas){
                echo "<h2>Connection avec succes</h2>";
                break;
            }
            else{
                echo "<h2>Connection failed</h2>";
                break;
            }
        }
        
    }
    ?>
</body>
</html>