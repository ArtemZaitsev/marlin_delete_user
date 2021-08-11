<?php
session_start();
include 'function.php';

$user_id = $_GET["id"];
//echo $user_id;
//print_r($_SESSION) ;
//
//die;

delete_user($user_id);

if ($user_id === $_SESSION["user_id"]){
    unset($_SESSION["user_id"]);
    unset($_SESSION["user_email"]);
    redirect_to("page_login.php");
} else {
    redirect_to("users.php");
};