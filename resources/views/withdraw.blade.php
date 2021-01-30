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
     
      
    <style>
        .btn-circle{
            border-radius: 60px;
        }
    </style>
</head>

<body style="background-image:url('img/back1.png');  background-size:cover;" >
@include('navbar')
<!-- Main Content -->
<div class="mb-5">
    <form action="{{url('/withdraw_amount')}}" method="post">
    @csrf
    <div class="container"> <!--  Container -->
        <div class="row justify-content-center "> <!--  Container -->
            <div class="col-lg-6"> <!--  col -->
                <div class="card mt-5" style=""><!--  card -->
                    <div class="card-body"> <!--  card body -->
                        <h5 class="card-title text-center">Withdraw Funds</h5>
                        @if (Session::has('success')) 
                               <div class="text-success mb-2">* <h4>{{Session::get('success')}}</h4> </div>
                        @endif
                        <h6 class="card-subtitle mb-2 text-muted">How much would you like to withdraw?</h6>
                        <div class="input-group mb-3"> <!--  input-group -->
                            <div class="input-group-prepend">
                                <span class="input-group-text">₹</span>
                            </div>
                            <input type="number" name="amount" class="form-control" aria-label="Amount (to the nearest dollar)">
                           
                        </div>    <!--  input-group -->
                        @if ($errors->has('amount')) 
                               <div class="text-danger mb-2">* {{$errors->first('amount')}} </div>
                        @endif
                        @if (Session::has('user_count')) 
                               <div class="text-danger mb-2">* {{Session::get('user_count')}} </div>
                        @endif
                        @if (Session::has('total_amount')) 
                               <div class="text-danger mb-2">* {{Session::get('total_amount')}} </div>
                        @endif
                        @if (Session::has('amount_error')) 
                               <div class="text-danger mb-2">* {{Session::get('amount_error')}} </div>
                        @endif
                        <ul class="list-group list-group-flush"> <!--  list group -->
                            <li class="list-group-item"> 
                                <div class="row">  <!--  row -->
                                    <div class="col-9">
                                        Available to withdraw
                                    </div>
                                    <div class="col-3">
                                        @if($amount->total_amount>=500 and $direct_user>=2)
                                         ₹ {{$amount->total_amount}}
                                        @else
                                         ₹ 0
                                        @endif
                                    </div>
                                    <div class="col-12 text-muted">
                                     This is the total amount that you have to withdraw
                                    </div>
                                </div><!--  row -->
                            </li>

                            <li class="list-group-item"> 
                                <div class="row">  <!--  row -->
                                    <div class="col-9">
                                       Total Amount
                                    </div>
                                    <div class="col-3">
                                         ₹ {{$amount->total_amount}}
                                    </div>
                                    <div class="col-12 text-muted">
                                     This is the total amount in your wallet
                                    </div>
                                </div><!--  row -->
                            </li>
                        </ul>  <!--  list group -->
                    </div>  <!--  card body -->
                        <div class="row justify-content-center mb-4">
                            <div class="col-8 ">
                                <button type="submit" class="btn btn-primary btn-lg mb-2 btn-block btn-circle ">Withdraw Request</button>
                            </div>
                        </div>
                </div> <!--  card -->
            </div><!--  col -->
        </div><!--  row -->
    </div> <!--  Container -->

    </form>
<!-- Close Main Content -->

@include('footer')
</div>



<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>