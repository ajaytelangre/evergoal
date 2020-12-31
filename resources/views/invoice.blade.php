<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Evergoal </title>
  </head>
  <body>
  @include('navbar')
    <div class="container" style="margin-top: 100px;">
        <div class="row border">
            <div class="col bg-info text-center">
                <div class="font-weight-bold">
                    Text Invoice
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col border">
                <p>Invoice No:</p>
            </div>
            <div class="col border">
                
            </div>
        </div>
        <div class="row border" >
            <div class="col bg-info text-center">
                <div>
                    <p>Bill to Party</p>
                </div>
            </div>
        </div>
        <div class="row border">
            <div class="col border">
                <p>Name:</p>
            </div>
            <div class="col border">
                <p>USER ID:</p>
            </div>
        </div>

        <div class="row border" >
            <div class="col border">
                <div>
                    <p>Address:</p>
                </div>
            </div>
        </div>
        <div class="row border">
            <div class="col-4 border">
                <p>State:</p>
            </div>
            <div class="col-1 border">
                
            </div>
            <div class="col-1 border">
                
            </div>
            <div class="col-5 border">
                <p>PINCODE:</p>
            </div>
            <div class="col-1 border">
                
            </div>
        </div> 
        <div class="row border" >
            <div class="col-12 border">
                <div style="height:28px">
                    
                </div>
            </div>
        </div>
        <div class="row border bg-info">
            <div class="col-1">
                <p>S.NO</p>
            </div>
            <div class="col-1">
                <p>UDM</p>
            </div>
            <div class="col-1">
                <p>Qty</p>
            </div>
            <div class="col-1">
                <p>Rate</p>
            </div>
            <div class="col-1">
                <p>Amount</p>
            </div>
            <div class="col-1">
                <p>Discount</p>
            </div>
            <div class="col-1">
                <p>Taxable Value</p>
            </div>
            <div class="col-1">
                <p>CGST Rate</p>
            </div>
            <div class="col-1">
                <p>Amount</p>
            </div>
            <div class="col-1">
                <p>SGST Rate</p>
            </div>
            <div class="col-1">
                <p>Amount</p>
            </div>
            <div class="col-1">
                <p>Total</p>
            </div>
        </div>

        <div class="row border ">
            <div class="col-1">
                <p>1</p>
            </div>
            <div class="col-1 border">
                <p>PREMIUM</p>
            </div>
            <div class="col-1 border">
                <p>3</p>
            </div>
            <div class="col-1 border">
                <p>400</p>
            </div>
            <div class="col-1 border">
                <p>1200.00</p>
            </div>
            <div class="col-1 border">
                <p>20</p>
            </div>
            <div class="col-1 border">
                <p>1200.00</p>
            </div>
            <div class="col-1 border">
                <p>0</p>
            </div>
            <div class="col-1 border">
                <p>0</p>
            </div>
            <div class="col-1 border">
                <p>0</p>
            </div>
            <div class="col-1 border">
                <p>0</p>
            </div>
            <div class="col-1 border">
                <p>1200</p>
            </div>
        </div>

        <div class="row border">
            <div class="col-6" >
                <div class="row bg-info"><P>Total Invoice amount in words:One Thousand Two Hundred  </P></div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-10 border">
                        <p>Total Amount before Tax</p>
                    </div>
                    <div class="col-2 border">
                        <p>1200.00</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-10 border">
                        <p>Add:CGST</p>
                    </div>
                    <div class="col-2 border">
                        <p>0</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-10 border">
                        <p>Add:SGST</p>
                    </div>
                    <div class="col-2 border">
                        <p>0</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-10 border">
                        <p>Total Tax Amount</p>
                    </div>
                    <div class="col-2 border">
                        <p>0</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-10 border">
                        <p>Total Amount after Tax:</p>
                    </div>
                    <div class="col-2 border">
                        <p>1200.00</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row border" >
            <div class="col-12 ">
               <P>Certified that the particular given above are true and correct</P>
            </div>
        </div>

        <div class="row " >
            <div class="col-6 border">
               <P>This is computer generated invoice hence no stamp required</P>
            </div>
            <div class="col-6 border">
                <P>For Osmose Technology Private Limited</P>
             </div>
        </div>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>