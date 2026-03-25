<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DailyCalc LK | Home</title>

    <!-- Link Coustom CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <!-- Link Icons -->
    <link rel="icon" href="resourses/company_logo.png" />
</head>

<body>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php require "header.php"; ?>
                <!-- Section 1 Start  -->

                <div class="row">
                    <div class="col-12 section_1 py-3 p-3">
                        <div class="row">
                            <div class="col-12 col-md-6 mt-5 text-center m-auto">
                                <h1 class="title_01">Your Trusted Calculator for </br> Daily Finances</h1>
                                <p class="fs-4">Accurate, easy-to-use financial tailored for Sri Lanka.</br> Simplify your daily finances tasks with DailyCalc LK.</p>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center gap-3">
                                        <a href="calc_list.php" class="btn btn-success btn-lg px-4">Start Calculating</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 m-auto mb-3 text-center"><img src="resourses/first_img.png" class="image_1 d-none d-md-block" alt="Calculator"> </div>
                        </div>
                    </div>
                </div>
                <!-- Section 1 End  -->



                <!-- Calculate Start -->

                <div class="col-12 col-sm-10 col-md-6 col-lg-3 mt-4 m-auto calculator border_1">
                    <div class="row  ">
                        <div class="col-12 text-center">
                            <h3 class="text-secondary">Simple Calculator.</h3>

                        </div>
                        <div class="col-11 m-auto d-grid">
                            <input type="text" name="display" id="display" class="form-control text-end" readonly />
                        </div>
                        <div class="col-9 m-auto mt-3">
                            <div class="row text-center">
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="clearDisplay()" value="C" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="backspace()" value="X" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('*')" value="*" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('/')" value="/">
                                </div>
                            </div>
                            <div class="row mt-2 text-center">
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('7')" value="7" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('8')" value="8" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('9')" value="9" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('**')" value="**" />
                                </div>
                            </div>
                            <div class="row mt-2 text-center">
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('4')" value="4" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('5')" value="5" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('6')" value="6" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('-')" value="-" />
                                </div>
                            </div>
                            <div class="row mt-2 text-center">
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('1')" value="1" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('2')" value="2" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('3')" value="3" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('+')" value="+" />
                                </div>
                            </div>
                            <div class="row mt-2 text-center">
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('.')" value="." />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('0')" value="0" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="press('00')" value="00" />
                                </div>
                                <div class="col-3">
                                    <input type="button" class="btn btn-1 btn-outline-dark" onclick="calculate()" value="=" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Calculate End -->



                <!-- Section 2 Start -->

                <div class="row section_2 py-3 p-3" id="section_2">
                    <div class="col-12 text-center title_02 my-5 m-auto">
                        <h2 class="title_01">Essential FinancialTools, Made Simple</h2>
                        <span class="fs-5">Form daily expenses to personal and business calculations, we cover it all. Calculate
                            <br /> like a pro with user-friendly tools designed specifically for Sri Lankan users.</span>

                    </div>
                    <div class="col-10 m-auto text-center justify-content-center d-flex gap-5 flex-wrap">
                        <div class="col-3 col-12 col-sm-6 col-md-4 mb-">
                            <div class="card m-auto crd_1">
                                <img src="resourses/tax_img.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-primary">Income Tax Calculator</h5>
                                    <p class="card-text text_1">Quickly Calculate your income tax with up-to-date Sri Lanka Tax rates.</p>
                                    <a href="calc_list.php" class="btn btn-primary">Calculate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-12 col-sm-6 col-md-4 mb-">
                            <div class="card crd_1">
                                <img src="resourses/loan_img.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-success">Loan & EMI Calculator</h5>
                                    <p class="card-text text_1">Plan your lonas ane EMI payments effortlessly.</p>
                                    <a href="calc_list.php" class="btn btn-success">Calculate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-12 col-sm-6 col-md-4 mb-">
                            <div class="card crd_1">
                                <img src="resourses/saving_img.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold text-success">Savings & Interest Calculate</h5>
                                    <p class="card-text text_1">Estimate your savings growth and interest earned easily.</p>
                                    <a href="calc_list.php" class="btn btn-success ">Calculate Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-8">
                            <span class="fs-4"><i class="bi bi-lightbulb"></i> More calculators coming soon!</span>
                        </div>

                    </div>
                </div>

                <!-- Section 2 End -->


                <!-- section 3 Start -->

                <div class="row">
                    <div class="col-12 py-3 p-3 gy-5">
                        <div class="row">
                            <div class="col-12 text-center my-5 m-auto">
                                <h1>Why Choose DailyCalc LK?</h1>
                                <span class="fs-4">Reliable, accurate, and tailored for Sri Lankan - discover why thousands
                                    <br>trust DailyCalc LK.</span>
                            </div>

                            <div class="col-10  m-auto text-center justify-content-center d-flex gap-5 flex-wrap">
                                <div class="row">
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="card c-1" >
                                            <img src="resourses/1.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p class="card-text text_1">Financial calculator made for <br /> the needs of Sri Lanka users.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="card c-1" >
                                            <img src="resourses/2.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p class="card-text text_1">Always updated with the latest <br /> Lankan Tax laws and rates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-4">
                                        <div class="card c-1" >
                                            <img src="resourses/3.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p class="card-text text_1">Simple interface, perfect for everyone </br> from students to professionals.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="calc_list.php" class="btn mt-3 btn-success">Start calculators</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- section 3 End -->

                <!-- <div class="row">
                    <div class="col-12 section_2 py-3 p-3">
                        <div class="row">
                            <div class="col-6 m-auto mb-3"><img src="resourses/second_img.png" class="image_2 d-none d-md-block" alt="Calculator"> </div>
                            <div class="col-6 mt-5 text-center m-auto">
                                <h1 class="title_02">Why Choose DailyCalc LK?</h1>
                                <ul class="fs-4 text-start">
                                    <li>Localized for Sri Lankan Users: Tailored to meet the unique financial needs of Sri Lanka.</li>
                                    <li>User-Friendly Interface: Intuitive design for easy navigation and quick calculations.</li>
                                    <li>Comprehensive Financial Tools: Wide range of calculators for budgeting, loans, investments, and more.</li>
                                    <li>Accurate and Reliable: Trusted by users for precise financial calculations.</li>
                                    <li>Free to Use: Access essential financial tools without any cost.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->



                <br>

                
                <?php require "footer.php"; ?>
            </div>
        </div>
    </div>







    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>