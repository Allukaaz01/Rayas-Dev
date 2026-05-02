<?php
include("function.php");
?>
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
            <label>Nom :<label>
            <input type="text" name="nom" required>    
        <div>
        <div>
            <label>Prenom :<label>
            <input type="text" name="prenom" required>    
        <div>
        <div>
            <label>Date de naissance :<label>
            <input type="date" name="dat" required>    
        <div>
        <div>
            <label>Email :<label>
            <input type="email" name="email" pattern="[A-Za-z0-9.]+@gmail\.[A-Za-z]{2,}$" required>
        <div>
        <div>
            <label>Adresse :<label>
            <input type="text" name="adresse" pattern="[A-Za-z\s]{4,}[0-9]*" title="L'adresse doit contenir des lettres " required>
        <div>
            <label>Mot de passe :<label>
            <input type="password" name="pass_1" required>    
        <div>
        <div>
            <label>Confirmer Mot de passe :<label>
            <input type="password" name="pass_2" required>    
        <div>
        <div>
            <a href="connection.php">Se connecter</a>
        <div>
        <div>
            <input type="submit" value="S'inscrire">
        <div>
</form>

<?php
if($_POST){
    
   

// SANS la partie recherche dans base de donnees
    $password1=$_POST["pass_1"];
    $password2=$_POST["pass_2"];
        $jsonContent = file_get_contents('infos.json');
        $data = json_decode($jsonContent, true);
            if($password1==$password2){
                
             
            $nom=$_POST["nom"];
            $prenom=$_POST["prenom"];
            $date=$_POST["dat"];
            $email=$_POST["email"];
            $adresse=$_POST["adresse"];
            
            
            $data=[
                "Nom"=>$nom,
                "Prenom"=>$prenom,
                "Date"=>$date,
                "Email"=>$email,
                "Adresse"=>$adresse,
                "Adresse"=>$adresse,
                "Password"=>$password1
                ];
            $monfichier = "infos.json";
            //$utilisateurs = [];
            
            // Lecture du fichier existant s'il existe
            if (file_exists($monfichier)) {
                $contenu = file_get_contents($monfichier);
                if (!empty($contenu)) {
                    $utilisateurs = json_decode($contenu, true);
                        // Si ce n'est pas un tableau, on le transforme
                        if (!is_array($utilisateurs)) {
                            $utilisateurs = [];
                            }
                }
                } 
                // Ajout du nouvel utilisateur
                $utilisateurs[] = $data;
                
                // Conversion en JSON
                $jsonData = json_encode($utilisateurs, JSON_PRETTY_PRINT);
                
                // Enregistrement dans le fichier
                if (file_put_contents($monfichier, $jsonData)) {
                    echo '<h3>Sauvegarde réussie !</h3>';
                    } 
                    else {
                        echo '<h3>Erreur lors de la sauvegarde.</h3>';
                        }   
                        }
                        else{
                            echo "<h3>Veuilez confirmer le meot de passe correctement</h3>";
                            }
            }   
        
    
}
?>
</body>
</html>