<!doctype html>
<html>
    <head>
        
	<link href="lib/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body>
        <h1>Checkout</h1>
        <form id="login" action="cart.php" method="post">
            What car do you want?
            <select name="cars">
                <option value="0">Please select</option>
  <option value="1">S - $40000</option>
  <option value="2">T - $50000</option>
  <option value="3">U - $60000</option>
  <option value="4">V - $70000</option>
</select>
            
            <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="pmt" placeholder="Downpayment">
            <input type="submit" name="btn_submit" value="Submit">
        </form>
        
        <script src="lib/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    </body>
</html>