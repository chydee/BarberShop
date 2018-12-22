<?php
    //$name = ($_POST['name'])
    //$email = ($_POST['email'])
    //$phone = ($_POST['date'])
   // $time = ($_POST['time'])
    ////$location = ($_POST['location'])
    //$subject = ($_POST['subject'])

   // $to = email of the admin 

// Inserting into just
    $sql = "INSERT INTO just (name, email, phone, date, time, location, subject)
    VALUES ('John Doe', 'john@example.com', '0904294121', '12/10/2018', '11:30', 'Lagos', 'I wanna have a good cut')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>