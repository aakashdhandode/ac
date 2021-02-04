<!-- login pop up -->
<section>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">Login</button>
<div class="modal fade bd-example-modal-sm" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header pb-0"  style="border:none">
        <h5 class="modal-title mt-3 log-title border-none" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="Phone Number">
          </div>
          <div class="form-group">
          <input type="password" class="form-control" id="recipient-name" placeholder="Password">
          </div>
            <div class="text-right mt-4 mb-4">
              <h6>Forgot Password ?</h6>
            </div>
          <div  class="pop-up-login text-center">
            <button class="btn w-100">Login</button>
            <p>New Member? 
                <span><a href="" data-toggle="modal" data-target="#sign">Sign Up </a></span>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>

<!-- sign up form -->


<section>
<div class="modal fade bd-example-modal-sm" id="sign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header pb-0"  style="border:none">
        <h5 class="modal-title mt-3 border-none log-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group">
        <select class="form-control">
            <option>Select City*</option>
            </select>
        </div>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="Phone Number*">
          </div>
          <div class="form-group">
          <input type="Email" class="form-control" id="recipient-name" placeholder="Email Id">
          </div>
          <div  class="pop-up-login text-center">
            <button class="btn w-100" data-toggle="modal" data-target="#otp">Get OTP</button>
            <p>Already Registered?<span>
                <a href="" class="colr"  data-toggle="modal" data-target="#login #sign">
                Sign In
</a>
            </span></p>
         
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>




<!-- send otp -->
<section>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#otp">Otp</button>
<div class="modal fade bd-example-modal-sm" id="otp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header pb-0"  style="border:none">
        <h5 class="modal-title mt-3 border-none log-title" id="exampleModalLabel">Verify OTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="Enter OTP">
          </div>
          <div class="text-center">0<span id="getotp"></span></div>
          <div  class="pop-up-login text-center">
            <button class="btn w-100">Verify</button>
            <p> Didn’t receive OTP?<span>Resend</span></p>         
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
        document.getElementById('getotp').innerHTML =
  004 + ":" + 20;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  //if(m<0){alert('timer completed')}
  
  document.getElementById('timer').innerHTML =
    m + " : " + s;
  console.log(m)
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
    </script>
</section>

    <!-- otp timer counter -->
   
