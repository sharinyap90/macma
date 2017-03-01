<?php
    include_once 'dbconfig.php';
    
    if (isset($_POST['submit'])) {
		
		//Membership
        $membership_no   =   $_POST['membership_no'];
		$registration_date     =   $_POST['registration_date'];
		$type_of_membership =   $_POST['type_of_membership'];
		$islam_name    =   $_POST['islam_name'];
		$name_before_islam    =   $_POST['name_before_islam'];
		$tel_no   =   $_POST['tel_no'];
		$hp_no     =   $_POST['hp_no'];
		$nric =   $_POST['nric'];
		$email    =   $_POST['email'];
		$citizenship    =   $_POST['citizenship'];
		$gender   =   $_POST['gender'];
		$marital_status     =   $_POST['marital_status'];
		$date_of_birth =   $_POST['date_of_birth'];
		$place_of_birth    =   $_POST['place_of_birth'];
		$convert_date    =   $_POST['convert_date'];
		$place_convert   =   $_POST['place_convert'];
		$level_of_education     =   $_POST['level_of_education'];
		$occupational =   $_POST['occupational'];
		$address    =   $_POST['address'];
		$successor_name    =   $_POST['successor_name'];
		$successor_tel_no   =   $_POST['successor_tel_no'];
		$communication_language     =   $_POST['communication_language'];
		//$child_id     =   $_POST['child_id']; - Child Table
		//$receipt_no	=   $_POST['receipt_no']; - Fees Table
		//$document_id	=   $_POST['document_id']; - Fees Table
		
		
		
		//Child
		$child_name     =   $_POST['child_name'];
		$child_nric =   $_POST['child_nric'];
		$child_educational_level    =   $_POST['child_educational_level'];
		$partner_name    =   $_POST['partner_name'];
		$partner_nric    =   $_POST['partner_nric'];
		//$membership_no    =   $_POST['membership_no'];
		
		//Fees
		$registration_fees     =   $_POST['registration_fees'];
		$yearly_fees =   $_POST['yearly_fees'];
		$total_fees    =   $_POST['total_fees'];
		//$membership_no    =   $_POST['membership_no'];
		
		//Document
		$copy_of_nric     =   $_POST['copy_of_nric'];
		$copy_of_islam_card =   $_POST['copy_of_islam_card'];
		$nric_size_photo    =   $_POST['nric_size_photo'];
		$other_document    =   $_POST['other_document'];
		$date_form_received    =   $_POST['date_form_received'];
		//$membership_no    =   $_POST['membership_no'];
        
    
        $sql = "INSERT INTO membership (membership_no, registration_date, type_of_membership, islam_name, name_before_islam, tel_no, hp_no, nric, email, citizenship, gender, marital_status, date_of_birth, place_of_birth, convert_date, place_convert, level_of_education, occupational, address, successor_name, successor_tel_no, communication_language) 
		VALUES ('$membership_no', '$registration_date', '$type_of_membership', '$islam_name', '$name_before_islam', '$tel_no', '$hp_no', '$nric', '$email', '$citizenship', '$gender', '$marital_status', '$date_of_birth', '$place_of_birth', '$convert_date', '$place_convert', '$level_of_education', '$occupational', '$address', '$successor_name', '$successor_tel_no', '$communication_language')";
		
		$sql1 = "INSERT INTO child (child_name, child_nric, child_educational_level, partner_name, partner_nric, membership_no) 
		VALUES ('$child_name', '$child_nric', '$child_educational_level', '$partner_name', '$partner_nric', '$membership_no')";
        
		$sql2 = "INSERT INTO fees (registration_fees, yearly_fees, total_fees, membership_no) 
		VALUES ('$registration_fees', '$yearly_fees', '$total_fees', '$membership_no')";
		
		$sql3 = "INSERT INTO document (copy_of_nric, copy_of_islam_card, nric_size_photo, other_document, date_form_received, membership_no) 
		VALUES ('$copy_of_nric', '$copy_of_islam_card', '$nric_size_photo', '$other_document', '$date_form_received', '$membership_no')";
		
		$result = mysql_query($sql, $conn) or die(mysql_error());
		$result1 = mysql_query($sql1, $conn) or die(mysql_error());
		$result2 = mysql_query($sql2, $conn) or die(mysql_error());
		$result3 = mysql_query($sql3, $conn) or die(mysql_error());

        if (mysql_affected_rows())
        {
            
            echo "<script>alert(\"Successfully Added New Member Entry!\");</script>";
            echo "<script>window.location.assign('registerMember.php');</script>";
        }

        else
        {
            echo "There is problem during inserting record.";
        }
		
		
    }
?>