<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['fulname']) &&
        isset($_POST['m_no']) && isset($_POST['address']) &&
        isset($_POST['purpose']) && isset($_POST['companion'])) {
        
        $fulname = $_POST['fulname'];
        // $date = $_POST['date'];
        // isset($_POST['date'])&&
        // $date =date('Y-m-d',strtotime( $_POST['date']));
        $m_no = $_POST['m_no'];
        $address = $_POST['address'];
        $purpose = $_POST['purpose'];
        $companion = $_POST['companion'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "mysql";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            // $Select = "SELECT  email FROM register WHERE  email= ? LIMIT 1";
            $Insert = "INSERT INTO entry(fulname,m_no, address, purpose, companion) values(?,  ?, ?, ?,?)";

            

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sissi",$fulname, $m_no, $address, $purpose, $companion);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>


<!-- 
$fulname=$_POST['fulname'];
       $date=$_POST['date'];
       $m_no=$_POST['m_no'];
       $address=$_POST['address'];
       $purpose=$_POST['purpose'];
       $companion=$_POST['companion'];
    isset($_POST['date']) && -->