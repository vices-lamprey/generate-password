<?php
// index.php

require_once 'password_generator.php';

$password = generatePassword();

echo 'Generated Password: ' . $password;
