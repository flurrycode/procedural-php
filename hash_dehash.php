<?php

$input = "Abhishek";
#echo $input;

#Hashing
$hashed = password_hash("$input", PASSWORD_DEFAULT);
#echo $hashed;

#Dehashing
echo password_verify($input, $hashed);

