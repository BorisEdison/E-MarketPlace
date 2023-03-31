<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
   	<form action="" method="POST">
      <input type="text" name="username" placeholder="Enter User name">
      <input type="submit" name="submit">
      </form>
   <?php
        
   if(isset($_POST[submit])){
   	$user=$_POST['username'];
   	$con = mysqli_connect("localhost","root","","login1");
   	$query="SELECT * from flogin where mail='$user'";
   	$fire=mysqli_connect($con,$query);
   	$res=mysqli_fetch_array($fire);
   	$username=$res['mail'];
   	$password=$res['pass'];

   	if ($user!=null ||$user!="" && $user==$username) {

			$to_email = $user;
			$subject = "Simple Email Test via PHP";
			$body = "Your password is : $password";
			$headers = "From: vipulbelhekar20@gmail.calculhmac(clent, data)om";

			if (mail($to_email, $subject, $body, $headers)) {
			    echo "Email successfully sent to $to_email...";
			} else {
			    echo "Email sending failed...";
			}
			   	}
   }


      ?>
      
   </body>
</html>