<?php

function login(){

if(empty($_POST['username'])){

$error['username'] = "Please Enter Username";

}

else if(empty($_POST['password'])){

$error['password'] = "Please Enter Password";
}

return $error;
}

?>