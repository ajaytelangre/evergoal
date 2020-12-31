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

<div class="container  mb-5" style="margin-top: 1rem">

       <h2 class="text-center"><span style="color:#FFFFFF;">WELCOME TO EVERGOAL INDIA PVT.LTD.</span></h2>

       <!-- <div class="text-center mt-3">
        <h3 >Reference Link</h3>
        <a  href="#">https://evergreen.com</a>
      </div> -->

      <div class="row mt-5 indexsection" style="margin-bottom:20px;" >

        <div class="col-md-3 mt-3">
        <div class="text-center indeximg">
         <img class=" img-fluid " src="img/newregist.png" alt=""></br>
        
        <button type="button" class="btn mt-3 btn-secondary">   <a href="{{url('/registration')}}">New Registeration</a></button>
         </div>
        </div>



        <div class="col-md-3 mt-3">
        <div class="text-center indeximg">
          <img class="img-fluid" src="img/newtopupwallet.png" alt=""></br>
            <button type="button" class="btn mt-3 btn-secondary"><a href="{{url('/topup')}}">Get Topup</a></button>
        </div>
         </div>
 
        <div class="col-md-3 mt-3">
          <div class="text-center indeximg">
              <img class="img-fluid" src="img/android1.png" alt=""></br>
               <a href="{{url('/portal')}}"> <button type="button" class="btn mt-3 btn-secondary">KUBER APP</button></a>
          </div>
       </div>

       <div class="col-md-3 mt-3">
          <div class="text-center indeximg">
              <img class="img-fluid" src="img/newpolicytext.png" alt=""></br>
               <a href="{{url('/portal')}}"> <button type="button" class="btn mt-3 btn-secondary">Policy</button></a>
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