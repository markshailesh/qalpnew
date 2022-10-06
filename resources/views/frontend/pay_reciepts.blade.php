<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paymoney</title>

</head>


<style>
.payfrom{
    margin-top:125px;
}
    .main-forms{
    width: calc(100% - 100px);
    max-width: 600px;
    margin: auto;
    background: #fff;
    box-shadow: 0 0 15px 0 rgb(156 156 156 / 30%);
    padding: 25px;
    }
    
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

@media print {
  #printPageButton {
    display: none;
  }
}

.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
</style>
<body>
<div class="payfrom">
    <div class="main-forms">
        <h3>Thank You. Your order status is {{$status}} </h3>
            <h4>Your Transaction ID for this transaction is {{$txnid}}</h4>
          <h4>We have received a payment of Rs. {{$amount}}</h4>
    </div>
</div>
<br/>
<div style="text-align:center;">
   <a href="https://qalpedu.com/"  id="printPageButton"  class="button button4">Back to Home</a>
   <button  id="printPageButton"   onclick="window.print()" class="button button4 d_none">Print Reciept</button>
</div>

</body>
</html>
