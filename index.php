<?php
// kĩ thuật giữ giá trị lại trên ô input sau khi submit form  
if (isset($_POST['submit'])) {
    $err = [];
    if (empty($_POST['userName'])) {
        $err["userName"] = "Không được để trống trường userName!";
    } else {
        $userName = $_POST["userName"];
    }
    if (empty($_POST['password'])) {
        $err["password"] = "Không được để trống trường password!";
    } else {
        $password = $_POST["password"];
    }
    if (empty($_POST['gender'])) {
        $err["gender"] = "Vui lòng chọn giới tính!";
    } else {
        $gender = $_POST["gender"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kĩ thuật lưu dữ liệu trên form</title>
    <style>
        input {
            display: block;

        }

        p {
            color: red;
            background-color: gold;
            display: inline-block;
        }

        select {
            display: block;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <h1>Kĩ thuật lưu trữ dữ liệu trên form</h1>
        <label for="userName">userName</label>
        <input type="text" name="userName" id="userName" value="<?php if (!empty($userName)) {
                                                                    echo $userName;
                                                                } ?>  ">
        <p><?php if (!empty($err['userName'])) {
                echo $err['userName'];
            } ?></p><br>

        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <p><?php if (!empty($err['password'])) {
                echo $err['password'];
            } ?></p>

        <select name="gender" id="gender">
            <option value="">---chọn---</option>
            <option value="male" <?php if (!empty($gender) and $gender == "male") {
                                        echo "selected= 'selected'";
                                    } ?>>Nam</option>
            <option value="female" <?php if (!empty($gender) and $gender == "female") {
                                        echo "selected= 'selected'";
                                    } ?>>Nữ</option>
        </select>
        <p><?php if (!empty($err['gender'])) {
                echo $err['gender'];
            } ?></p>

        <input type="submit" name="submit" value="submit">


    </form>
</body>

</html>