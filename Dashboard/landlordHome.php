<?php
session_start();
$lid=$_SESSION['lid'];
$_SESSION['lid']=$lid;
$_SESSION['logout']=22;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Land Lord</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/master.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/landlord.js"></script>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <a class="navbar-brand" href="#"><i class="fas fa-tractor"></i> Kishan Bandhu</a>
        <div class="my-2 my-lg-0" id="myProfileBtn">
            <button type="button" class="btn btn-outline-light btn-sm">
                <span class="fa fa-user"></span></button>
        </div>
        <div class="my-2 my-lg-0" id="myNotificationBtn">
            <button type="button" class="btn btn-outline-light btn-sm">
                <span class="fa fa-bell"></span></button>
        </div>
        <div class="my-2 my-lg-0" id="mySignoutBtn">
            <a  href="../SignoutHandler/lsignout.php"><button type="button" class="btn btn-danger btn-lg">
                <span class="fa fa-power-off"></span> Sign Out
            </button></a>
        </div>
    </nav>

    <!-- Body starts -->
    <div class="row">
    <img src="http://agricoop.gov.in/sites/all/themes/agricoop/images/inner-banner.jpg" alt="banner">
  </div>
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="text-center"><button type="button" class="btn btn-info btn-lg" id="show" ">
                        <span class="fas fa-plus"></span>Add</button>
                        <button id="hide">Hide</button>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header text-center">Booking Requests</div>
                    <div class="card-body text-center" id="farmerContent">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header text-center">Farmers</div>
                    <div class="card-body text-center">Content</div>
                </div>
            </div>
        </div>
    </div>

    <div class="continer-fluid">
    <br>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body text-center" id="">
                        <h2>Current Farmer Statistics</h2>
                        <p>Farmer's report on your land</p>            
                        <table class="table table-dark table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Land Area</th>
                                <th>Time</th>
                                <th>Cost</th>
                                <th>Method of payment</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                                <td>john@example.com</td>
                                <td>john@example.com</td>
                            </tr>
                            <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                                <td>john@example.com</td>
                                <td>john@example.com</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                                <td>july@example.com</td>
                                <td>july@example.com</td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Body ended -->
</body>

</html>