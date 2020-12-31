<button id="rzp-button1" hidden>Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "{{$response['razorPayId']}}", // Enter the Key ID generated from the Dashboard
    "amount": "{{$response['amount']}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "{{$response['name']}}",
    "description": "{{$response['description']}}",
    "image": "https://example.com/your_logo",
    "order_id": "{{$response['orderId']}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){

        document.getElementById('rzp_paymentid').value=response.razorpay_payment_id;
        document.getElementById('rzp_signiture').value=response.razorpay_signature;
        document.getElementById('orderid').value=response.razorpay_order_id;
        document.getElementById('name').value="{{$response['name']}}";
        document.getElementById('mobile').value="{{$response['contanctNumber']}}";
        document.getElementById('email').value="{{$response['email']}}";
        document.getElementById('amount').value="{{$response['amount']/100}}";
        document.getElementById('submit1').click();

        // alert(response.razorpay_payment_id);
        // alert(response.razorpay_order_id);
        // alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "{{$response['name']}}",
        "email": "{{$response['email']}}",
        "contact": "{{$response['contanctNumber']}}"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){

        // alert(response.error.code);
        // alert(response.error.description);
        // alert(response.error.source);
        // alert(response.error.step);
        // alert(response.error.reason);
        // alert(response.error.metadata.order_id);
        // alert(response.error.metadata.payment_id);
});

window.onload=function()
{
    document.getElementById('rzp-button1').click();
}
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

<form method="post" id="form1" action="{{url('/payment_success')}}" hidden>
 @csrf
    <input type="text" id="name" name="name" value="" >
    <input type="email" id="email" name="email" value="" >
    <input type="mobile" id="mobile" name="mobile" value="" >
    <input type="text" id="orderid" name="orderid" value="" >
    <input type="text" id="rzp_signiture" name="rzp_signiture" value="" >
    <input type="text" id="rzp_paymentid" name="rzp_paymentid" value="" >
    <input type="text" id="amount" name="amount" value="" >
    <button type="submit" id="submit1" hidden>Submit</button>
</form>