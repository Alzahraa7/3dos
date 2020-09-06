<?php
include 'connect to database.php';
include 'home.php';
?>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>


<body>
    <!-- It's just form to take the data of employee -->
    <form method="POST">
        <div class="container text-center mt-5">
            <div class="form-group">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="Pass" name="pass">
            </div>

            <div class="form-group">
                <label>salary</label>
                <input type="number" class="form-control" id="salary" name="salary">
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="file" name="img" accept="image/*" class="form-control" id="image">
            </div>

            <div class="form-group">
                <label>Department</label><br>
                <label for="IT">IT</label>
                <input type="radio" id="IT" name="dep" value="1"><br>
                <label for="Markting">Markting</label>
                <input type="radio" id="Markting" name="dep" value="2"><br>
                <label for="HR">HR</label>
                <input type="radio" id="HR" name="dep" value="3"><br>
                <label for="Social">Social Media</label>
                <input type="radio" id="Social" name="dep" value="4">
                
            </div>

            <button type="submit" class="btn btn-info" name="send" value="submit">send</button>
        </div>
    </form>
    <?php

    //insert the data of the employees to the database
    if (isset($_POST['send'])) {
        $Name = $_POST['name'];
        $Pass = $_POST['pass'];
        $Salary = $_POST['salary'];
        $Image = $_POST['img'];
        $dep = $_POST['dep'];
        $qry = "SELECT * FROM department WHERE dep_ID=$dep";
        if ($qry) {
            $Insert = "INSERT INTO employee VALUES (NULL,'$Name','$Pass','$Image','$Salary','$dep')";
        } else {
            echo " NOOO";
        }
        $Q = mysqli_query($conn, $Insert);
        if ($Q) {
            echo "New record created successfully !";
        } else {
            echo "Error" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>

</body>

</html>