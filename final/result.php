<html>
<style>
	body{
		background-color: azure;
		margin: 60px;
	}
	h3{
		
		text-align: left;
		padding-right: 30px;
	}
	h2{
		text-align: left;
		
	}
</style>
<body>


	
<h3>Student Name: <?php echo $_POST["StudentName"]; ?><br></h3>
<h3>Registration no: <?php echo $_POST["name"]; ?><br></h3>
<h3>Pincode: <?php echo $_POST["Pincode"]; ?><br></h3>

	<h2>Department: <?php echo $_POST["Department"]; ?><br>
Session: <?php echo $_POST["Session"]; ?><br>
Level: <?php echo $_POST["Level"]; ?><br>
Course: <?php echo $_POST["Course"]; ?><br>
Semester: <?php echo $_POST["Semester"]; ?><br></h2>


</body>
</html>