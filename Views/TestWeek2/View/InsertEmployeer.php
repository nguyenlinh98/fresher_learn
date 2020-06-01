
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách User</title>
    <script src="https://kit.fontawesome.com/8b44ffb5f8.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
     <div class="col-md-6">
         <h1>Them nhan vien</h1>
         <form action="">
             <label for ="name">Nhập tên:</label>
             <input type="text" name="name" class="form-control">
             <label for ="birthday">Ngày sinh:</label>
             <input type="date" name="birthday" class="form-control">
             <label for ="address">Địa chỉ:</label>
             <input type="text" name="address" class="form-control">
             <label for ="salary">Mức lương:</label>
             <input type="text" name="salary" class="form-control">
                    <br>
             <input type="submit" name="btnInsert" class="btn btn-primary">
         </form>
     </div>
</div>
</body>
</html>
<?php