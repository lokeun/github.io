<?php
include_once'header.php';

?>
<DOCTYPE html>
<html>
<head>
<title>Post A project </title>
</head>
<style>
.project {
    -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
	column-rule-style: solid;
	column-rule-width: 1px;
</style>
<body style="background-color:#f3f3f3;">
<fieldset>
<div class="project">
<form action="includes/postajob.inc.php" method="post">
<center>
Project Title:*</br>
     <input type="text" size="21"></br></br>
	  Job Category:</br>
<select name="categories" >
<option value="ipod">Assignment</option>
<option value="radio">Essay</option>
<option value="journals">Journal</option>
<option value="article"	> Article</option>
</select></br></br>
	Job Description:*</br>
     <textarea name="comments" cols="15" rows="5"></textarea></br></br>
	
Starting date:</br>
<input type="date" size="21" ></br></br>
Ending date:</br>
<input type="date" size="21"></br></br>
Amount per pages:</br>
<input type="money"></br></br>
Words per page:</br>
<select name="categories">
<option value="journals">250</option>
<option value="article"	> 550</option>
</select></br></br>
Number of pages:</br>
<input type="numbers"></br></br>
Reference style:</br>
<select name="categories" >
<option value="MLA">MLA</option>
<option value="APA">APA</option>
<option value="Other">Other</option></select><br/><br/>
<input type="checkbox"  required name="service"
value="Agree" />Agree to our terms and services on work and payment</input></br></br>
<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'demo_sandbox_client_id',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
    }
  }, '#paypal-button');
  // Set up a payment
payment: function(data, actions) {
  return actions.payment.create({
    transactions: [{
      amount: {
        total: '0.01',
        currency: 'USD'
      }
    }]
  });
}
// Execute the payment
onAuthorize: function(data, actions)
{
  return actions.payment.execute().then(function()
  {
    // Show a confirmation message to the buyer
    window.alert('Thank you for your purchase!');
  });
}

</script>
<button type="submit" name="submit" style="border-radius: 12px;" >POST</button>
</center>
</form>
</div>
</fieldset>

</body>
</html>
<?php
include_once'footer.php';
?>