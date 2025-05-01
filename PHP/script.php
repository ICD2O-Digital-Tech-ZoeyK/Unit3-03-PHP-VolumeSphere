// Copyright (c) 2020 Mr. Coxall All rights reserved
//
// Created by: Mr. Coxall
// Created on: Sep 2020
// This file contains the JS functions for index.html
<?php
// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $radius = floatval($_POST['radius']);

  // Validate the input
  if ($radius >= 0) {
    $volume = (4 / 3) * pi() * pow($radius, 3);
    $volume = round($volume, 2);
  } else {
    $volume = "Invalid input.";
  }
} else {
  header("Location: ../index.php");
  exit();
}
?>
