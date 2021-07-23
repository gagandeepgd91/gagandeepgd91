<html>
<style>
	form{
		background-color: blue;
		text-align: left;
		width: 600px;
		
		margin: auto;
		height: 950px;
	}
	h2{
		text-align: left;
		padding-left: 10px;
		color: white;
	}
	
	input{
		width: 500px;
		height: 30px;
		padding-left: 10px;
      border:2px solid black;
	}
	button{
		margin-top: 130px;
		background-color: blue;
		color: white;
		width: 150px;
		height: 50px;

	}
	h1{
		background-color: lightblue;
		text-align: left;
		width: 600px;
		height: 100px;
		margin: auto;
		padding-top: 30px;

	}
	
</style>
<body>
	<h1> Enter Enrollment Information<br>


</h1>


<form action="result.php" method="post">

<h2>
Student Name</h2><br>
 <input type="text" name="StudentName"><br>
 <h2>
Registration no</h2><br>
 <input type="number" name="name"><br>
<h2>Pincode</h2><br> <input type="text" name="Pincode"><br>
<h2>Session</h2><br> <input type="numbert" name="Session"><br>
<h2>Department</h2><br> <input type="text" name="Department"><br>
<h2>Level</h2><br> <input type="text" name="Level"><br>
<h2>Course</h2><br> <input type="text" name="Course"><br>
<h2>Semester</h2><br> <input type="text" name="Semester"><br>
<button> Submit</button>

</form>

</body>
</html>