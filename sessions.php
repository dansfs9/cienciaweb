<?php

///////////////////////////////////////////////////////////////////////////////////////
// PHPmotion                                                http://www.phpmotion.com //
///////////////////////////////////////////////////////////////////////////////////////
// License: You are not to sell or distribute this software without permission       //
// Version: PHPmotion V2.0 beta                                                      //
// This file last modified:  07 Jan 2008                                             //
// Main Author: Brian Shawa -  bshawa@gmail.com                                      //
// Help and support please visit http://www.phpmotion.com                            //
// Copyright reserved                                                                //
//////////////////////////



//set username for passing around each php page
////////
$user_id = $_SESSION["user_id"];
$user_random_code = $_SESSION["random_code"];
$user_name = $_SESSION["user_name"];


//do not show signup link
$show_register = 1;

//get some basic user things like email for logged in members
/////////////////////////////////////////////////////////////
if ($user_id != ""){

//email inbox
$sql = "SELECT * FROM messages WHERE to_id = $user_id AND new = 0";
$number_of_emails = mysql_num_rows(mysql_query($sql));
$show_email_count = 1;

//show My favs link
$show_my_favs = 1;

//show My account link
$show_my_account = 1;

//do not show signup link
$show_register = "";


}


?>
