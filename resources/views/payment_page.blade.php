
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap" rel="stylesheet" >

    <title>Payment Platform </title>
     <style>
 
body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background: #ecf0f3;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  /* overflow: hidden; */
  font-family: poppins;
}

.container {
  position: relative;
  margin:30px;
  width: 400px;
  height: 600px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.brand-logo {
  height: 70px;
  width: 70px;
  background: url("https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Paystack-mark.png");
  /* margin-left: -10x;
  margin-top:10px; */
  /* margin: auto; */
  border-radius: 50%;
  box-sizing: border-box;
  box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
}
.brand-logo-2 {
  height: 70px;
  width: 70px;
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANsAAADmCAMAAABruQABAAAAn1BMVEX////wuCLwtx3vtADwthXwthH///3//vr//ffvtQD//PTwuB3++u/++Oj99eH88ND65rfzxlH88NTxuybxuy799+X31ob1zm332I7yvzv55K/++Ov43Z30y2b54ajyvzr768bywkb0yV776b7657b10HX77cn20n732ZP0ymj99Nv88dL54aP32Inyw0z1zHHzw1f0x0f0zFf10GT32IHY+ZK6AAARpUlEQVR4nO1d6XbqOBIOWmyM2YzNZhYbg4FwCUn39Ps/22BCAsGlkmQJyPSZ78/M6Vwsl1WqvUovL//H81Fv7TrrZbe7iuNVd5l2ds1nv5EhHLfeaC/3b8PgsBhHUVSr+QVqtTCKxovsn32vXn/2O1aA2+6l8SAbe5RyzkiBI03f8Iv/wDjlwTRtPftdtdCPR6+HhHlHomoSEO5/vPWe/cJKcCa7OOOfWyUj60IeDdJfz5u7eBBwylSJuoDxfPfsl0fg9qdB4nPl3bqlLto/mwIBGuv9wePqbAiA0E3j2WQA6E9nYeUNu9q6/NmE3GLSPVBe4YgBoLn7bGqu0dkuqPmOfYH9njPnrGaRBV68gES/RFr2phGV6+bTKzPOj+aJz0//g/2GBc+mqkBnEykwY2FWUS8ZjubLTq9Ap7vNEypWgbTzbMIa60xuTh3pCg+v21W79PNmPAwF1LHNE8i5Qn05kwpGwrwon6d90TPS3IN/t3jmiXNXh5qEsqP9Gw3XE9REdKc+uPE8fRAdZTTjRHbMGA8GSwXTtwv+mm/vTwSM1Uwi8wn3sqWQE3/AGXDoy8yeor/dTiA5Z8w/DNQ9zboPPIJEz/B2ermMMj7rTnSeOII2zn88bZM8gt7k8r0ZCXqahvwakpXeo2mbTDl+0Hi00Q8M7BLgmfTBtKUBShlh9K3n6D+2vYBoe6gX158x9KDxKC/bHkoPPgC0PfK8NfYRShnh7+uKj4b27ZFyshOghiPhi07ll+lFAG2LR9HWzz100+ghNnh6B5C8bPgg3b08oHKf8ZGaCSLAnJafyae2Xh5FI8fZsZZVEyHfyACeeIytLNk0vuhWEPvXcIHnk+gBzqk7Qj0ZwnMt8wrCEmBJEhhxuRLSMew7fm1aUFXuX2EIfLz7+93uHnYcvzdtayGv1B4Da3ATuauCSYYKEbawklOaQ8eZGnM6jvUYP2kjK+ncBmRMkrGNR4sxBayFK6YJl4bi8YwuIElq9K6B5dYQi4cQvrGUg3egL0iie+aHOwGm1Fg4t7NpLy8xxPc8v58x6cSozc/sBQ9bAcQdftfW80twRqgLymzx4xFTiD3I4m5+aX0AHe/vhWlsz0JvgvqTj6wtcIN2gJHGA5vBbMgkObLkvbZth5rGdGZTgqXw5xvYElS3yyWIFCH+yOYnbUJxkru5AE7Xw7RaaFd+jUDmv5eZvK8hpPEktbpYB4qVH9n+LpVPzojCy32Sltm1X1sHkPv50OoqZzhbTGHzd8umOZi+OR7pu2zbAJMi/M1y3AnytotPOLqDkKzDJ/tMWmg77ATmAI4LJXBcaT0ajFaVzaERJiCpbTe4PoOZhIImSS+hvCjcyCvxq5tjuxalRoQA2MDLkQTi/N2X5c7Dqb6DUMfOGkssBHx+YimwfRjEH43LHpMKEg0lLTQMrZbRg8I/xVLv0Lb8SD3yhV5wz5kiDMkO1is9mrBmO744uNTPlLGmmo3FlNXYHcrGBIetRgfgP89+bjKfachLzIZkmiygAAdM3RdrBfBL3wbCBJ8Awp8QI836WYPjkScs4R+Uwg7KIQcw2XwGCe1H5deiUDUX2f8lB5YofvEmEmAldgLHPyASkTUyFrmG5ZiKmj3tbsReNvHtO4mNQPQpmZDReuV0i5KdtEVIC62r7JfGh2g9pDZtUo7zkbGcK0X2QfHzmv1USj0X7hqWugc2gElL0duwMf75Ie+QcBaSRkLsZO+AuDqd40s1oUTz12rDRnvX63U6nV5v1241LHhV7pvQ/PFxHgHcWBLhXClSoidkH4skCkPfD6NkEbxuRtPuzozAqTBgwSUFFw1g49grFnJLsRhr7dSG9/3/GOOM+bVgsJw0K1I4F2aXxeL/CzHwWTjClX1EaQvgE0b9YNutYmLGwg4kBffQyQGu9IV2pbup2DxDuD+eTXXDy7E4OqhSmuwCKp8NRRzURQsQJOQxThfznUZ0qCvOVPKZygNSyOoVGKATRPyr0ecl+UrVw4/F+WVVcxw4cmQMco+D2FrK1DES5TuVBEEszuepR/+BzBlsXqdIAFmLPC/rylxFZ45UqXgrRdJemoAp6kNm4cJOF16tqJcPprhW2CJJBq7uZ0LeGAvKAQYsQKINQv2tWK3XxdZIkbPRickBCrlsGWL+aDXqkoHAIHSENmRB2lgvVDwtP8u78Z6FEQsD6pi/geRdM0OWEgXIhXDLH+pWybXRCrSq4OG09Ko7ob9WkBZpO4gTQE78VHKAAXOz6tF8/IL60ADCFzcWRg9LMPu0QhZ2V9oWsrgWJz2JjGT8MNts9/EqjvfbQZ4tQk+tn/Soz8P55QQ5eIViTeKBwQCCJ1cf1MEC5IVMz5fta4XcbK/jPKJq9BFv9sVodbwCh48qJfTKAR5Su5juUDX+5R+G+QQQ547b2mcJUyGP+cPT1qFHrSjZqkLZEc3S67NL9RcmJBl2vNvzPMTKGL5fO9o33K6Pc0f11vu0xA5+ev6Ti1hbJMGNu3p7rtLLTXg2xI8azwzqVOalWOxXfwtikpBIIda6zBV68Imk+y8ziU7USzrzHBhyM/GLUbXQVmdrOO2CZ2aFU5PbI3cOoqehcEkSqTJKc5AYUMcC08Kp5S0Rp+oGzNzSaTvub5Oqdhszr8EpeZ+kyO02EXebpTrP7w+qDAQqihQtVPI5t+ET9jcat9Ouf2vnuJwHYSZGvpHerszW4qh1EX3QzUg5y0BF312DDy3VA9/WZ7FZWalf0Rb90V6hPscbNW9hr2OvlOzyh9jCYVphjfZGQ2L6Fou1/tyeLjQCVK2/x12qRgMJ3dusdwOccDFYVmVpp71RJC0RhEorooFkocqAS1dwpAPR6Jhb0qwnz3eKXuUJTLfktL7MZPNZLh/OfvJcL1qn4+U7f4oBT8qPJpVEFQooGiteXyFF/vXc+bvmTC5if4pfB21jK31clWKZen+Z4fO14Ifbn+L3pmPUsoXsWLideZ5UMyWPVonlvjYoWSwGibZCTeC4k9XmEOnv2DesFywutZYnfBEDjNnsreN8TKnGjFOQuEg5b6MEVxprvaGOHt5WVz5WfzkfbbKxrxqlxB8uKbfQxQSpIoRfgHEeBbPNW/73X6FmdFn6bC5m+iqABk1I34GwI4g1mi7wrLY3NATV+E8CH9jUBVpK7v7wZjZ7ezTFiTEkAUr6alHRNXTFiRnYYYAHli22UWMV0PZBvE0fKykpwNRNVymwekLL4Em3kPIpHkphB3vErR9EG/HzcyjrD17owSQVkDp4iB4gPOx+q+beAh8PZW9uTv8B4oRHP1RXQ7Jz9jortAJDVUC815uYSAs/5WxhSxW0LFfM3L4oX5RvNpigs0JqLLPFlrHNSqcbEP4KBlskkTa+sGShuKY1k2LKaNIV2IgtrDKocMUt2ZbL+5w4wsZIH6iLR6O4VrmaGI3XexDHwy0q7yY4W8Ktwfqwv3GE+wOZJO/jqsDWnDHLlhfhY5VByn180pdvJ4byx6bJTKiEG7/RQaUYCfUzfwAkxVw6YP5irizjhN2Kn4+y4/H0LOkB7g+XOtJ7hVp8zEaC34oHXoTB3pSK568ATqu6fCqlBggZ+gb9HCcwPn5fVYhUjdCF7QS/sOJoGQjhXlCxV6xchvXjyaGNrGqvqq9DOEs+tq3KkdM2aqAQ34LD41RqoDpu2HgzNxNnPVxYCtrytdC5rKASNj7dq+cttr2+caw7Ro8c21o4ct+N7iTIElmtp58E+Ta1FOXG3WPPgvH13QzONu6f7mbsUX6K/PtA+Yk/79kMk6I2n40RB9/tEWRxZHGn3uxM8+x0gWVUkjOkUtGJEHjbBd4fq4ZLgeiV4G3sep31uhQxteY8fgLqir1azLyp3P34Gi5UKgctt2ravWrOfUe1nAVF8DX4i5TCFc6odCLoxma+rI4atOxg7IU7X+eKlwqRJuWOXN/q+IElypXMfK39mTP4W+lPaYkrCavUOiNCmTOu1wqN3Z2v7j4Slv9Wnl5AuM3Bk3ic1MK1dl8E0PJnAoYnkshmfSAeJ63SOvYTu/OToML5HdDgb77iFdC0i+o0IARnC4HNAPW1Ldt9Vueh4ul3nd5hwfO9M7cBJZsNwMezFY06AW94rVKj+gNfph04VqgPjGYgPLam5xq4kjPuIThnwFkOPQi8QyO0V64kSbuYSq6zGiAhaAlA3giRDelRB+4QmLup50MFz/ytD6GbXWrWSldXqHVi7Mmde3MEk9HBsktCjGXYGfUPNNIcmT7/8+3JB/xXuOfWyy011IB3WVyWMeX+zxp0MhZ4u6W+zhOYSavoFVxUx5EPw3zqefSYcOQhHC3llsqVYlzHGZ648zgkYb+iC8mTIjNhZVAePoyDLAxjGV3/k8tER0hQQsHszCTGU0qe4RrnyVBiR74lmF7tS0bNKOEPXnuSGT7+U8V5YjM4heNSxErpKsqUvukVCZ+RSoYkiLqC7AG30BYlniJ3WsHwaovPy6Ag51v6Asw88dJHbROSGEZiP8dWUkQfO6LRoqRmWjwhKQkxHRD/GWvl2BY4W5EFQU2rsXAVZ3qZWONk1uEd+e6riDh2SI1WX0coV1LD4MKJ49g7+m8a8BU9xadlWxN5OQEvkfmG6f1G7WJPZDc3NmdC5uGZibzEDxwRGhWKKLSzdNxAU3zZEU8MQg143MT4FqBTbQSivT/RFIfdCA0qn4sVHlpQHKgixOkyX/ntJk2krpolVd9hjdNGArPMx+l2ORJIrW6sUpDwoMqd5MfFJZW4nqEXd+J5Lhd3aAEr80dVUscNCW2m6vuUyVS5BKqJ1lXzKtdcNyW0aXfT36BVmCZcJYDVQAepHmXKWtef7EtoI2PDVGNx4NQuJmtgt+icxs1phhs6Etr8CjNVfmDviYNdN6i/SQZvhXlfR6jgxXk16aBzKYrKPNXr6Z0pPkXH5/5IQ+G+y8qvTAsXCieOJKrcNJdMUSA8khZnf0E+m5WZ3uJ64gxlT3MtGxFEOJ2tlSxBKUseFa+hhisq6zXS9Wu89ev0uVkWy6mDMmG3tJk638XdJzpD1dp4G8qZuiTv4QaBo1LQb1pMUz8uwt41HDHxvRvXn5x7i3lHfFyacGT3Bp5pyOmok/UY251iN2BfkRfNtgIN9UdtaAw1jWEXrobmTWgp2qpxoY5xWgyQvakEbnZmnlr1LTWNpk2o/ubv0GuHf9JHw2AzjZeddqs5afWW8SjjqnXF5vWiIdEvWannGiOoj/vn16IoGY+TKPQ1Bg1ht3Ko4SgbKgReunrD8Go+uVxwogr1GfzCt6SV3InewrSRQgrj8/ayC48WZYXfuSMbs2hQ2oxzff0DqfmVfhmP7zuowTMu7iqUMa3208nsnltHLFzSueU1WtVyi9VUXTXaDuYV/LFfo5UDnf1AyUqpAmMf56Wo+jOStiu5a1ANNm5qayZEKRwkQntgNipbCBv1tgdiljVxOskdZIpxnOuEf5haqEuM+rTyqGwhhPeCamHuSZJwCtjlisa9MjwrJUhtyl7Nu4p2GXKHkT44WLeqjQYXlwdpwF0e7OkDW7eQNsbsw0qjW3NvTaiYF5x/oj7jtoZKudPAikJQv89AAmfAx9ZGnbXmoTlnErQyRAtzmlgc7lyfHyoM4P8B316D05KbZs5/otlVDffA8DQCpjKkYWh5cnWjM1O6LQgCqXjtEYze+PsKHYsP3QbKEa1rMOWr1ZXQOujd16H62OWQ6kpN4i3svor7alpFK8Jk+6E1HpxFIzujny54vxdtx++WTgNPjTyf8Y2VCTs/MLgfbUc0d29RMfkXJfD4D2q5znW3qtiahwIlaMWDLPJEI8MZ9xe5+gQiLezvTttLMTo8neYLj9JiHjX7vD2bMU4p9bN5p22zkfwaq0fQdoLj9Lv77WaYfRTIZvkoXk+ce9FVYP0w2h6P3b+YtgZNn/0K98O/mba76rcnI0mf/Qb3w192Ii+/En/bv3no1+A/ti+M+kUYWr7f5TfhH3uz038dKlWK/49gb9vb/UWwe+PQ78K/WAW8WBqU8CtxT+fQAP8FB6UXT8dJwKEAAAAASUVORK5CYII=");
  /* margin-right: 20px; */
  /* margin: auto; */
  border-radius: 50%;
  box-sizing: border-box;
  box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
}

.brand-title {
  /* margin-top: 10px; */
  font-weight: 200;
  font-size: 1rem;
  color: #000080;
  /* letter-spacing: 1px; */
}
.error {
  /* margin-top: 10px; */
  font-weight: 200;
  font-size: 1rem;
  color: #000080;
  border:1px #000080;
  /* letter-spacing: 1px; */
}
.brand-head{
  margin-top: 30px;
  font-weight: 400;
  font-size: 1.8rem;
  color: #000080;
  letter-spacing: 1px;
}

.inputs {
  text-align: left;
  margin-top: 20px;
}

label, input, button {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-bottom: 4px;
  text-transform:uppercase;
}

label:nth-of-type(2) {
  margin-top: 12px;
}

input::placeholder {
  color: gray;
}

input {
  background: #ecf0f3;
  padding: 30px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

/* button {
  margin-top: 20px;
  background: #1DA1F2;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
}

button:hover {
  box-shadow: none;
} */

a {
  position: absolute;
  font-size: 8px;
  bottom: 4px;
  right: 4px;
  text-decoration: none;
  color: black;
  background: yellow;
  border-radius: 10px;
  padding: 2px;
}

h1 {
  position: absolute;
  top: 0;
  left: 0;
}
p {
  position: absolute;
  top: 0;
  left: 0;
}
       }
         
    </style>
  </head>
  <body>
     
    <div class="container">
      <div class="brand-head">Make Payment</div>
        <!-- input -->
      <div class="inputs">
        <form class="makePaymentForm" id="paymentForm">
          @csrf
          <label>name</label>
          <input type="text" name="name" placeholder="Full Name" class="name" id="first-name" />
          <label>Email</label>
          <input type="email" placeholder="example@test.com" class="email" name="email" id="email-address" />
          <label>Phone Number</label>
          <input type="number" name="number" placeholder="Phone Number" id="number"  class="number" />
          <label>Amount</label>
          <input type="text" name="amount"placeholder="Amount" id="amount" class="amount"/>
        
            <!-- <button class="brand-logo"> </button> <button class="brand-logo">445 </button> -->
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6  pull-left"><button class="brand-logo-2 pay" type="submit" > </button>
            <div class="brand-title">Flutterwave</div></div>
            <div class="col-md-6 pull-right"><button class="brand-logo" type="submit" onclick="payWithPaystack(event)"> </button><div class="brand-title">Paystack</div></div>
          </div>
        </form>
      </div>


       <!-- <div class="row">
  <div class="column">
    <img src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Paystack-mark.png" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Paystack-mark.png" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Paystack-mark.png" alt="Mountains" style="width:100%">
  </div>
</div> -->
        
        <!--  -->

       
    </div>

    <!-- jquery script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <!-- Optional JavaScript; choose one of the two! -->
    <!-- flutterwaveJs -->
    <script src="https://checkout.flutterwave.com/v3.js"></script>
    
    <!-- paystackjs -->
    <script src="https://js.paystack.co/v1/inline.js"></script> 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
<!-- script for flutterwave -->
<script>
   
    
 
  $(function(){
    $(".makePaymentForm").submit(function(e){
        e.preventDefault();
    
    // getdata={
    //     'name':$('#name').val(),
    //     'email':$('#email').val(),
    //     'amount':$('#amount').val(),
    //     'number':$('#number').val(),
    // }
    var name=$('.name').val();
    var email=$('.email').val();
    var amount=$('.amount').val();
    var phone=$('.number').val();
    makePayment(name,email,amount,phone);
    // console.log(getdata);
    });
  })
 
  function makePayment(name,email,amount,phone_number) {
    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-209157485eef4c33c85369d0ce632af2-X",
      tx_ref: "RX1_{{ substr(rand (0, time()),0,7 ) }}",
      amount,
      currency: "USD",
      country: "US",
      payment_options: " ",
      myemail:email,
    //   redirect_url: // specified redirect URL
    //     "https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",
    //   meta: {
    //     consumer_id: 23,
    //     consumer_mac: "92a3-912ba-1192a",
    //   },
      customer: {
        email,
        phone_number,  
        name,
      },

      //
      onClose: function(){
              alert('Window closed.');
          },

      callback: function (data) {
        var transaction_id  = data.transaction_id;
        console.log(data)
        console.log(data.status)
        if(data.status=='successful'){
          $.ajax({
            type: "POST",
            url:"https://st.tmgrplatform.com/api/exists",
            data:'transaction_id='+transaction_id,
            dataType:"json",
            success:function(response){
              if(response.status==400){
                var _token=$("input[name='_token']").val();
                $.ajax({
                  method:"POST",
                  url:"{{URL::to('verify-payment')}}",
                  data:{
                    transaction_id,
                    _token
                  },
                  success:function (response){
                    var newMessage="Payment Successful!";
                    // console.log(response);
                    // console.log(response.status);
                    // console.log(response[0].status);
                    if(response[0].status=='success'){
                      var newData={
                        'email':response[0].data.customer.email,
                        'transaction_id':transaction_id
                      } 

                      $.ajaxSetup({
                              headers: {
                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              }
                            });
                            $.ajax({
                              type: "POST",
                              url:"https://st.tmgrplatform.com/api/payment",
                              data:newData,
                              dataType:"json",
                              success:function(response){
                                window.location.href
                                if(response.status==200){
                                  console.log(response.message);
                                  $('form').prepend(
                                    '<h2 class="error">'+newMessage+'</h2>'

                                  ); 
                                  // window.location.reload();
                                }
                               
                                else{
                                  console.log("error");
                                }
                                //(response.status==400){
                                //   console.log(response.message);
                                // }
                              }
                            });
                      // console.log(newData);
                    }
                  }
                
                });
              }

            }
          })
        }
      },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "My store",
        description: "Payment for items in cart",
        logo: "https://www.google.com/imgres?imgurl=https%3A%2F%2Flookaside.fbsbx.com%2Flookaside%2Fcrawler%2Fmedia%2F%3Fmedia_id%3D1954453744809899&imgrefurl=https%3A%2F%2Fwww.facebook.com%2FtheFlutterwave%2F&tbnid=FX7w1FK5MhmECM&vet=12ahUKEwiDgrrljpz0AhXYwYUKHSiOAgsQMygCegUIARDQAQ..i&docid=Ae9fOt3vc7DxiM&w=2041&h=2041&itg=1&q=flutterwave%20images&ved=2ahUKEwiDgrrljpz0AhXYwYUKHSiOAgsQMygCegUIARDQAQ",
      },
    });
  }
 
