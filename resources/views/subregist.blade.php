<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>EVERGOAL PROJECT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
     <!-- <link href="css/footer.css" rel="stylesheet"> -->

</head>

<body style="background-image:url('img/back.jpg'); background-repeat: no-repeat; background-size:cover;" >
@include('navbar')
<!-- Main Content -->
<div class="container" style="margin-bottom:20px;">
    <div class="row">
        <div class="offset-2"></div>
        <div class="col-md-8">
        <div class="card mt-5 mb-5 registform">
                <div class="card-body">
                 <h2 class="text-center">Register Here...</h2><hr>
                <form  method="POST" action="{{route('subprofile.created')}}">
                @csrf
            <div class="form-group">
                
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
            </div>

            <div class="form-group pt-3">
                <label>Phone No</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter Number" required> 
            </div>
    
            <div class="form-group">
                
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
            </div>


            <div class="form-group">
                
                <label>Aadhar No</label>
                <input type="text" class="form-control" name="aadhar" placeholder="Enter Aadhar No." required>
            </div>

            <div class="form-group">
                
                <label>Bank Name</label>
                <input type="text" class="form-control"  name="bankname" placeholder="Enter Bank Name" required>
            </div>

            <div class="form-group">
                
                <label>Passbook No</label>
                <input type="text" class="form-control" name="passbookno" placeholder="Enter Passbook No." required>
            </div>

            <div class="form-group">
            <label for="img">Upload image</label></br>
             <input type="file" id="img" name="imgurl" accept="image/*">
            </div>

       <div class="row mt-5">
             <div class="offset-3"></div>
             <div class="col-md-3">  <a href="#"><button type="submit" class="btn allbtn btn-block">Submit</button></a></div>
             <div class="col-md-3"><button type="submit" class="btn allbtn btn-block">Cancel</button></div>
         </div>
            

        

         
        </form>
                </div>
                </div>

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