<?php
//SESSION NEEDS to be start in every page
	session_start();
//if submit button was clicked then storing the name/pass and doing the validation
	if (isset($_REQUEST['submit'])) {
		$uname = $_REQUEST['uname'];
		$password = $_REQUEST['password'];
		

				if (empty(trim($uname)) || empty(trim($password)) ) {
					echo "Null submission";
				}
				else{




								  $fn = fopen("database.txt","r");
								  
								  while(! feof($fn))  {
									$result = fgets($fn);

									$data= explode('|', $result);

									

									if (trim($data[0]) == $uname && trim($data[1])== $password) {

											$_SESSION['uname'] = $uname;
											$_SESSION['password'] = $password;

											header("location: home.php");
										}
										
								  }
								  echo "invalid username and password";
						
					 }
			

					
		
	}
	else{
		echo "Invalid request. please login first";
		header("location: Login.php");
	}
?>