<?php
include 'connect to database.php';
include 'home.php';
?>
<html>

<head>
    <script type="text/javascript" src="click.js"></script>
</head>

<body>
    <form method="POST">
        <div class="container text-center mt-5">
            <div class="form-group">
                <label>Employee ID</label>
                <input type="text" class="form-control" name="id">
            </div>
            <button type="button" class="btn btn-info" onclick="myFunction()" name="Edit emp" value="submit">send</button>
            <div style="display: none;" id="edit" class="edit">hello</div>
        </div>
        <script>
            var Edit = document.getElementById("edit");

            function myFunction() {
                var style = Edit.style.display;
                if (style == 'none') {
                    Edit.style.display = 'block';
                }
            }
        </script>


    </form>
    <form method="POST">
        <div class="container text-center mt-5">
            <div class="form-group">
                <label>Department ID</label>
                <input type="text" class="form-control" name="id">
            </div>
            <button type="submit" class="btn btn-info" name="Edit dep" value="submit">send</button>
        </div>
    </form>
</body>

</html>