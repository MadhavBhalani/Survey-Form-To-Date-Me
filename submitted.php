<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks for submitting</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet" />
</head>

<body>
    <style>
        body {
            background-color: rgb(54, 110, 54);
            font-family: 'Comfortaa', cursive;
            color: whitesmoke;
            font-weight: bold;
            font-size: 25px;
            text-align: center;
        }
    </style>
    <?php

    $name = $_POST['name'];
    $address = $_POST['address'];
    $igname = $_POST['igname'];
    $mobno = $_POST['mobno'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $essay = $_POST['essay'];
    $contact = $_POST['contact'];
    
    $conn = mysqli_connect("sql104.epizy.com", "epiz_31556710", "MpR8A9me84ZPk","epiz_31556710_surveyform");
    // $conn = mysqli_connect("localhost", "root", "","surveyform");
    $sql = "INSERT INTO data(name,address,igname,mobno,email,date,essay,contact) VALUES ('$name','$address','$igname','$mobno','$email','$date','$essay','$contact')";
    $result = mysqli_query($conn,$sql);

    $chkbox1[] = $_POST['chkbox'];
    $chk = "";
        foreach($chkbox1 as $chk1){
            // implode(",",$chk1);
            $chk .= implode(",",$chk1).", ";
        }
    $in_chk = mysqli_query($conn,"INSERT INTO data(chkbox) VALUES ('$chk')");
    if($in_chk==1){
        echo '<script>alert("Submitted Successfully")</script>'; 
    }
    else{
        echo'<script>alert("Failed To Submit")</script>';
    }
    

    if($result){
        echo "Hello, $name you have been added to the waiting list to date Madhav Bhalani on $date<br>";
    }
    else{
        echo "Error :" .mysqli_error($conn). " ";
    }

    mysqli_close($conn);

    ?>


</body>

</html>