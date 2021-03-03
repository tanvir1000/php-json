<!DOCTYPE html>
<html>

<head>
    <title>Form Registration </title>
</head>

<body>


    <h1>Form Registration</h1>
    <?php


    $FirstName = "";
    $LastName = "";
    $Gender = "";
    $Email = "";
    $UserName = "";
    $Password = "";
    $RecoveryEmail = "";
    $FirstNameErr = "";
    $LastNameErr = "";
    $GenderErr = "";
    $EmailErr = "";
    $UserNameErr = "";
    $PasswordErr = "";
    $RecoveryEmailErr = "";


    ?>
    <?php

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if (empty($_POST['fname'])) {
    //         $FirstNameErr = "please fill up this properly";
    //     } else {

    //         $FirstName = $_POST['fname'];
    //     }
    //     if (empty($_POST['lname'])) {
    //         $LastNameErr = "please fill up this properly";
    //     } else {

    //         $LastName = $_POST['lname'];
    //     }
    //     if (empty($_POST['gender'])) {
    //         $GenderErr = "please fill up this properly";
    //     } else {

    //         $Gender = $_POST['gender'];
    //     }
    //     if (empty($_POST['email'])) {
    //         $EmailErr = "please fill up this properly";
    //     } else {

    //         $Email = $_POST['email'];
    //     }
    //     if (empty($_POST['username'])) {
    //         $UserNameErr = "please fill up this properly";
    //     } else {

    //         $UserName = $_POST['username'];
    //     }
    //     if (empty($_POST['password'])) {
    //         $PasswordErr = "please fill up this properly";
    //     } else {

    //         $Password = $_POST['password'];
    //     }
    //     if (empty($_POST['remail'])) {
    //         $RecoveryEmailErr = "please fill up this properly";
    //     } else {

    //         $RecoveryEmail = $_POST['remail'];
    //     }
    //     echo "First Name: $FirstName Last Name: $LastName  Gender: $Gender Email: $Email ";


    //     $f = fopen("text.txt", 'a');
    //     fwrite($f, "First Name= " . $FirstName . "\n");
    //     fwrite($f, "Last Name= " . $LastName . "\n");
    //     fwrite($f, "Gender= " . $Gender . "\n\n");
    //     fwrite($f, "Email= " . $Email . "\n");
    //     fwrite($f, "User Name=" . $UserName . "\n");
    //     fwrite($f, "Password=" . $Password . "\n");
    //     fwrite($f, "Recovery Email=" . $RecoveryEmail . "\n");



    //     fclose($f);




    //     $filepath = "text.txt";
    //     $f1 = fopen($filepath, 'r');
    //     $s1 = fread($f1, filesize($filepath));
    //     $data = (explode("\n", $s1));
    //     echo $data[0];
    //     echo "<br>";
    //     echo $data[1];
    //     echo "<br>";
    //     echo $data[2];
    //     echo "<br>";
    //     echo $data[3];
    //     echo "<br>";
    //     echo $data[4];
    //     echo "<br>";
    //     echo $data[5];
    //     echo "<br>";
    //     echo $data[6];
    //     echo "<br>";
    //     fclose($f1);
    // }

    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST">
        <label for="fname"> Enter your first name </label>
        <input type="text" name="fname" id="fname">
        <p> <?php echo $FirstNameErr; ?> </p>

        <br>

        <label for="lname"> Enter your last name </label>
        <input type="text" name="lname" id="lname">
        <p> <?php echo $LastNameErr; ?> </p>
        <br>

        <label for="gender"> Gender </label>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male"> Male </label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female"> Female </label>
        <p> <?php echo $GenderErr; ?> </p>
        <br>

        <label for="email"> Email </label>
        <input type="email" name="email" id="email">
        <p> <?php echo $EmailErr; ?> </p>
        <br>


        <hr>
        <h3>User Account Information</h3>
        <label for="username"> User Name/User ID </label>
        <input type="text" name="username" id="username">
        <p> <?php echo $UserNameErr; ?> </p>
        <br>

        <label for="password"> Password </label>
        <input type="password" name="password" id="password">
        <p> <?php echo $PasswordErr; ?> </p>
        <br>

        <label for="remail"> Recovery Email Address </label>
        <input type="email" name="remail" id="remail">
        <p> <?php echo $RecoveryEmailErr; ?> </p>

        <input type="submit" value="Submit">
    </form>


    <br>
    <?php
    // echo "First Name: $FirstName Last Name: $LastName  Gender: $Gender Email: $Email ";


    // $f = fopen("text.txt", 'a');
    // fwrite($f, "First Name= " . $FirstName . "\n");
    // fwrite($f, "Last Name= " . $LastName . "\n");
    // fwrite($f, "Gender= " . $Gender . "\n\n");
    // fwrite($f, "Email= " . $Email . "\n");
    // fwrite($f, "User Name=" . $UserName . "\n");
    // fwrite($f, "Password=" . $Password . "\n");
    // fwrite($f, "Recovery Email=" . $RecoveryEmail . "\n");



    // fclose($f);




    ?>
    <?php

    // $filepath = "text.txt";
    // $f1 = fopen($filepath, 'r');
    // $s1 = fread($f1, filesize($filepath));
    // $data = (explode("\n", $s1));
    // echo $data[0];
    // echo "<br>";
    // echo $data[1];
    // echo "<br>";
    // echo $data[2];
    // echo "<br>";
    // echo $data[3];
    // echo "<br>";
    // echo $data[4];
    // echo "<br>";
    // echo $data[5];
    // echo "<br>";
    // echo $data[6];
    // echo "<br>";
    // fclose($f1);

    ?>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['fname'])) {
            $FirstNameErr = "please fill up this properly";
        } else {

            $FirstName = $_POST['fname'];
        }
        if (empty($_POST['lname'])) {
            $LastNameErr = "please fill up this properly";
        } else {

            $LastName = $_POST['lname'];
        }
        if (empty($_POST['gender'])) {
            $GenderErr = "please fill up this properly";
        } else {

            $Gender = $_POST['gender'];
        }
        if (empty($_POST['email'])) {
            $EmailErr = "please fill up this properly";
        } else {

            $Email = $_POST['email'];
        }
        if (empty($_POST['username'])) {
            $UserNameErr = "please fill up this properly";
        } else {

            $UserName = $_POST['username'];
        }
        if (empty($_POST['password'])) {
            $PasswordErr = "please fill up this properly";
        } else {

            $Password = $_POST['password'];
        }
        if (empty($_POST['remail'])) {
            $RecoveryEmailErr = "please fill up this properly";
        } else {

            $RecoveryEmail = $_POST['remail'];
        }
        //echo "First Name: $FirstName Last Name: $LastName  Gender: $Gender Email: $Email ";


        // $f = fopen("text.txt", 'a');
        // fwrite($f, "First Name= " . $FirstName . "\n");
        // fwrite($f, "Last Name= " . $LastName . "\n");
        // fwrite($f, "Gender= " . $Gender . "\n\n");
        // fwrite($f, "Email= " . $Email . "\n");
        // fwrite($f, "User Name=" . $UserName . "\n");
        // fwrite($f, "Password=" . $Password . "\n");
        // fwrite($f, "Recovery Email=" . $RecoveryEmail . "\n");



        // fclose($f);
        if (file_exists('text.json')) {
            $current_data = file_get_contents('text.json');
            $array_data = json_decode($current_data, true);
            $extra = array(
                'First Name' => $_POST['fname'],
                'Last Name' => $_POST['lname'],
                'Gender' => $_POST['gender'],
                'Email' => $_POST['email'],
                'User Name' => $_POST['username'],
                'Password' => $_POST['password'],
                'Recovery Email' => $_POST['remail'],
            );
            $array_data[] = $extra;
            $final_data = json_encode($array_data);
            if (file_put_contents('text.json', $final_data)) {
                echo '<script type=text/javaScript> alert("Info added") ; </script>';
            } else {
                echo '<script type=text/javaScript> alert("Not added") ; </script>';
            }
        } else {
            echo '<script type=text/javaScript> alert("JSON file not exists") ; </script>';
        }




        // $filepath = "text.txt";
        // $f1 = fopen($filepath, 'r');
        // $s1 = fread($f1, filesize($filepath));
        // $data = (explode("\n", $s1));
        // echo $data[0];
        // echo "<br>";
        // echo $data[1];
        // echo "<br>";
        // echo $data[2];
        // echo "<br>";
        // echo $data[3];
        // echo "<br>";
        // echo $data[4];
        // echo "<br>";
        // echo $data[5];
        // echo "<br>";
        // echo $data[6];
        // echo "<br>";
        // fclose($f1);

        // load file
        $data = file_get_contents('text.json');

        // decode json to associative array
        $data = json_decode($data, true);

        foreach ($data as $row) {
            echo  '<tr>
            <td>Firstname = ' . $row["First Name"] . '</td></br>
            <td>Last Name = ' . $row["Last Name"] . '</td></br>
            <td>Gender = ' . $row["Gender"] . '</td></br>
            <td>Email = ' . $row["Email"] . '</td></br>
            <td>User Name = ' . $row["User Name"] . '</td></br>
            <td>Password = ' . $row["Password"] . '</td></br>
            <td>Recovery Email = ' . $row["Recovery Email"] . '</td></br>
            </tr>';
        }
    }

    ?>


</body>

</html>