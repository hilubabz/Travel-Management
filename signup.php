<?php
include("database.php");

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $pw = $_POST['password'];
    $file_name = $_FILES['photo']['name'];
    $tempname = $_FILES['photo']['tmp_name'];
    $folder = 'Images/' . basename($file_name);

    // Check if username already exists
    $sql1 = "SELECT * FROM login WHERE username = ?";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("s", $name);
    $stmt1->execute();
    $result1 = $stmt1->get_result();

    if ($result1->num_rows > 0) {
        echo "Username already exists";
    } else {
        // Validate file type
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($_FILES['photo']['type'], $allowed_types)) {
            echo "Invalid file type. Only JPEG, PNG, and GIF are allowed.";
        } else {
            // Hash the password

            // Insert user into the database
            $sql2 = "INSERT INTO login (username, password, photo) VALUES (?, ?, ?)";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bind_param("sss", $name, $pw, $folder);

            // Move file and execute query
            if (move_uploaded_file($tempname, $folder)) {
                if ($stmt2->execute()) {
                    echo "Signup successful! You can now log in.";
                } else {
                    echo "Error: " . $stmt2->error;
                }
            } else {
                echo "Failed to upload profile picture.";
            }
        }
    }

    $stmt1->close();
    if (isset($stmt2)) {
        $stmt2->close();
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <div style="display: flex; justify-content: center;">
        <img src="Images/Logo.png" alt="Logo" height="200px" width="270px">
    </div>
    <div align="center">
        <form action="signup.php" method="POST" enctype="multipart/form-data" style="width: 1000px;">
            <fieldset>
                <legend style="font-size: 1.5rem; font-weight: bold;">Welcome to Gaidim</legend>
                <div align="left" style="width: 500px;">
                    <big><b>Username</b></big><br>
                    <input name="username" type="text" class="login-box" required>
                </div><br><br>
                <div align="left" style="width: 500px;">
                    <big><b>Password</b></big><br>
                    <input name="password" type="password" class="login-box" required>
                </div><br><br>
                <div align="left" style="width: 500px;">
                    <big><b>Profile Picture</b></big><br>
                    <input type="file" name="photo" accept="image/*" required>
                </div><br><br>
                <div align="center">
                    <input type="submit" name="submit" value="Sign up"
                        style="padding: 10px 30px; background-color: black; color: white; font-size: 1.2rem;">
                </div><br><br>
            </fieldset>
        </form>
    </div>
</body>

</html>