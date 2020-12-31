
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img class="img-fluid logo" src="img/evergoal.png" alt="" style="height:70px;width:90px;"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/welcome')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Task</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
         </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('/subregist')}}">New Registration</a>
          <a class="dropdown-item" href="{{url('/showprofile')}}">Profile</a>
          <a class="dropdown-item" href="#">Change Password</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Document
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Welcome Letter</a>
          <a class="dropdown-item" href="#">Invoice</a>
          <a class="dropdown-item" href="#">Franchise List</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Upload KYC
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('/updloadkyc')}}">KYC Detail</a>
          </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Epin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Pin Detail</a>
          <a class="dropdown-item" href="#">Pin Transfer</a>
          <a class="dropdown-item" href="#">Pin Generate</a>
          <a class="dropdown-item" href="#">Send Pin Detail</a>
          <a class="dropdown-item" href="#">Send Pin Summary</a>
          <a class="dropdown-item" href="#">Received Pin Detail</a>
          <a class="dropdown-item" href="#">Received Pin Summary</a>
          <a class="dropdown-item" href="#">Used Pin Report</a>
          <a class="dropdown-item" href="#">Unused Pin Report</a>
          <a class="dropdown-item" href="#">E-Voucher Status</a>
          </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    My Team
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
        <a class="dropdown-item" href="#">My Directs</a>
        <a class="dropdown-item" href="#">Level Direct Report</a>
        <a class="dropdown-item" href="#">Member Count Report</a>
          </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Wallet
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
        <a class="dropdown-item" href="#">Main Wallet Report</a>
        <a class="dropdown-item" href="#">Pin Wallet Report</a>
        <a class="dropdown-item" href="#">Utility Wallet Report</a>
        <a class="dropdown-item" href="#">Main to Pin Wallet</a>
        <a class="dropdown-item" href="#">Main to Utility Wallet</a>

          </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Benefits
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
        <a class="dropdown-item" href="#">Payout Detail</a>
        <a class="dropdown-item" href="#">Bank Withdrawl</a>
        <a class="dropdown-item" href="#">Bank Withdrawl Detail</a>
        <a class="dropdown-item" href="#">Level Wise Income</a>
          </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Support
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
        <a class="dropdown-item" href="#">Support</a>
        <a class="dropdown-item" href="#">Admin's Reply</a>
       </div>
      </li>

      
     
    </ul>
  </div>
  <!-- <div class="mt-5">
  <a href="{{url('/logout')}}"><button class="btn btn-primary">logout</button></a>
  </div> -->
</nav>








