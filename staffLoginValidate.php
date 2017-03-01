<?php
session_start();

	if(!isset($_POST['adminUsername']))
		header("Location: staffIndex.php");
	
    $username = $_POST['adminUsername'];
    $password = $_POST['adminpassword'];
	$_SESSION["username"] = $username;
	
    if ($username && $password)
    {
        $connect = mysql_connect("localhost", "root", "") or die ("Couldn't connect!");
        
        mysql_select_db("macma") or die ("Couldn't foound db!");
        
        $query = mysql_query("SELECT * FROM staff WHERE username = '$username'");
        
        $numrows = mysql_num_rows($query);
		$num = mysql_numrows($query);
        
		$i = 0;
        if ($numrows != $i)
        {
           while ($row = mysql_fetch_assoc($query))
           {
			   $user_id = mysql_result($query,$i,"id");
				$_SESSION['user'][$user_id] = $row;
			   
				$adminuser = mysql_result($query,$i,"username");
				$_SESSION["username"] = $adminuser;
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
           }
        
            if ($username == $dbusername && $password == $dbpassword)
            {
				
                echo "<script>alert(\"Welcome $username.\");</script>";
				echo "<script> window.location.assign('staffIndex.php'); </script>";
            }
            
            else
			{
                echo "<script>alert(\"Incorrect Username / Password!\");</script>";
				echo "<script> window.location.assign('staffLogin.php'); </script>";
			}
        }
        
        else
		{
            echo "<script>alert(\"User Name: '$username' Does Not Exist!\");</script>";
			echo "<script> window.location.assign('staffLogin.php'); </script>";
		}
    }
                                            
    else
		echo "<script>alert(\"Please enter username and password\");</script>";
		echo "<script> window.location.assign('staffLogin.php'); </script>";
?>