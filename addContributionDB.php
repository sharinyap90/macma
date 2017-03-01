<?php
    include_once 'dbconfig.php';
    
    if (isset($_POST['submit'])) {
	
		//Contribution
        $release_date   =   $_POST['release_date'];
		$voucher_no     =   $_POST['voucher_no'];
		$name =   $_POST['name'];
		$type_of_contribution    =   $_POST['type_of_contribution'];
		$nric    =   $_POST['nric'];
		$cash_status	=   $_POST['cash_status'];
		$cheque_status	=   $_POST['cheque_status'];
		$cheque_no =   $_POST['cheque_no'];
		$cheque_date    =   $_POST['cheque_date'];
		$prepared_by    =   $_POST['prepared_by'];
		$prepared_date   =   $_POST['prepared_date'];
		$verified_by     =   $_POST['verified_by'];
		$verified_date =   $_POST['verified_date'];
		$position    =   $_POST['position'];
		$chairman    =   $_POST['chairman'];
		$approved_by   =   $_POST['approved_by'];
		$approved_date     =   $_POST['approved_date'];
		$received_by =   $_POST['received_by'];
		$receiver_nric    =   $_POST['receiver_nric'];
		$received_date    =   $_POST['received_date'];
		//$donation_id    =   $_POST['donation_id'];
		
		//Donation
		//$donation_id    =   $_POST['donation_id'];
		$donation_details    =   $_POST['donation_details'];
		$total   =   $_POST['total'];
        
    
        $sql = "INSERT INTO contribution (release_date, voucher_no, name, type_of_contribution, nric, cash_status, cheque_status, cheque_no, cheque_date, prepared_by, prepared_date, verified_by, verified_date, position, chairman, approved_by, approved_date, received_by, receiver_nric, received_date) 
		VALUES ('$release_date', '$voucher_no', '$name', '$type_of_contribution', '$nric','$cash_status', '$cheque_status', '$cheque_no', '$cheque_date', '$prepared_by', '$prepared_date', '$verified_by', '$verified_date', '$position', '$chairman', '$approved_by', '$approved_date', '$received_by', '$receiver_nric', '$received_date')";
		
		$sql1 = "INSERT INTO donation (donation_details, total) 
		VALUES ('$donation_details', '$total')";
        
		$result = mysql_query($sql, $conn) or die(mysql_error());
		$result1 = mysql_query($sql1, $conn) or die(mysql_error());

        if (mysql_affected_rows())
        {
            
            echo "<script>alert(\"Successfully Added New Contribution Entry!\");</script>";
            echo "<script>window.location.assign('contribution.php');</script>";
        }

        else
        {
            echo "There is problem during inserting record.";
        }
		
		
    }
?>