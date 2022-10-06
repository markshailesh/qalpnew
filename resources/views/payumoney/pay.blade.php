<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/payu.css') }}">
    <title>Paymoney</title>
    
    <script>
        var hash = '{{$hash}}';

        function submitPayuForm() {
            if (hash == '') {
                return;
            }
            var payuForm = document.forms.payuForm;
            payuForm.submit();
        }
    </script>
</head>
<body onload="submitPayuForm()">
<div class="payfrom">
    <div class="main-form position-relative">
        <div class="infyom-logo">
            <img src="https://sboxcheckout-static.citruspay.com/web/images/payuBanrding.png" alt="infyom logo">
        </div>
        <div class="text-center grp-logo">
            <img src="{{ URL::asset('images/dark-logo.png') }}" alt="paymoney logo"
                 class="logo">
        </div>
        @if($formError)

            <span style="color:red; margin-left: 50px;">Please fill all mandatory fields.</span>
            <br/>
        @endif
        <form action="{{$action}}" method="post" name="payuForm" class="pb-0">
            @csrf
            <input type="hidden" name="key" value="{{$MERCHANT_KEY}}"/>
            <input type="hidden" name="hash" value="{{$hash}}"/>
            <input type="hidden" name="txnid" value="{{$txnid}}"/>
            <div class="px-5 pt-4 pb-5 form-block">
                <div class="row">
                    <!--<div class="col-12">
                        <div class="form-group mb-3 position-relative">
                            <select class="form-select" name="user_type" required>
                                <option value="" selected disabled>User Type</option>
                                <option value="Tutor">Tutor </option>
                                <option value="Student">Student</option>
                           </select>   
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3 position-relative">
                                <select class="form-select" name="fee_type" required>
                                   <option value="" selected disabled>Fee Type</option>
                                   <option value="Registration Fee">Registration Fee</option>
                                   <option value="Tution Fee">Tution Fee</option>
                                   <option value="Other">Other</option>
                                </select>  
                        </div>
                    </div>-->
                    
                    <div class="col-12">
                        <div class="form-group mb-3 position-relative">
                            <input type="text" class="input-box form-control w-100" placeholder="Name *"
                                   aria-label="Recipient's username"
                                   aria-describedby="button-addon2" name="firstname"
                                   value="{{!empty($posted['firstname']) ? $posted['firstname'] : ''}}">
                            <div class="icon-group-append">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3 position-relative">
                            <input class="input-box form-control w-100" placeholder="Email *" type="email" name="email"
                                   value="{{!empty($posted['email']) ? $posted['email'] : ''}}">
                            <div class="icon-group-append">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3 position-relative">
                            <input class="input-box form-control w-100" placeholder="Phone *" type="number" name="phone"
                                   value="{{!empty($posted['phone']) ? $posted['phone'] : ''}}">
                            <div class="icon-group-append">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3 position-relative">
                            <input class="input-box form-control w-100" placeholder="Amount *" type="text" name="amount"
                                   value="{{!empty($posted['amount']) ? $posted['amount'] : ''}}">
                            <div class="icon-group-append">
                                <i class="fas fa-tag"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3 position-relative">
                            <textarea class="input-box form-control w-100" placeholder="Note *" name="productinfo">{{!empty($posted['productinfo']) ? $posted['productinfo'] : ''}}</textarea>
                            <div class="icon-group-append">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @if(!$hash)
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary w-100 continue-pay-btn">Continue to pay</button>
            </div>
            @endif
            <input name="surl" value="{{route('payumoney-succes')}}" hidden/>
            <input name="furl" value="{{route('payumoney-cancels')}}" hidden/>
            <input type="hidden" name="service_provider" value="payu_paisa"/>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>
