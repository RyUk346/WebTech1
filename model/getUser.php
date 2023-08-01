<?php

require_once ('model.php');

function getUserAccount($username){
    return getUser($username);
}

function getUserEmail($email){
    return getUserByEmail($email);
}

?>