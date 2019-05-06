<?php
session_start();
$host="localhost"; // host name (navn på den server den database ligger)
$username="root"; // mysgl username (standard admin i linux er root)
$password="1234"; //mysgl password (som standard ikke sat noget password)
$db_name="login"; // din database´s navn
$tbl_name="login"; // din tabel´s navn
// her opretter du forbindelse til MySQL databasen, med de oplysninger du har leveret i variablerne
//"mysqli_connect" er en php funktion der kan skabe forbindelse MySQL serveren og den databasen du skal bruge
$conn= Mysqli_connect($host, $username, $password, $db_name);

if(!$conn) {
    die("connection failed: " . mysqli_connect_error());  
}
// bruger navn og password fra vores formular.
$my_username=$_post['username'];
$my_password=$_post['password'];

//nu opbygger vi vorse SQL streng og smider den ind i variablen "sql"
// derefter bruger vi php funktionen "mysql_query()" til at køre SQl strengen og derefter bliver den sat
// ind imellem de 2 parenteser og det hele bliver smidt i variablen "$resultat"
$sql = "select * from $tbl_name where username= '$my_username' and password= '$my_password'";
$resultat= mysqli_query($conn, $sql);

// nu bruger vi en ny php funktion der hedder "mysql_num_rows()", den hjælper os med at tælle antal
// resultater vi for ud af vore sql "select..."
// dette gøre som i forrige funktion ved at sætte variablen "$resultat" ind i parentesen og smide dette
// resultat ind i variablen "$count".
$count=mysqli_num_rows($resultat);

// hvis denne php funktionen kommer tilbage med 1 række (row), vil det sige at der eksisteret en bruger
// med det indtastede brugernavn og password og nu kan vi bruge en simpel "if.."sætning for hvad der
// så skal ske.

if($count == 1)
{
    // hvis en bruger eksistere bruger vi "head(location: ..)" metoden for at sende brugeren
    // til den side der kræver login
    $_session['login']=1;
    header("location:correct_login.php");
}
 else
 {
     //hvis "$count" ikke er lig med 1, skriver vi besked til brugeren.
     echo "forkert brugernavn eller password";
 }

  


    



?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

