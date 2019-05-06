<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form name="form1" method="post" action="checklogin.php">
         <table width="150px" border="0" cellpadding="3" cellspacing="1" bgcolor=#00FF00">
             </tr>
             <tr>
                 <td width="78">Brugernavn</td>
                 <td wiidth="6">:</td>
                 <td width="294"><input name="username" type="text"></td>
                 </td>
             </tr>
             <tr>
                 <td>Password</td>
                 <td>:</td>
                 <td><input name="password" type="password"></td>
             </tr>
             <tr>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td><input type="submit" name="logind" value="login"></td>
             </tr>
         </table>
        <?php
        
        ?>
    </body>
</html>
