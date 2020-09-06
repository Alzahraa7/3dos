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
                <label>Department Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <button type="submit" class="btn btn-info" name="send" value="submit">send</button>
        </div>
    </form>

    <?php
    //insert the department name into the database
    $dep_name = $_POST['name'];
    $insert = "INSERT INTO department VALUES (NULL,'$dep_name')";
    $q = mysqli_query($conn, $insert);
    if ($q) {
        echo "Successffully Inserted";
    } else {
        echo "Failed!" . mysqli_error($conn);
    }
    ?>
</body>

</html>