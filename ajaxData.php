<?php
//Include database configuration file
 include("./include/conn.php"); 


if(  isset($_POST["artname"]) && !empty($_POST["artname"])){
     $s="SELECT sectionname FROM tblsections where artcode='".$_POST["artname"]."' ";
    $rs = $conn->query($s);
     
    //Count total number of rows
    $rowCount = $rs->num_rows;
    
    if($rowCount > 0){
   echo '<option value="">Select  sectionname</option>';
   while($row = $rs->fetch_assoc()){ 
   echo '<option value="'.$row['sectionname'].'">'.$row['sectionname'].'</option>';
        }
    }else{
       echo '<option value="">section not available</option>';
    }
	
	$query = $conn->query("SELECT * FROM tbltypes where artcode='".$_POST["artname"]."' ");
	if($row = $query->fetch_assoc()){
		echo "#".$row['artname'];
	}
}

$conn->close();
?>