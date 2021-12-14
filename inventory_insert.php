<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "inventori" ;

$conn = mysqli_connect('localhost', 'root', '', 'inventori');

if(isset($_POST['submit'])){
    
    
    if (!empty($_POST['created_date']) && !empty ($_POST['staff_name']) && !empty ($_POST['staff_no']) && !empty ($_POST['staff_dept']) && !empty ($_POST['order_description'])) {

        $orderdate = $_POST ['created_date'];
        $staffname = $_POST ['staff_name'];
        $staffno = $_POST ['staff_no'];
        $staffdept = $_POST ['staff_dept'];
        $orderdescription = $_POST ['order_description'];

        $query = "INSERT INTO inventory_request (created_date, staff_name, staff_no, staff_dept, order_description) VALUES ('$orderdate', '$staffname', '$staffno', '$staffdept', '$orderdescription')";

        $run = mysqli_query ($conn, $query) or die (mysqli_error());

        if ($run){

            echo "Form submitted sucessfully" ;
        }

        else{

            echo "Form not submitted" ;
        }

    }   

    else{

        echo "all fields required" ;
     }



   

}

?>