<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="margin-left: 20px">
    <form action="user_data.php" method="post">
        <div  style="margin-bottom: 10px;">
            <label for="">Name</label>
            <input class="" type="text" name="name" />
        </div>
        <div  style="margin-bottom: 10px;">
            <label for="">Email</label>
            <input class="" type="email" name="email" />
        </div>
        <div  style="margin-bottom: 10px;">
            <label for="">Date of Birth</label>
            <input class="" type="date" name="date_of_birth" />
        </div>
        <div  style="margin-bottom: 10px;">
            <label for="">Gender:</label>
            Male: <input  type="radio" name="gender" value="male" />
            Female: <input type="radio" name="gender" value="female" />
        </div>
        <div  style="margin-bottom: 10px;">
            <label for="">Country</label>
            <input class="" type="text" name="country" />
        </div>
        <button style="margin-top: 10px;" type="submit">Register</button>
    </form>
    </div>
</body>
</html>