<?php
 // Paramètres de connexion à la base de données
 // Adaptez avec vos identifiants    
$host = 'sql303.infinityfree.com';           
// Exemple : sql303.infinityfree.com 
$user = 'if0_XXXXXXX';              
$password = 'XXXXXXXX';     
// Votre Identifiant InfinityFree
 // Mot de passe MySQL
 $dbname = 'if0_XXXXXXXX_intro_web';   
// Nom exact de la base
 // Connexion
 $conn = mysqli_connect($host, $user, $password, $dbname);
 // Vérification de la connexion
 if (!$conn) {
 die("Connexion échouée : " . mysqli_connect_error());
 }

  