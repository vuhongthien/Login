<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div id="wrapper">
    <form action="#" method="Post"  id="form-login">
        <h1 class="form-heading">Đăng Nhập</h1>
        <div class="form-group">
            <i class="far fa-user"></i>
            <label>tên đăng nhập</label>
            <input type="text" class="form-input" id="txtUserName" name="username" placeholder="Tên đăng nhập">
        </div>

        <div class="form-group">
            <i class="far fa-key"></i>
            <label>mật khẩu</label>
            <input type="password" class="form-input" id="txtpassword" name="password" placeholder="Mật khẩu">
        </div>
        <input type="submit" name="submit" value="đăng nhập" class="form-submit">
    </form>
</div>
</body>
</html>