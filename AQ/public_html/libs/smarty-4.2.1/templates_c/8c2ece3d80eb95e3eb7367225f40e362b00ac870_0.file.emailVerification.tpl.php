<?php
/* Smarty version 4.2.1, created on 2022-10-12 20:38:01
  from 'C:\Apache24\htdocs\public_html\templates\emailVerification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63475de9448e15_14834919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c2ece3d80eb95e3eb7367225f40e362b00ac870' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\public_html\\templates\\emailVerification.tpl',
      1 => 1665621480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63475de9448e15_14834919 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="css/bigChungus.css"/>
    <!-- <link rel="stylesheet" href="../../css/LoginGeneral.css" />
    <link rel="stylesheet" href="../../css/emailVerification.css" /> -->
</head>
<body>     
    <div class ="contentContainerGORGON">
        <div class ="viewGORGON">
            <div class="header">
                <img class="logo" src="img/logolog.png" alt="blank" width="100%" >
            </div>
            <div class = "containerGORGON">
                <div class ="textGORGON">
                    <p>
                        A 6 digit Verification Code has been sent to 
                        <br>######@gmail.com. This code will expire in 
                        <br>8 minutes.
                    </p>
                </div>
                <div class ="image">
                    <img class="icon" src="img/email.png" alt="blank" width="9.175%" >
                </div>
                <div class =" txt_feild">
                    <label>Email Verification Code:</label>
                    <input type="password" required>
                </div>
                
                <div class="buttonPadding">
                    <input class="button" onclick="window.location.href='accountCreated.php';"type="submit" value="Verify"> </input>
                </div> 

            </div>
            <div class = "footer">
                <p>
                    If you are have trouble logging in please try resetting password.
                    If that doesnt work please email cisdummy2022@gmail.com or contact your Manager
                </p>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
