<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'guest-contact';

// Arrow function returned mysqli connection
$connection = fn() => new mysqli($hostname, $username, $password, $database) or die (mysqli_errno());