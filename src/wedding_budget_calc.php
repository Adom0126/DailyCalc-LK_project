<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding budget Calculator</title>

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
                <h2 class="mt-4 text-center m-auto fs-1">Wedding budget Calculator</h2>
                <p class="mt-2 fs-4 text-center m-auto">Calculate your Wedding budget with DailyCalc LK.</p>
                <hr />
                <div class="row p-3 py-3">
                    <div class="col-12 col-sm-4 p-4 py-4 wedding_budget m-auto">
                        <div class="mb-3">
                            <label>Number of Guests</label>
                            <input type="number" class="form-control" id="number_guests" placeholder="Total people attending the wedding (100)" />
                        </div>
                        <div class="mb-3">
                            <label>Catering Cost per Head (Rs.)</label>
                            <input type="number" class="form-control" id="costOfPlate" placeholder="Food cost for one guest (5 000)" />
                        </div>

                        <div class="mb-3">
                            <label>Hall Cost (Rs.)</label>
                            <input type="number" class="form-control" id="hall_cost_input" placeholder="Wedding hall rental (100 000)" />
                        </div>

                        <div class="mb-3">
                            <label>Decoration Cost (Rs.)</label>
                            <input type="number" class="form-control" id="dec_cost" placeholder="Flowers, stage, lighting, etc. (25 000)" />
                        </div>

                        <div class="mb-3">
                            <label>Clothing Cost (Rs.)</label>
                            <input type="number" class="form-control" id="clo_cost" placeholder="Bride & groom outfits (saree, suit, jewellery, etc.) (25 000)" />
                        </div>

                        <div class="row">
                            <div class="col-6 d-grid mb-3">
                                <button class="btn btn-outline-success " onclick="calculate_wedding()">Calculate</button>
                            </div>
                            <div class="col-6 d-grid mb-3 text-end">
                                <a href="calc_list.php" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                        <div class="result-box mt-3 p-3">
                            Wedding Hall Cost: Rs. <span id="hall_cost">0.00</span><br>
                            Guests budget: Rs. <span id="guests_cost">0.00</span><br>
                            <strong>Estimated Wedding Budget:</strong> Rs. <span id="total_wedding_cost">0.00</span><br>
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