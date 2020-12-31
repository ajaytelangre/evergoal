<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  @include('navbar')
    <div class="container">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1"><b>Account Type</b></label>
              <select class="form-control">
                <option>CHOOSE ACCOUNT TYPE</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><b>Account No:</b></label>
              <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Bank</b></label>
                <select class="form-control">
                  <option>--Choose Bank Name--</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><b>Branch Name:</b></label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
            
              <div class="form-group">
                <label for="exampleInputPassword1"><b>IFSC Code:</b></label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1"><b>IS Pan:</b></label><br>
                <div class="row ">
                    <div class="col-12 ">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                            <label class="custom-control-label" for="defaultInline1">Yes</label>
                          </div>

                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                            <label class="custom-control-label" for="defaultInline1">No</label>
                          </div>
                    </div>
                   
                </div>
                
                  
              </div>
           
            <div>
              <p class="text-danger font-weight-bold">TDS will be deduct 20%</p>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>