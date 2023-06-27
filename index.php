<?php

include "connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2</title>
    <link rel="stylesheet" href="display.css">
</head>

<body>
    <section>
        <div class="title">
            <h3>Students Informations</h3>
        </div>
        <table class="table">
            <div class="buttons">
                <button class="add" name="add"><a href="form.php">Add Student</a></button>

                <button class="download" name="download"><a href="download.php?filename=student_details">Download XL</a></button>

            </div>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Percent</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `student` ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['Id'];
                        $name = $row['Name'];
                        $age = $row['Age'];
                        $gender = $row['Gender'];
                        $percent = $row['Percentage'];

                        echo '<tr>
        <td>' . $id . '</td>
        <td>' . $name . '</td>
        <td>' . $age . '</td>
        <td>' . $gender . '</td>
        <td>' . $percent . '</td>
        <td>
<button><a href="update.php?updateid='.$id.'">Update</a></button>
<button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
</td>
        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
        </div>

    </section>
</body>

</html>