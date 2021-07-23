<html>
<style>
   form{
      text-align: center;
      margin-left:  260px;
      margin-right:  260px;
      padding: 90px;
      background-color: azure;
   }
   input{
      height: 20px;
      border:1px solid red;
   }
   button{
      background-color: red;
      color: white;
      width: 90px;
   }
   h1{
      background-color: orange;
      color: white;
      text-align: left;
      margin-left:  250px;
      margin-right:  250px;
      padding: 90px;
   }
   
h2{
   color: yellow;
   
}
</style>
<body >
   <h1>Course Registration</h1>

<form action="course.php"  method="post" >
<h2>Enter Reg No. : <input type="number" name="name"><br></h2>
<h2>Enter Password: <input type="password" name="Password"><br></h2>
<button> Sign in</button>
</form>

</body>
</html>