<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>QALP EDUCARE | Best Home Tutor in Varanasi</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Header Start-->
    @include('frontend/include/header')
    <!--Header End-->
<style>
    span{
    text-align: left;
    color: green;
    display: block;
    margin-top: -28px;
    margin-bottom: 3px;
    }
</style>
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">My Account</h1>
                <ul>
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                    <li>Forgot Password</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- My Account Section Start -->
        <div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/key.png">
                    </div>
                    <div class="col-md-6 mt-20">
                        <div class="noticed">
                            <div class="main-part">
                                <div class="method-account">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <strong>Success!</strong> {{ $message }}
                                        </div>
                                    @endif
                                    <form method="post" id="forget_form" action="{{route('save.new.password')}}">
                                        @csrf
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group floating-label mb-25">
                                                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Enter Your Mobile No." onkeyup="get_otp()" required>
                                                <label for="text-placeholder">Phone *</label>
                                            </div>
                                            <span style="color:red;display:none" id="phone_error">*Number Not Exists!</span>
                                            <!-- Form Group -->
                                            <div class="form-group" id="otp_div" style="display: none;">
                                                <input type="number" id="otp" name="otp" placeholder="Enter OTP" required>
                                            </div>
                                            <span style="color:red;display:none" id="otp_error">*Wrong OTP!</span>
                                            <span style="color:green;display:none" id="otp_success">*OTP Verified!</span>
                                            <div class="form-group floating-label mb-25" id="password_div" style="display: none;">
                                                <input type="text" class="form-control" id="password" name="password" placeholder="Enter Your Password." required="true">
                                                <label for="text-placeholder">Password *</label>
                                            </div>
                                            <span style="color:red;display:none" id="c_password_error">*Confirm Password Not Matched!</span>
                                            <div class="form-group floating-label mb-25" id="c_password_div" style="display: none;">
                                                <input type="text" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter Your Confirm Password" required="true">
                                                <label for="text-placeholder">Confirm Password *</label>
                                            </div>
                                            <span style="color:red;display:none" id="password_error">*Confirm Password Not Matched!</span>
                                            <span class="password_success" style="color:green;display:none">*Password Matched!</span>
                                            <div class="form-group text-center">
                                                <button type="button" id="save_button" class="readon submit-btn" onclick="save()" disabled>Submit</button>
                                            </div>
                                            <div class="last-password">
                                                <p>Not registered? <a data-toggle="modal" data-target="#exampleModal">Create an account</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account Section End -->

    </div>
    <!-- Main content End -->

    <!--- Start footer -->
    @include('frontend/include/footer')
    <!--- End Footer -->
    <script type="text/javascript">
        $("#phone").keyup(function() {
            var phone = $('#phone').val();
            var result = false;
            $.ajax({
                type: "POST",
                async: false,
                dataType: 'json',
                url: '/qalp/otp_message', // script to validate in server side
                data: {
                    _token: '{{ csrf_token() }}',
                    phone: phone
                },
                success: function(response) {
                    result = (response.status == true) ? true : false;
                    if (response.status == true) {
                        $('#otp').show();
                        $('#phone_error').html(null);
                        return true;
                    }
                    if (response.status == false) {
                        $('#phone_error').html('Number Already Exits');
                        return false;
                    }
                }
            });
            // return true if username is exist in database
        });

        function get_otp()
        {
            var phone = $('#phone_number').val();
            if(phone.length == 10)
            {
                $.ajax({
                    type: "GET",
                    async: false,
                    dataType: 'json',
                    url: '{{route('get.otp','')}}/'+phone,

                    success: function(response) {
                        $('#phone_error').css('display','none');
                        $('#otp_div').css('display','block');
                        $('#otp').attr('onkeyup','verify_otp('+response+')');
                    },
                    error: function(response)
                    {
                        $('#phone_error').css('display','block');
                    }
                });
            }
        }

        function verify_otp(correct_otp)
        {
            var input_otp = $('#otp').val();
            if(input_otp.length == 6)
            {
                if(correct_otp == parseInt(input_otp))
                {
                    $('#phone_number').attr('readonly','true');
                    $('#otp').attr('readonly','true');
                    $('#otp_error').css('display','none');
                    $('#otp_success').css('display','block');
                    $('#password_div').css('display','block');
                    $('#c_password_div').css('display','block');
                    $('#save_button').removeAttr('disabled');
                }
                else
                {
                    $('#otp_error').css('display','block');
                    $('#otp_success').css('display','none');
                    ('#phone_number').attr('readonly','false');
                    $('#otp').attr('readonly','false');
                    $('#password_div').css('display','none');
                    $('#c_password_div').css('display','none');
                    $('#save_button').attr('disabled','true');
                }
            }
        }

        function save()
        {
            var password = $('#password').val();
            var c_password = $('#confirm_password').val();
            if(!password)
            {
                $('#c_password_error').css('display','block');
                $('#c_password_error').text('*This Field Required');
                return false;
            }
            if(!c_password)
            {
                $('#c_password_error').css('display','none');
                $('#password_error').css('display','block');
                $('#password_error').text('*This Field Required');
                return false;
            }


            if(password == c_password)
            {
                $('#password_error').css('display','none');
                $('#c_password_error').css('display','none');
                $('.password_success').css('display','block');
                $('#forget_form').submit();
            }
            else
            {
                $('#password_error').css('display','block')
                $('.password_success').css('display','none');
            }
        }
    </script>
