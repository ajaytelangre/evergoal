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

</head>

<body style="background-image:url('img/back1.png'); background-repeat: no-repeat;background-size:cover;">

<!-- Main Content -->
<form action="{{url('/submit_enquiry')}}" method="post">
    @csrf

    <div class="container">
        <div class="row justify-content-center">
        
           <!-- card -->
            <div class="col-12 col-md-6 col-lg-6 mt-5 pb-5">
                <div class="card mt-5 pb-5 ">
                    <div class="card-body">
                        <h5 class="card-title text-center">Enquiry Form</h5>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter name">
                                @if ($errors->has('name')) 
                                    <div class="error alert alert-danger ">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter email address">
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile Number:</label>
                                <input type="mobile" class="form-control" id="mobile" name="mobile" value="{{old('mobile')}}" placeholder="Enter mobile number">
                                @if ($errors->has('mobile')) 
                                    <div class="error alert alert-danger ">{{ $errors->first('mobile') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                
                                <button type="submit" class="btn btn-success btn-block "  id="submit">Submit</button>
                              
                            </div>
                            
                            <div class="form-group">
                                
                                @if(Session::has('message'))
                                        <div class="alert alert-success">
                                            <ul>
                                                
                                                    <li>{{ Session::get('message') }}</li>
                                                
                                            </ul>
                                        </div>
                                @endif
                              
                            </div>

                     
                    </div>
                </div>
            </div>
            <!-- card close -->
        
        </div>

    </div>
</form>

<!-- Close Main Content -->


<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>