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

<body  onload="createCaptcha()" style="background-image:url('img/back1.png'); background-repeat: no-repeat; background-size:cover;" >
@include('navbar')
<!-- Main Content -->


<div class="container" style="margin-bottom:20px;">
    <div class="row">
        <div class="offset-2"></div>
        <div class="col-md-8">
        <div class="card mt-5 mb-5 registform">
                <div class="card-body">
                 <h2 class="text-center">Register Here...</h2><hr>
                 <!-- onsubmit="validateCaptcha()" -->
                <form method="POST" action="{{route('profile.created')}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label>Sponser Id:</label>
                <label>{{session()->get('id')}}</label>
                <!-- <input type="text" class="form-control"  aria-describedby="emailHelp" name="sponserid" placeholder="Enter Sponser Id" required> -->
             </div>
             <p class="text-justify"><strong>Personal Detail</strong></p>
            <div class="form-group">
                
                <label>Name(As Per Bank Details)*</label>
                <input type="text" class="form-control" placeholder="Enter Name" value="{{old('name')}}" name="name" required>
                @if($errors->has('name'))
                    <div class="error alert alert-danger">{{$errors->first('name')}} </div>
                @endif
            </div>

            <div class="form-group pt-3">
                <label>Mobile No.(Cannot be changed later)*</label>
                <input type="text" class="form-control" placeholder="Enter Number" name="mobile" value="{{old('mobile')}}" required> 
                @if($errors->has('mobile'))
                    <div class="error alert alert-danger">{{$errors->first('mobile')}} </div>
                @endif
            </div>

            <div class="form-group pt-3">
               <label>Email Id</label>
                <input type="email" class="form-control" placeholder="Enter email id" name="email" value="{{old('email')}}"> 
                @if($errors->has('email'))
                    <div class="error alert alert-danger">{{$errors->first('email')}} </div>
                @endif
            </div> 

            <div class="form-group pt-3">
               <label>Password</label>
                <input type="password" class="form-control" placeholder="" name="password" value="{{old('password')}}"> 
                @if ($errors->has('password')) 
                     <div class="error alert alert-danger">{{ $errors->first('password') }} </div>
                @endif
            </div> 

            <div class="form-group pt-3">
               <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="" name="password1" value="{{old('password1')}}" > 
                @if ($errors->has('password1')) 
                     <div class="error alert alert-danger ">{{ $errors->first('password1') }}</div>
                @endif
            </div> 
             
            <p class="text-justify pt-3"><strong>Note:</strong> Please enter mobile number and name carefully. Name and Mobile
             number can not be changed later. For name & mobile number digits correction 
            charges may apply which will be recovered through member's wallet. you do not have to pay in company</p>
           
            <div class="form-group">
            <label for="pimg">Upload image</label></br>
             <input type="file" id="pimg" name="pimg">
            </div>



            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">I Agree With <a href="#">Terms & Conditions</a> & <a href="#">Privacy Policy</a></label>
            </div>
             
    <div id="captcha">
<button class="btn mt-2 mb-2" id="captcha"></button>
    </div>
    <input type="text" class="form-control" name="captcha" placeholder="Captcha" id="cpatchaTextBox"/>
         <div class="row mt-5">
             <div class="offset-3"></div>
             <div class="col-md-3"><button type="submit" onsubmit="validateCaptcha()" class="btn allbtn btn-block">Submit</button></div>
             <div class="col-md-3"><button type="submit" class="btn allbtn btn-block">Cancel</button></div>
         </div> 

                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif

                @if(Session::has('message'))
                        <div class="alert alert-danger">
                            <ul>
                                
                                    <li>{{ Session::get('message') }}</li>
                                
                            </ul>
                        </div>
                @endif


        </form>
        
                </div>
                </div>

        </div>

    </div>
</div>

<!-- Close Main Content -->


<div class="footer ">
<div class="container">
    <div class="row">

        <div class="col-md-4 p-3">copyright &copy 2020|All rights reserved</div>

        <div class="col-md-4 p-3">Terms & Conditions|About Us 
        <a href="{{url('/welcome')}}"><button class="btn btn-secondary">next</button>
        </a></div>

        <div class="col-md-4 p-3">Follow us:   <img  class="ml-1" src="img/fb.png" alt="">    <img class="ml-1" src="img/whatsapp.png" alt="">
       
      </div>

    </div>
</div>  
</div>

<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src="js/custom.js"></script>
    
</body>

</html>