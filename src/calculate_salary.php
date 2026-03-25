<?php

$basic_salary = $_POST["basic_salary"];
$allowances = $_POST["allowances"];
$epf_percent = $_POST["epf_percent"];
$etf_percent = $_POST["etf_percent"];

// Calculate the take-home salary
$epf = ($basic_salary * $epf_percent) / 100;
$etf = ($basic_salary * $etf_percent) / 100;
// $paye = ($basic_salary * $paye_percent) / 100;

if ($basic_salary <= 50000) {
    $paye = 0;
} elseif ($basic_salary <= 75000) {
    $paye = (($basic_salary - 50000) * 6) / 100;
} elseif ($basic_salary <= 100000) {
    $paye = (25000 * 6) / 100 + (($basic_salary - 75000) * 12) / 100;
} else {
    $paye = (25000 * 6) / 100 + (25000 * 12) / 100 + (($basic_salary - 100000) * 18) / 100;
}




$total_deductions = $epf + $etf + $paye;
$take_home_salary = $basic_salary + $allowances - $total_deductions;


echo json_encode([
    "epf" => number_format($epf, 2, ".", ""),
    "etf" => number_format($etf, 2, ".", ""),
    "paye" => number_format($paye, 2, ".", ""),
    "total_deduction" => number_format($total_deductions, 2, ".", ""),
    "take_home_salary" => number_format($take_home_salary, 2, ".", "")
    ]);
?>
