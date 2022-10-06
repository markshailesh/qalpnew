<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
   
</head>
<body>

        <div style="display:none;">
        <form action="{{$action}}" method="post" name="payuForm" id="payuForm" class="pb-0">
            @csrf
            <input type="hidden" name="key" value="{{$MERCHANT_KEY}}"/>
            <input type="hidden" name="hash" value="{{$hash}}"/>
            <input type="hidden" name="txnid" value="{{$txnid}}"/>
            <div class="px-5 pt-4 pb-5 form-block">
                <div class="row">
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
                            <textarea class="input-box form-control w-100" placeholder="Note *" name="productinfo">Wallet Recharge</textarea>
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
            <input name="surl" value="{{route('payumoney-success')}}" hidden/>
            <input name="furl" value="{{route('payumoney-cancel')}}" hidden/>
            <input name="plan_id" value="{{$plan_id}}" hidden/>
             <input name="user_id" value="{{$user_id}}" hidden/>
              <input name="udf1" value="{{$user_id}}" hidden/>
               <input name="udf2" value="{{$plan_id}}" hidden/>
            <input type="hidden" name="service_provider" value="payu_paisa"/>
        </form>
        </div>


        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
 
           $("#payuForm").submit();
});
</script>
</body>
</html>
