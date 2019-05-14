<!DOCTYPE html>
<html>
<head>
	<title>hungrzy</title>
	<link rel="shortcut icon" href="images/logo1.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body background="images/res.jpg">
	<div class="topnav">
  		<img src="images/header_logo.jpeg" height= "45px" width = "110px" align="left">

	</div>
	<style>
.button {
  background-color:	#3CB371;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration-color:	;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<div class="agile-login">
		<h1>Payment</h1>
			<div class="w3ls-form">
				<form  action="userdone.html" method="post">
					<label>Account Holder Name</label>	</br>		
          	<input type="text" name="name" placeholder="Account Holder Name" style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;" /></br>

					<label>Account Number</label></br>
                    <input type="text" name="acc_number" placeholder="Account Number" style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;"  /></br>

                    <label>CVV</label></br>
                    <input type="text" name="acc_cvv" placeholder="CVV"  style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;" /></br>

                    
                    <label>Expiry Date</label></br>
                    <input type="text" name="exp_date" placeholder="Expiry Date"  style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;" /></br>

                    <label>Amount</label></br>
					<input type="text" name="amount" placeholder="Enter the amount"  style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;" /></br>
                
                        <a href="userdone.html" class="button">SUBMIT</a>    
                         <a href="home.php" class="button">BACK</a>                  
                  				</form>
		</br>
	
</body>
</html>