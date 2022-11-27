<?php include('registration.php') ?>
<Html> 
<head>   
<title>  
Registration Page  
</title>  
</head>  
<body bgcolor="Lightpink">  
<br>  
<br>  
<form>  
<body background="C:\Users\sumit\OneDrive\Desktop\project work 2022 mcm\product list\basket.png" link="#000" alink="#017bf5" vlink="#000">
	<br/>
<h1 align="center">
		<font face="Lato" color="#f62411" size="8">
			WEll-COME TO BIGEST ONLE STORE PLAZE FILL UP THE FOLLOWING iNFORMATION TO GIVE BETTER SERVICE TO YOU
		</font>
	</h1>
	<form action="registation.php" method="Post">
<label> Firstname </label>         
<input type="text"name="firstname" size="25"/> <br><br>
<label> Middlename: </label>     
<input type="text" name="middlename" size="25"/> <br> <br>  
<label> Lastname: </label>         
<input type="text" name="lastname" size="25"/> <br><br>    
<label>   
Custemer work details :  
</label>   
<select>  
<option value="Work/Job">Work/Job</option>  
<option value="Farmaer">Farmaer</option>  
<option value="Gov Officer">Gov Officer</option>  
<option value="Arrmy Officer">Arrmy Officer</option>  
<option value="Student">Student</option>  
<option value="Private employee">Private employee</option>  
</select>  
  
<br>  
<br>  
<label>   
Gender :  
</label><br>  
<input type="radio" name="male"/> Male <br>  
<input type="radio" name="female"/> Female <br>  
<input type="radio" name="other"/> Other  
<br>  
<br>  
  
<label>   
Phone :  
</label>  
<input type="text" name="country code"  value="+91" size="8"/>   
<input type="text" name="phone" size="10"/> <br> <br>  
Address  
<br>  
<textarea cols="100" rows="6" value="address">  
</textarea>  
<br> <br>  
Email:  
<input type="email" id="email" name="email"/> <br>    
<br> <br>  
           Password:  
<input type="Password" id="pass" name="pass"> <br>   
<br> <br>  
Re-type password:  
<input type="Password" id="repass" name="repass"> <br> <br>
<a href="login from for customer.html">  
<input type="button" value="Submit"/>  
</form>  
</body>  
</html>  
