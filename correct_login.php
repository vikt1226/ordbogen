<?php
session_start();

// her bruger vi en simpel "if(...)"; der siger hvis ikke (!) $_session['login'] eksisterer
// bliver man smidt tilbage til login sioden
if (!isset($session['login']))
{
    header("location:login.php");
}
?>
<!--her sætter vi bare en tekst en med velkommen hilsen, så vi ved at vores system virker -->
hej og velkommen til mit første login beskyttet site !
<!-- log ud knap der sender og se lo ud siden -->
<form action="logout.php" method="post">
    <input type="sumit" name="logout" value="log ud">
</form>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

