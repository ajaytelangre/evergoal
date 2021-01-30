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
<div class="container"> <!-- container -->
        <div class="row justify-content-center">  <!-- row -->
            <div class="col-lg-6 col-md-8 mt-5"> <!-- col-8 -->
                 <div class="card"> <!-- card -->
                    <div class="card-body"> <!-- card body-->
                        <h5 class="card-title text-center">Withdraw Details</h5>
                        <div class="table-responsive"> <!-- table-responsive-->
                            <table class="table table-hover table-bordered text-center">
                            <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Date</th>
                                        
                                    </tr>
                                </thead>
                               
                                <tbody>
                                @foreach($details as $d)
                                    <tr>
                                        <th scope="row">{{$d->id}}</th>
                                        <td>₹ {{$d->Request_amount}}</td>
                                        <td>{{$d->updated_at}}</td>
                                    </tr>
                                 @endforeach
                                </tbody>
                            </table>
                        </div><!-- table-responsive-->
                    </div><!-- card body-->
                </div> <!-- card -->
            </div> <!-- col-8 -->
        </div><!-- row -->
</div><!-- container -->


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