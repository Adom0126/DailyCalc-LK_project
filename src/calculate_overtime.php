<?php

$hourly_rate = $_POST["hourly_rate"];
$ot_hours = $_POST["ot_hours"];

$tot = $hourly_rate * $ot_hours;

echo json_encode([
    "total_salary" => number_format($tot, 2, ".", "")
]);
