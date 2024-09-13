<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <!-- googel fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-3">
    <div class="navbar p-2" style="background-color:#13585D; ;">
        <div class="nav_img">
            <img src="./yosi_logo.png" alt="yosi logo">
        </div>
        <div class="nav_el d-flex flex-wrap ">
           <a href=""> <button type="button" class="btn btn-success" id="home">Home</button></a>
            <button type="button" class="btn btn-success ms-2">Practice Upload</button>
            <button type="button" class="btn btn-success ms-2">Practice Staff Export</button>
            <button class="btn btn-danger ms-2">Logout</button>
        </div>
    </div>

    <div class="col-md-12">
        <div style="padding-left:33%;padding-top:4%">
            <a style="text-decoration:none;" href="onboard.php">
                <div class="col-md-6 mb-3 " style="padding: 3%; background: #13585D">
                    <center>
                        <h5 style="color: white;">ON BOARD NEW PRACTICE</h5>
                    </center>
                </div>
            </a>
        </div>  
        <div style="padding-left:33%;padding-top:3%">
           <a style="text-decoration:none;" href="./existing-practice.php">
            <div class="col-md-6" style="padding: 3%; background: #13585D">
                <center>
                    <h5 style="color: white;">EXISTING PRACTICE</h5>
                </center>
            </div>
           </a>
        </div>
</body>