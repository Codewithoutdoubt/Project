
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $doctor = $_POST["doctor"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $description = $_POST["description"];
    $conn = mysqli_connect("localhost","root","","patients")   ;
    if($conn->connect_error){
        die('connection Failed:' .$conn->connect_error);
    }else{
        $sql = "insert into patient(Name,email,Mobile,doctor,date,time,description) 
        value(?,?,?,?,?,?,?)";
        $mysql_execute($sql) ;

    }

    // Example: Display a thank you message
    echo "Thank you, $name! Your email ($email) has been received.";
}
?>
