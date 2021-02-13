<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Evergoal</title>
  </head>
  <body style="background-image:url('img/back1.png'); background-repeat: no-repeat; background-size:cover;">
  @include('navbar')
    <div class="container">
        <main class="my-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card mt-5 border_color card_border">
                                <div class="card-header bg_red card_header text-white">
                                  @foreach($user as $users)
                                  {{$users->name}}
                                  @endforeach
           
                                    ({{session()->get('id')}})<br> Update Your Bank and Pancard Details.</div>
                                <div class="card-body">
                                    <form action="{{route('update_kyc.created')}}" method="POST">
                                     @csrf
                                        <div class="form-group row">
                                            <label for="account_type" class="col-md-4 col-form-label text-md-right">Account type:</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    
                                                    <select name="account_type" class="form-control card_border" id="account_type">
                                                      <option selected>--CHOOSE ACCOUNT TYPE--</option>
                                                      <option value="current">Current </option>
                                                      <option value="saving">Saving</option>
                                                    
                                                    </select>

                                                        @if($errors->has('account_type'))
                                                            <div class="error alert alert-danger">{{$errors->first('account_type')}} </div>
                                                         @endif
                                                  </div>
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="account_no" class="col-md-4 col-form-label text-md-right">Account No:</label>
                                            <div class="col-md-6">
                                                <input type="text" id="account_no" class="form-control card_border" name="account_no">
                                                @if($errors->has('account_no'))
                                                            <div class="error alert alert-danger">{{$errors->first('account_no')}} </div>
                                                 @endif
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="bank" class="col-md-4 col-form-label text-md-right">Bank</label>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    
                                                    <select name="bank" class="form-control card_border" id="bank">
                                                      <option >--Choose Your Bank name--</option>
                                                      <option value="SBI">SBI </option>
                                                      <option value="AXIS">AXIS</option>
                                                    
                                                    </select>
                                                  </div>
                                                  @if($errors->has('bank'))
                                                            <div class="error alert alert-danger">{{$errors->first('bank')}} </div>
                                                    @endif
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="branch_name" class="col-md-4 col-form-label text-md-right">Branch Name:</label>
                                            <div class="col-md-6">
                                                <input type="text" id="branch_name" name="branch_name" class="form-control card_border">
                                                @if($errors->has('branch_name'))
                                                            <div class="error alert alert-danger">{{$errors->first('branch_name')}} </div>
                                                 @endif
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="present_address" class="col-md-4 col-form-label text-md-right">IFSC CODE:</label>
                                            <div class="col-md-6">
                                                <input type="text" id="ifsc" name="ifsc" class="form-control card_border">
                                                @if($errors->has('ifsc'))
                                                            <div class="error alert alert-danger">{{$errors->first('ifsc')}} </div>
                                                 @endif
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Is Pan:</label>
                                            <div class="col-md-6 mt-1">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input card_border" type="radio" name="pan" id="inlineRadio1" value="Yes">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input card_border" type="radio" name="pan" id="inlineRadio2" value="No">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                  </div>

                                                  @if($errors->has('pan'))
                                                            <div class="error alert alert-danger">{{$errors->first('pan')}} </div>
                                                 @endif
                                            </div>
                                        </div>
        
                                     
        
                                            <div class="col-md-4 offset-md-4">
                                                <button type="submit" class="btn text-white card_border allbtn btn-block">
                                               Submit
                                                </button>
                                            </div>

                                            @if(Session::has('message'))
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        
                                                            <li>{{ Session::get('message') }}</li>
                                                        
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>

                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        
        </main>
       @include('footer')

        </div>
    </div>


        










    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>