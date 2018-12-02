<html>
<body>

<p>Hello! <?php echo $_GET["first"]; ?> <?php echo $_GET["last"]; ?></p>
<br>
<p>We will get back to you at <?php echo $_GET["email"]; ?></p>
	
	<br/>
	<hr/>
	<br/>
	
		<p>Submitted info:</p>
	</br>
		<p>First Name: </p> <?php echo $_GET["first"]; ?>
		<p>Last Name: </p> <?php echo $_GET["last"]; ?>
	<br/>
		<p>Email: </p> <?php echo $_GET["email"]; ?>
		<p>Gender: </p> <?php echo $_GET["gender"]; ?>
		<p>Age: </p> <?php echo $_GET["age"]; ?>
		<p>Feedback: </p> <?php echo $_GET["feedback"]; ?>
	<br/>
		<p>Name on card: </p> <?php echo $_GET["ccName"]; ?>
		<p>Credit Card number: </p> <?php echo $_GET["card_box"]; ?>
		<p>Expiration Date: </p> <?php echo $_GET["ccMonth"]; ?> <p>, </p><?php echo $_GET["ccYear"]; ?>
		<p>CSV: </p> <?php echo $_GET["ccCSV"]; ?>
		<p>Donation Amount: </p> <?php echo $_GET["donationAmount"]; ?>
		
	<br/>
	<hr/>
	
	<p>If the above information is incorrect please contact us immediately.</p>
	
</body>
</html>
