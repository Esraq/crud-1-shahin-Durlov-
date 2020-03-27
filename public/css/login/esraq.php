<?php


    mysql_connect("localhost","root","");
	mysql_select_db("eisty");
   
   if(isset($_POST['submit']))
   {
	   $name=$_POST['username'];
	   $email=$_POST['email'];
	   $pass=$_POST['password'];
	   $mc=$_POST['myselectbox'];
	   $cp=$_POST['confirm'];
	   
	   if($pass==$cp){
	   if($name==' '){
		   
		   
		   echo "<script>alert('please enter user name!')</script>";
		   
		   
	   }
	   if($email==''){
		   
		   
		   echo "<script>alert('please enter email!')</script>";
		  
		   
	   }
	   if($pass==''){
		   
		   
		   echo "<script>alert('please enter password!')</script>";
		
		   
	   }
	   if($mc==''){
		   
		   
		   echo "<script>alert('please enter user name!')</script>";
		   
		   
	   }
	           if(filter_var($email,FILTER_VALIDATE_EMAIL ) == false){
			
				 echo "<script>alert('Invalid email format!')</script>";
				
				
			}
			$check_email="select * from users where email='$email'";
			$run=mysql_query($check_email);
			 if(mysql_num_rows($run)>0){
			 
			  echo "<script>alert('Email $email already exists in our database!')</script>";
			
			 }
	        $query="insert into users 
			  (name,email,password,disability) values ('$name','$email','$pass','$mc')";
			   if(mysql_query($query)){
				   
				   header("Location:login.html");
				   
			   }
	   
	   
	   
   }
   }
   
	   
	   echo "<script>alert('password and confirm password does not match!')</script>";
	   
   
	   
   
   ?>