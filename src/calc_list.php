<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DailyCalc LK | Calculators.</title>
    <!-- Link Coustom CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <!-- Link Icons -->
    <link rel="icon" href="resourses/company_logo.png" />
</head>

<body class="main-body-2">


    <?php include 'header.php'; ?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12 calculator_btn py-3 p-3">
                <h2 class="mt-4 text-center m-auto fs-1">Calculators</h2>

                <!-- Money & Salary Calculators Start -->

                <hr />

                <div class="row p-3 py-3" id="money">
                    <h2>Money & Salary Calculators</h2>
                    <div class="col-sm-4 col-12 mb-3 mb-sm-0">
                        <div class="card m_1" onclick="take_home_salary()">
                            <div class="card-body">
                                <h5 class="card-title">Take-home Salary</h5>
                                <p class="card-text">Calculate your take-home salary after deductions.</p>
                                <a href="#" class="btn">Calculate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0 col-12">
                        <div class="card m_1" onclick="overtime_payment()">
                            <div class="card-body">
                                <h5 class="card-title">Overtime Payment</h5>
                                <p class="card-text">Calculate your parttime salary.</p>
                                <a href="#" class="btn ">Calculate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0 col-12">
                        <div class="card m_1" onclick="freelance_usd_to_lkr()">
                            <div class="card-body">
                                <h5 class="card-title">Freelance USD → LKR</h5>
                                <p class="card-text">Convert your freelance earnings from USD to LKR.</p>
                                <a href="#" class="btn ">Calculate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Money & Salary Calculators End -->

                <!-- Bill & Utility Calculators Start -->

                <div class="row p-3 py-3" id="bill">
                    <h2>Bill & Utility Calculators</h2>
                    <div class="col-sm-4 col-12 mb-3 mb-sm-0">
                        <div class="card b_1" onclick="ElectricityBill()">
                            <div class="card-body">
                                <h5 class="card-title">Electricity Bill</h5>
                                <p class="card-text">Calculate your electricity bill.</p>
                                <a href="#" class="btn ">Calculate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0 col-12">
                        <div class="card b_1" onclick="WaterBill()">
                            <div class="card-body">
                                <h5 class="card-title">Water Bill</h5>
                                <p class="card-text">Calculate your water bill.</p>
                                <a href="#" class="btn ">Calculate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0 col-12">
                        <div class="card b_1" onclick="MobileDataPlanSuggestion()">
                            <div class="card-body">
                                <h5 class="card-title">Mobile data Plan Suggestion</h5>
                                <p class="card-text">See the best package for your needs.</p>
                                <a href="#" class="btn ">Coming Soon...</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Bill & Utility Calculators End -->

                <!-- Life event Calculators Start -->

                <div class="row p-3 py-3" id="life">
                    <h2>Life event Calculators</h2>
                    <div class="col-sm-4 col-12 mb-3 mb-sm-0">
                        <div class="card l_1" onclick="Wedding_budget()">
                            <div class="card-body">
                                <h5 class="card-title">Wedding Budget</h5>
                                <p class="card-text">Calculate your wedding budget.</p>
                                <a href="#" class="btn ">Calculate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0 col-12">
                        <div class="card l_1" onclick="Houserant()">
                            <div class="card-body">
                                <h5 class="card-title">House Rental</h5>
                                <p class="card-text">Calculate your house rental. </p>
                                <a href="#" class="btn">Calculate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0 col-12">
                        <div class="card l_1" onclick="monthly_baby_Expense()">
                            <div class="card-body">
                                <h5 class="card-title">Baby Monthly Expense Calculator</h5>
                                <p class="card-text">Calculate your Baby Expense.</p>
                                <a href="#" class="btn ">Calculate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Life event Calculators End -->

                <!-- Education Calculators Start -->

                <div class="row p-3 py-3" id="education">
                    <h2>Education Calculators</h2>
                    <div class="col-sm-4 col-12 mb-3 mb-sm-0">
                        <div class="card e_1" onclick="GPA_calculator()">
                            <div class="card-body">
                                <h5 class="card-title">GPA Calculator</h5>
                                <p class="card-text">Calculate your GPA.</p>
                                <a href="#" class="btn ">Calculate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0 col-12">
                        <div class="card e_1" onclick="attendece_calc()">
                            <div class="card-body">
                                <h5 class="card-title">Attendance Percentage Calculator</h5>
                                <p class="card-text">Calculate your attendance percentage. </p>
                                <a href="#" class="btn">Calculate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0 col-12">
                        <div class="card e_1" onclick="Study_Time_per_Subject()">
                            <div class="card-body">
                                <h5 class="card-title">Study Time Per Subject Calculator</h5>
                                <p class="card-text">Calculate your study time per subject.</p>
                                <a href="#" class="btn ">Calculate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Education Calculators End -->


                <!-- Productivity Calculators Start -->

                <div class="row p-3 py-3" id="productivity">
                    <h2>Productivity Calculators</h2>
                    <!--<div class="col-sm-4 col-12 mb-3 mb-sm-0">
                        <div class="card p_1" onclick="Wedding_budget()">
                            <div class="card-body">
                                <h5 class="card-title">Wedding Budget</h5>
                                <p class="card-text">Calculate your wedding budget.</p>
                                <a href="#" class="btn ">Calculate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0 col-12">
                        <div class="card p_1" onclick="Houserant()">
                            <div class="card-body">
                                <h5 class="card-title">House Rental</h5>
                                <p class="card-text">Calculate your house rental. </p>
                                <a href="#" class="btn">Calculate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0 col-12">
                        <div class="card p_1" onclick="monthly_baby_Expense()">
                            <div class="card-body">
                                <h5 class="card-title">Baby Monthly Expense Calculator</h5>
                                <p class="card-text">Calculate your Baby Expense.</p>
                                <a href="#" class="btn ">Calculate</a>
                            </div>
                        </div>
                    </div> -->
                    <h3>
                        This section is under development. Stay tuned for more productivity calculators coming soon!
                    </h3>

                </div>

                <hr>

                <!-- Productivity Calculators End -->






            </div>
            <?php include 'footer.php'; ?>
        </div>
    </div>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>