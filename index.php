<?php

// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Homepage</title>
</head>
<body>
    <div class="container">
        <a href="add.php">Add New User</a>
        <div>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name</th> 
                    <th>Mobile</th> 
                    <th>Email</th> 
                    <th>Update</th>
                </tr>
                <?php  
                while($user_data = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$user_data['name']."</td>";
                    echo "<td>".$user_data['mobile']."</td>";
                    echo "<td>".$user_data['email']."</td>";    
                    echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
