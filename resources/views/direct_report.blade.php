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
  <body style="background-image:url('img/back1.png'); background-repeat: no-repeat; background-size:cover;"> 
      @include('navbar')
   <div class="container mb-3">
       <div class="row row justify-content-center ">
            <div class="col-lg-8 col-12 mb-6 text-center">
					<h3 class="text-white"> YOUR TEAM LIST</h3>
                <div class="card text-center border_color card_border">
                    <div class="card-header bg_red card_header">
						  
                      <h5 class="card-title mt-1 pb-4 text-white">{{session()->get('user_name')}} <BR>id : {{session()->get('id')}}</h5>
					 
                    </div>
					  <div class="card_image2">
								<img src="{{ asset('/storage/' . session()->get('avtar')) }}" class="rounded-circle team_profile_logo" alt="Cinque Terre" >
							</div>
                    <div class="card-body">
                     
                      <!----- Table content----->
                      <div class="table-responsive"> 
                        <table class="table text-info table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Sponser Id</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Level</th>
                                    </tr>
                                </thead>
                                @foreach($data1 as $data)
                                <tbody>
                                    <tr>
                                    <th scope="row">{{__($data->id)}}</th>
                                    <td>{{__($data->name)}}</td>
                                    <td>{{__($data->mobile)}}</td>
                                    <td>{{__($data->sponserid)}}</td>
                                    <td>{{__($data->status)}}</td>
                                    <td>
                                    @if(in_array($data->id,$count_level21))
                                        {{__("level 1")}}
                                        @elseif(in_array($data->id,$count_level31))
                                        {{__("level 2")}}
                                        @elseif(in_array($data->id,$count_level41))
                                        {{__("level 3")}}
                                        @elseif(in_array($data->id,$count_level51))
                                        {{__("level 4")}}
                                        @elseif(in_array($data->id,$count_level61))
                                        {{__("level 5")}}
                                        @elseif(in_array($data->id,$count_level71))
                                        {{__("level 6")}}
                                        @elseif(in_array($data->id,$count_level71))
                                        {{__("level 7")}}
                                    @endif

                                    </td>
                                    </tr>
                                </tbody>
                                @endforeach
                         </table>

                      </div>
                      <!----- Table content close----->

                    </div>
                    <div class="card-footer text-white card_footer bg_red">
                      Do more get more.
                    </div>



                </div>
            </div>
       </div>
     
   </div>
    

@include('footer')

    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>