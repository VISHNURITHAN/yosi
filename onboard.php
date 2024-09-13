<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>On Borard</title>
    <link rel="stylesheet" href="style.css">
    <!-- googel fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- bootstapr css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap date picker css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.10.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- font awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- clooudwelfare -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bootstarp j.s deliver -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

     <!-- jQuery -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <!-- Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <!-- Bootstrap Datepicker JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="p-4">
    <div class="navbar p-2" style="background-color:#13585D; ;">
        <div class="nav_img">
            <img src="./yosi_logo.png" alt="yosi logo">
        </div>
        <div class="nav_el">
            <a href="dashboard.php"><button type="button" class="btn btn-success">Home</button></a>
            <button type="button" class="btn btn-success">Practice Upload</button>
            <button type="button" class="btn btn-success">Practice Staff Export</button>
            <button class="btn btn-danger">Logout</button>
        </div>
    </div>

    <div class="d-flex justify-content-center align-content-center mt-3">
        <form style="width: 740px; border: solid black 2px;" class="p-4">
            <div class="form-group row">
                <label class="col-md-6 mb-3">Select One<span style="color: red;">*</span></label>
                <div class="form-input col-6 ">
                    <input type="radio" name="check" value="check"> New Customer
                    <input type="radio" name="check" value="check" class="ms-5 ms-2"> Existing Customer
                </div>
            </div>
            <div class="form-group row">
                <label class="col-6 mb-4">Customer Email<span style="color: red;">*</span></label>
                <div class="form-input col-6">
                    <input class="form-control" type="email" name="" id="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-6 mb-4">Customer Friendly Name<span style="color: red;">*</span></label>
                <div class="form-input col-6">
                    <input class="form-control" type="text" name="" id="" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-6 mb-4">Super Admin First Name<span style="color: red;">*</span></label>
                <div class="form-input col-6">
                    <input class="form-control" type="text" name="" id="" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-6 mb-4">Super Admin Last Name<span style="color: red;">*</span></label>
                <div class="form-input col-6">
                    <input class="form-control" type="text" name="" id="" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-6 mb-4">Customer Mobile Number</label>
                <div class="form-input col-6">
                    <input class="form-control" type="number" name="" id="" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-6 mb-4">Customer Password<span style="color: red;">*</span></label>
                <div class="form-input col-6">
                    <input class="form-control" type="password" name="" id="" onclick=checkPassword(str)>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-6 mb-4">Location Name</label>
                <div class="form-input col-6">
                    <input class="form-control" type="text" name="" id="" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-6 mb-4">Emr Type</label>
                <div class="form-input col-6">
                    <select name="" id="" class="form-control">
                        <option value="">-Emr type-</option>
                        <option value="">Athena</option>
                        <option value="">MD-Office</option>
                        <option value="">All Script</option>
                        <option value="">Green Way</option>
                    </select>
                </div>
            </div>
            <!-- <div class="form-group row">
                <label class="col-6 mb-4">Expected completion date<span style="color: red;">*</span></label>
                <div class="form-input col-6">
                    <input type="date" name="" id=""class="form-control">
                </div>
            </div> -->

            
            <div class="form-group row">
                <label class="col-6 mb-4">Expected Completion Date<span style="color: red;">*</span></label>
                <div class="form-input col-6">
                    <div class="input-group date" id="datepicker">
                        <input class="form-control" type="text" required>
                        <span class="input-group-append">
                            <span class="input-group-text bg-white d-block">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>


            
            <div class="form-group row">
                <label class="col-6 mb-4">Add on Self Scheduling<span style="color: red;">*</span></label>
                <div class="form-input col-6 justify-content-center">
                    <input type="radio" name="check" value="check"> Yes
                    <input type="radio" name="check" value="check" class="ms-5 "> No
                </div>
            </div>
            <div class="form-group row">
                <label class="col-6 mb-4">Add on Survey<span style="color: red;">*</span></label>
                <div class="form-input col-6">
                    <input type="radio" name="check" value="check"> Yes
                    <input type="radio" name="check" value="check" class="ms-5"> No
                </div>
            </div>
            <div class="form-group row">
                <label class="col-6 mb-4">On demand Form<span style="color: red;">*</span></label>
                <div class="form-input col-6">
                    <input type="radio" name="check" value="check"> Yes
                    <input type="radio" name="check" value="check" class="ms-5"> No
                </div>
            </div>
            <div class="d-flex align-content-center justify-content-center ">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-danger ms-2" >Cancel</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#datepicker').datepicker({   
                format: 'dd/mm/yyyy', // Customize the date format
                autoclose: true,      // Automatically close the datepicker when a date is selected
                todayHighlight: true, // Highlight the current date
                keyboardNavigation: true, // Allow keyboard navigation
                forceParse: false,    // Allow direct input without validation
                todayBtn: true,       // Add a button to select today's date
            }).on('changeDate', function(e) {
                $(this).datepicker('hide'); // Hide the datepicker when a date is selected
            });
            
        });
    </script>
</body>