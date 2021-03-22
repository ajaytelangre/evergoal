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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
     <link href="{{asset('css/style.css')}}" rel="stylesheet">
      <style> 
  
  </style> 
</head>

<body style="background-image:url('img/back1.png'); background-repeat:; background-size:cover;" >
@include('navbar')
<!-- Main Content -->

<div class="container  mb-5 heading_margin" style="">

       <h1 class="text-center index_header mt-4"><span style="color:#FFFFFF;">Welcome to <strong> Evergoal India Pvt.Ltd.</strong></span></h1>

       <!-- <div class="text-center mt-3">
        <h3 >Reference Link</h3>
        <a  href="#">https://evergreen.com</a>
      </div> -->

      <div class="row mt-5 indexsection" style="margin-bottom:20px;" >

        <div class="col-md-3 col-3 mt-3">
          <div class="text-center indeximg text-wrap">
          <img class=" img-fluid img_border" src="img/newregist.png" alt=""></br>
          
          <a type="button" class="btn  mt-3 btn-lg btn_border btn-block " href="{{url('/registration')}}">New Registeration</a>
          </div>
        </div>



        <div class="col-md-3 col-3 mt-3">
        <div class="text-center indeximg">
          <img class="img-fluid img_border" src="img/newtopupwallet.png" alt=""></br>
            <a type="button" class="btn  mt-3 btn-lg btn_border btn-block" href="{{url('/topup')}}">Get Topup</a>
        </div>
         </div>
 
        <div class="col-md-3 col-3 mt-3">
          <div class="text-center indeximg">
              <img class="img-fluid img_border" src="img/android1.png" alt=""></br>
               <a href="{{url('/portal')}}" type="button" class="btn  mt-3 btn-lg btn_border btn-block">KUBER APP</a>
          </div>
       </div>

       <div class="col-md-3 col-3 mt-3">
          <div class="text-center indeximg">
              <img class="img-fluid img_border" src="img/newpolicytext.png" alt=""></br>
               <a href="{{url('/portal')}}" type="button" class="btn  mt-3 btn-lg btn_border btn-block">Policy</a>
          </div>
       </div>


  </div>
</div>

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