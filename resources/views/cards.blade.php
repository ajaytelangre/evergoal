<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Evergoal</title>
  </head>
  <body style="background-image:url('img/back3.jpg'); background-repeat: no-repeat; background-size:cover;">
    @include('navbar')

  
    <div class="container" style="">
        <!-- Bootstrap card 1-->
        <div class="offset-md-4">
            @foreach($user as $user1)
                <div class="card " style="width: 22.5rem;">
                    <!-- <img class="card-img-top" src="http://propeller.in/assets/images/profile-pic.png" alt="Card image cap"> -->
                    <diV class="card-header bg-danger text-light" style="height:100px ">
                        {{$user1->name}}
                        <p class="card-subtitle">{{$user1->id}}</p>
                    </diV>
                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Card Title -->
                        <!-- <h2 class="card-title">Card title</h2> -->
                        <div class="card_image">
                            <img src="{{ asset('/storage/user/' . session()->get('avtar')) }}" class="rounded-circle" alt="Cinque Terre" width="80" height="80">
                        </div>
                        
                        <!-- Card Text -->
                        <p class="card-text text-center">REFERAL LINK <br>
                            <a href="#" class="card-text text-center">https://getbootstrap.com/docs/4.0/utilities/colors/</a>
                        </p>
                        
                        <!-- Card Action -->
                        
                    </div>
                </div>
             @endforeach
        <!-- Bootstrap card 1 close-->

         <!-- Bootstrap card 2-->
         <div class="card mt-1" style="width: 22.5rem;">
            <!-- <img class="card-img-top" src="http://propeller.in/assets/images/profile-pic.png" alt="Card image cap"> -->
            <diV class="card-header bg-warning text-light" style="height:100px">
               <P class="card-text" style="font-size: 25px;">Your Direct Team</P> 
                
            </diV>
            <!-- Card Body -->
            <div class="card-body">
                <!-- Card Title -->
                <!-- <h2 class="card-title">Card title</h2> -->
                
                <!-- Card Text -->
                <p class="card-text text-center">
                
                {{$counts}}
              
                 <br>
                    DIRECTS
                    <br>
                    ACTIVE
                    <br>
                    {{$active}}
                    <br>
                    INACTIVE
                    <br>
                    {{$deactive}}
                </p>
                
                <!-- Card Action -->
                
            </div>
        </div>
<!-- Bootstrap card 2 close-->

             <!-- Bootstrap card 3-->
         <div class="card mt-1" style="width: 22.5rem;">
            <!-- <img class="card-img-top" src="http://propeller.in/assets/images/profile-pic.png" alt="Card image cap"> -->
            <diV class="card-header bg-primary text-light" style="height:100px">
               <P class="card-text" style="font-size: 25px;">Your Benifits</P> 
                
            </diV>
            <!-- Card Body -->
            <div class="card-body">
                <!-- Card Title -->
                <!-- <h2 class="card-title">Card title</h2> -->
                
                <!-- Card Text -->
                <p class="card-text text-center">140 <br>
                    DAILY BENIFIT
                    <br>
                    0
                    <br>
                    LEVEL BENIFIT
                    <br>
                   140
                   <br>
                   TOTAL BENIFIT
                </p>
                
                <!-- Card Action -->
                
            </div>
        </div>
<!-- Bootstrap card 3 close-->

              <!-- Bootstrap card 2-->
         <div class="card mt-1" style="width: 22.5rem;">
            <!-- <img class="card-img-top" src="http://propeller.in/assets/images/profile-pic.png" alt="Card image cap"> -->
            <diV class="card-header bg-warning text-light" style="height:100px">
               <P class="card-text text-center" style="font-size: 30px;">Member Statistics</P> 
                
            </diV>
            <!-- Card Body -->
            <div class="card-body">
                <!-- Card Title -->
                <!-- <h2 class="card-title">Card title</h2> -->
                
                <!-- Card Text -->
                <div class="row">
                    <div class="col-10 border">
                        <p>Total Id</p>
                    </div>
                    <div class="col-2 border">
                        <p>{{$total_count}}</p>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-10 border">
                        <p>Total Direct Id</p>
                    </div>
                    <div class="col-2 border">
                        <p>{{$counts}}</p>
                    </div>
                </div>
                <!-- Card Action -->
                
            </div>
        </div>
<!-- Bootstrap card 2 close-->
    </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>