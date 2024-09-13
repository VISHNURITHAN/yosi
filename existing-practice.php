<?php
header("Access-Control-Allow-Origin: *");
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header("Access-Control-Allow-Origin: https://localhost");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    exit(0);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Existing Practice</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body class="p-3">
    <div class="navbar p-2" style="background-color:#13585D; ;">
        <div class="nav_img">
            <img src="./yosi_logo.png" alt="yosi logo">
        </div>
        <div class="nav_el d-flex flex-wrap ">
            <a href="dashboard.php"><button type="button" class="btn btn-success">Home</button></a>
            <button type="button" class="btn btn-success ms-2">Practice Upload</button>
            <button type="button" class="btn btn-success ms-2">Practice Staff Export</button>
            <button class="btn btn-danger ms-2">Logout</button>
        </div>

    </div>
    <div class="ui-widget d-flex mt-5">
        <label for="searchBox" style="color:#13585D;">
            <h4>search practice:</h4>
        </label>
        <input id="searchBox" name="searchBox" value="" class="ms-5 form-control ui-autocomplete-input" style="width: 30%;">
    </div>

    <div class="row mt-5" style="display:block;">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center; width: 20%;">Practice ID</th>
                        <th style="text-align: center; width: 30%;">Practice Name</th>
                        <th style="text-align: center; width: 30%;">Location Name</th>
                        <th style="text-align: center; width: 20%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color:#ff6600;text-align: center; "> 555101 </td>
                        <td style="color:#09f;text-align: center;"> Rome Office </td>
                        <td style="color:#09f;text-align: center;">
                            <div id="hide" class="col-md-12">
                                <span>Rome Office(1)</span>
                                <button id="edit" style="border: none;background-color:transparent; color: #09f;"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                            <!-- AFTER EDIT CLICK BTN -->
                             <div class="row" id="edit_input"style="display: none;">
                                <div  class="mt-2 col-md-8 d-flex">
                                    <input style="width:max-content;" type="text" class="form-control" value="Rome Office (1)">
                                    <a href="" class=" ms-2 btn btn-xs btn-success" id="update_btn"> Update </a>
                                    <a href="" class="ms-2 btn btn-xs btn-danger" id="edit_cancel"> Cancel </a>
                                </div>
                             </div>
                        </td>
                        <td class="">
                            <div class="row-md-4">
                                <button type="button" class="btn btn-warning btn-sm mb-2">Edit</button> 
                                <button type="button" class="btn btn-success btn-sm ms-1 mx-1 mb-2">User</button>
                               <a href="features.php"> <button type="button" class="btn btn-danger btn-sm mb-2">Features</button></a>
                                <button type="button" class="btn btn-success btn-sm mb-2">Settiongs Tool</button>
                                <button type="button" class="btn btn-success btn-sm ms-1 mx-1 mb-2 ">Self Scheduling</button>
                                <button type="button" class="btn btn-success btn-sm mb-2">Tele HEalth Calender</button>
                                <button type="button" class="btn btn-success btn-sm mb-2">intesa Setting</button>
                                <button type="button" class="btn btn-success btn-sm ms-1 mx-1 mb-2">survey Admin</button>
                                <button type="button" class="btn btn-warning btn-sm mb-2">Practice Meta</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>



    <script src="script.js"></script>

</body>