<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
           <link rel="stylesheet" href="PhpProject1\bootstrap\css" type="text/css" media="screen" /> 
        </title>
    </head>
    <body>
        <h3>Register here</h3>
	<form>
	<table border="1">
                <tbody>
				
                    <tr>
                        <td>First name:</td>
                        <td><input type ="text" name ="firstname"></td>
                    </tr>
					<tr>
                        <td>Last name:</td>
                        <td><input type ="text" name ="lastnamename"></td>
                    </tr>
					<tr>
                        <td>Email:</td>
                        <td><input type ="text" name ="email"></td>
                    </tr>
                    <tr>
                        <td>User name:</td>
                        <td><input type ="text" name ="username"></td>
                    </tr>
                
                
                    <tr>
                        <td>Password:</td>
                        <td><input type ="password" name ="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit" name="Submit" /></td>
						
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
			</form>

        <?php
            if ($_POST['Submit'])
                {
			 $firstname = $_POST['firstname'];
			 $lastname = $_POST['lastnamename'];			 
			 $email = $_POST['email'];
			 $username = $_POST['username'];
			 $password = $_POST['password'];
                         
                         
			 
			 if(!$firstname||!$lastname||!$email||!$username||!$password)
			 {
			     echo 'Please fill in all the fields<br/>
				       <a href = "index.php">Go back</a>';
					   exit;
			 }
                         
                         //This code was downloaded from W3school.com and modified
                         
                         //Validating a password
                         $uppercase = preg_match('#[A-Z]#', $password);
                         $lowercase = preg_match('#[a-z]#', $password);
                         $number    = preg_match('#[0-9]#', $password);
                         $special   = preg_match('#[\W]{2,}#', $password); 
                         $length    = strlen($password) >= 8;

                        if(!$uppercase || !$lowercase || !$number || !$special || !$length) 
                        {
                            echo "Invalid password";
                        }
                          
                        function is_password($password) 
                        {
                            return preg_match("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$", $password);
                        }


                        function is_password($password)
                        {
                            if (strlen($password) < 6)
                            {
                                return false;
                            }
                            if (strlen($password) > 20)
                            {
                               
                                return false;
                            }
                           
                            return true;
                        }


                }
        ?>
    </body>
</html>
