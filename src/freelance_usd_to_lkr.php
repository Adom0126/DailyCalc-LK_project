<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance USD to LKR Calculator</title>

    <!-- Link Coustom CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <!-- Link Icons -->
    <link rel="icon" href="resourses/company_logo.png" />
</head>

<body class="main-body-2">

    <div class="container-fluid">
        <?php include 'header.php'; ?>
        <div class="row">
            <div class="col-12 py-3 p-3">
                <h2 class="mt-4 text-center m-auto fs-1">Freelance USD to LKR Calculator</h2>
                <p class="mt-2 fs-4 text-center m-auto">Calculate your freelance earnings in LKR.</p>
                <hr />
                <div class="row p-3 py-3">
                    <div class="col-md-4 col-12 p-4 py-4 take_home m-auto">
                        <div class="mb-3">
                            <label>USD Amount:-</label>
                            <input type="number" class="form-control" id="USD_amount" placeholder="($ 100)" />
                        </div>
                        <div class="mb-3">
                            <label>Exchange Rate:-</label>
                            <input type="number" class="form-control" id="exchange_rate" placeholder="(RS. 360)" />
                        </div>

                        <div class="mb-3">
                            <label>Bank Fee (%)</label>
                            <input type="number" class="form-control" id="bank_fee" value="3" />
                        </div>


                        <div class="row">
                            <div class="col-6 d-grid mb-3">
                                <button class="btn btn-outline-success " onclick="calculateUSDToLKR()">Calculate</button>
                            </div>
                            <div class="col-6 d-grid mb-3 text-end">
                                <a href="calc_list.php" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                        <div class="result-box mt-3 p-3">
                            Bank Fee: Rs. <span id="bank_fee_val">0.00</span><br>
                            <strong>Total Amount after Fee: Rs. </strong> <span id="total_amount_val"> 0.00</span><br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>



    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>