<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            background-image: url('path_to_your_wallpaper_image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .login-form {
            width: 300px;
            margin: 150px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Silakan login</h2>
        <form action="proses_login.php" method="post">
            <label>Username:</label>
            <input type="text" name="username" required>
            <br>
            <label>Password:</label>
            <input type="password" name="password" required>
          
            
            
                <div class="form-group">
                  <label for="role">Select Your Type:</label>
                  <select class="custom-select form-control-border" name="role" id="role">
                  <option></option>
                    <option>Admin</option>
                    <option>User</option>
                    <option>Kassubag</option>
                  </select>
            <br>
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>