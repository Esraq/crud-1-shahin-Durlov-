<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registration Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
  <div class="container">
    <section class="register">
      <h1>Register</h1>
      <form action = "/crud" method = "post">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      <div class="reg_section personal_info">
      <h3>Student Information</h3>
      <input type="text" name="name" value="" placeholder="Enter Name">
      <input type="text" name="id" value="" placeholder="Enter id">
      </div>
      <div class="reg_section password">
      <h3>Department</h3>
      <input type="text" name="department" value="" placeholder="Enter Department">
      <input type="text" name="cgpa" value="" placeholder="Enter cgpa">
      </div>
      <div class="reg_section password">
      <h3>Sex</h3>
      <select name="myselectbox">
        <option name="myoption1" value="autism">Male</option>
        <option name="myoption2" value="blindness">Female</option>
        <option name="myoption3" value="chronic">Gay</option>
        <option name="myoption4" value="others">Lesbian</option>
      </select>
     
      </div>
      <p class="terms">
        <label>
          <input type="checkbox" name="remember_me" id="remember_me">
           I accept  Terms & Condition
        </label>
      </p>
      <p class="submit"><input type="submit" name="submit" value="Sign Up"></p>
      </form>
    </section>
  </div>

 

</body>
</html>