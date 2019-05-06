<?php
session_start();
// vi laver en "if (..:) sætning der sikrer os at, det kun er hvis der er blevet klikket på "log ud" knappen
// at vi går igang med at slettet sessionen og sender brugeren tilbage til log ind siden
if(isset($_post['logout']))
{
    session_destroy();
    header('location:login.php');
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

