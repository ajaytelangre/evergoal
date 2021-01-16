<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>EVERGOAL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
      

</head>

<body style="background-image:url('img/back3.jpg'); background-repeat: no-repeat; background-size:cover;" >
    @include('navbar')
<!-- Main Content -->
    <div class="container mb-5">
        <div class="row ">
            <div class="col offset-lg-4 offset-md-3 offset-md-1 mt-md-5 mt-lg-5 ">
            <!-- card  -->
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top" src="img/topupwalletpng.png" alt="Card image cap">
                    <div class="card-body">
                       <h3>Evergoal Wallet</h3>
                       <h5>Available Balance:</h5>
                       
                       <h5> ₹ {{$amount->total_amount}}</h5>
                    </div>
                </div>
            <!-- card close -->
            </div>
        </div>
    </div>


<!-- Close Main Content -->

@include('footer')


    

<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>