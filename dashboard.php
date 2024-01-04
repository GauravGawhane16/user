<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles, if needed */
        img {
                max-width: 130px;
                max-height: 130px;
          }

        .logoutLblPos{

               position:fixed;
               right:10px;
               top:5px;
            }

    </style>
</head>
<body>
    <div class="container mt-4">
        <h2>User Profile</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Profile Picture</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('db.php'); // Include your database connection

                // Fetch data from the 'users' table
                $query = "SELECT * FROM users";
                $result = mysqli_query($con, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td><img src='uploads/" . $row['profile_picture'] . "' alt='Profile Picture'></td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No data found</td></tr>";
                }
                ?>

               <a href="logout.php" class="btn btn-danger logout-btn logoutLblPos">Logout</a>
            </tbody>
        </table>
    </div>
</body>
</html>
