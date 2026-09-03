<?php

$hash = password_hash('senhadificil', PASSWORD_DEFAULT);

echo $hash;

if(password_verify('senhadificil', $hash)) {
    //login
} else {
    //logout
}