</script>
<!-- script for paystack -->
<script>
  
   
    let paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
      function payWithPaystack(e){ 
        e.preventDefault(); 
        let handler = PaystackPop.setup({
          key: 'pk_test_8b1759286ecb39229494887dfd077be3225b481b', // Replace with your public key
          email: document.getElementById("email-address").value,
          first_name: document.getElementById("first-name").value,
          amount: document.getElementById("amount").value * 100,
          ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
          // label: "Optional string that replaces customer email"
           
          onClose: function(){
              alert('Window closed.');
          },
          callback: function(response){
            let reference=response.reference;
            if(response.status=='success'){ 
             
              $.ajax({
                type: "POST",
                url:"https://st.tmgrplatform.com/api/exists",
                data:'transaction_id='+reference,
                dataType:"json",
                success:function(response){
                  // console.log(response);
                  if(response.status==400){
                    $.ajax({
                      method:"GET",
                      url:"{{URL::to('verify-pay')}}/"+reference,
                      success:function (response){
                        
                       
                        if(response.status==true){
                          var newMessage="Payment Successful!";
                            
                            
                            
                             
                            var payData= {
                               
                              'email': response.data.customer.email,
                              'transaction_id':response.data.reference
                            }
                         
                            $.ajaxSetup({
                              headers: {
                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              }
                            });
                            $.ajax({
                              type: "POST",
                              url:"https://st.tmgrplatform.com/api/payment",
                              data:payData,
                              dataType:"json",
                              success:function(response){
                                if(response.status==200){
                                  console.log(response.message);
                                  $('form').prepend(
                                    '<h2 class="error">'+newMessage+'</h2>'
                                  ); 
                                  // window.location.reload();
                                }
                               
                                else{
                                  console.log("error");
                                }
                                //(response.status==400){
                                //   console.log(response.message);
                                // }
                              }
                            });
                           
                          }


                         
                      }

                    });  
                  // }else{
                  //   console.log("status==400)");
                  //   $('form').prepend(
                  //       '<h2>'+response.message+'</h2>'
                  //   );
                   
                } 
                }
              });

            }else{
              console.log("Not Not Bot ");
            }
                            
          } 
        });          
      
        // });
        handler.openIframe();
      }

</script>
</body>
</html>