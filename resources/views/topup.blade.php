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

<body style="background-image:url('img/back1.png'); background-repeat: no-repeat; background-size:cover;" >
@include('navbar')
<!-- Main Content -->

<div class="container mt-3">
    <form action="{{url('/payment_initiate_request')}}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card border_color card_border">
					<div class="card-header bg_red card_header">
						<h5 class="card-title text-center text-white">Make Payment</h5>
					</div>
                    <div class="card-body ">
                       
                        @if(session('message'))
                        <div class="alert alert-success text-center">
                                {{ session('message') }}
                        </div>
                        @endif
                            <!-- form section -->
                            @foreach($user as $users)
                            <div class="form-group">
                                 <div class="row">
                                        <label class="ml-1"> Name:</label>
                                 </div>
                                 <div class="row">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Username" aria-label="name" value="{{$users->name}}" >
                                 </div>
                                 <div class="row">
                                        <label class="ml-1"> Email</label>
                                 </div>
                                 <div class="row">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" aria-label="email" value="{{$users->email}}" >
                                 </div>
                                 <div class="row">
                                        <label class="ml-1"> Contact Number:</label>
                                 </div>
                                 <div class="row">
                                        <input type="mobile" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number" aria-label="mobile" value="{{$users->mobile}}" >
                                 </div>
                            @endforeach  
                                 <div class="row pt-4 justify-content-center">
									<div class="col-md-4 col-lg-4">
                                        <button type="submit" id="submit" class=" btn  allbtn text-white card_border button_red btn-block ">Submit</button>
									</div>
                                 </div>
                            </div> 

                            <!-- form section end -->
                    </div>
                </div>
            </div>
        </div>
    </form>
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