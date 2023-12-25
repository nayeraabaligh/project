<?php
$firstname=$_REQUEST['first name'];
$lastname=$_REQUEST['last name'];
$email=$_REQUEST['e-mail'];
$address=$_REQUEST['address'];
$phonenumber=$_REQUEST['phone number'];
$cardnumber=$_REQUEST['card number'];
$sequritynumber=$_REQUEST['security number'];
$expirydate=$_REQUEST['expiry date'];
$price= $_REQUEST['price'];
$quantity= $_REQUEST['quantity'];
$total= $_REQUEST['total'];

if(isset($_POST'cnfrm'))
{ 
 
    $host="localhost";
    $user="root";
    $password="";
    $db="dopmine";
    
      
    $conn = mysqli_connect( $host, $user, $password, $db);

    $insert="insert into order-info values('$firstname','$lastname','$email','$addres','$phonenumber','$cardnumber','$sequritynumber','$expirydate',
    '$price','$quantity','$total')"
    
    mysqli_query($conn,$insert);

    if($conn){
        echo ("<h1 style=color:green;> your registration is done!</h1>");
    }
    else{
        echo ("<h1 style=color:red;> your registration is failed!</h1>");
    }

}
function check_login($con)
{

	if(isset($_SESSION['']))
	{

		$name = $_SESSION['first name'];
		$query = "select * from dopamine where 'first name' = '$name' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	
	header("Location: login.php");
	die;
}
session_start();

	include("connection.php");
	include("functions.php");

	dopamine = check_login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['first name'];
		$password = $_POST['password'];

		if(!empty($first name) && !empty($password) && !is_numeric($first name))
		{

			//read from database
			$query = "select * from dopamine where user_name = 'first name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['first name'] = $user_data['first name'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
    }
?>