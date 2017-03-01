<?php
    include_once 'dbconfig.php';
    
    if (isset($_POST['submit'])) {
	
        $event_title		=   $_POST['event_title'];
		$description	=   $_POST['description'];
		$start_date	=   $_POST['start_date'];
		$start_time	=   $_POST['start_time'];
		$end_date	=   $_POST['end_date'];
		$end_time	=   $_POST['end_time'];
		
        $sql = "INSERT INTO event (event_title, description, start_date, start_time, end_date, end_time) 
		VALUES ('$event_title', '$description', '$start_date', '$start_time', '$end_date', '$end_time')";
        
		$result = mysql_query($sql, $conn) or die(mysql_error());

        if (mysql_affected_rows())
        {
            
            echo "<script>alert(\"Successfully Added New Event Entry!\");</script>";
            echo "<script>window.location.assign('event.php');</script>";
        }

        else
        {
            echo "There is problem during inserting record.";
        }
		
		
    }
?>