<?php

include_once "config/database.php";

$database=new Database();
$db = $database->getConnection();
$status=$_POST['decision'];
        $ClientID=$_POST['id'];
        echo $ClientID;
        echo $status;

        // $mail="muhammadfaraz00@gmail";
// Insert Data
	if (isset($_POST['id'])){
        $sql="update lawyer_invoice set status=:status where ClientID=:ClientID";
$query = $db->prepare($sql);
$query->bindParam(':status',$status);
$query->bindParam(':ClientID',$ClientID);


if ($query->execute()){
    echo " update ";
    echo 'decision table is succesfully update to';
}
else{
    echo "not ";
}
// echo $id;
// echo $decision;

        // $con=mysqli_connect("localhost","root","","leads_generate_db");
        // if (!$con){
        //     die("could not connct: ".mysql_error());
        // }
        // $decision=$_POST['decision'];
        // $id=$_POST['id'];
        // $query ="update lawyer_invoice SET status='$decision' where id=$id";
        // $resource = mysql_query($query)
        // or die (mysql_error());
        
    }
?>