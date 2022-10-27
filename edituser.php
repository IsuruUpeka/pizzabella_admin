<?php 
include_once "config.php"; 
if($_GET['id']){
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=$user_id";
    $result = $conn->query($sql);
    $user = [];
    while($row = $result->fetch_assoc()){
        array_push($user,$row);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT USER</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center" style="height:100vh;">
            <div class="col-xl-4 shadow-sm bg-white">
                <div class="p-3">
                    <form action="edit.php" method="POST">
                        <div class="form-group">
                            <h5>Add user</h5>
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $user[0]['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $user[0]['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="text" class="form-control" name="age" value="<?php echo $user[0]['age'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <input type="text" class="form-control" name="gender" value="<?php echo $user[0]['gender'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Phone number</label>
                            <input type="text" class="form-control" name="mobile" value="<?php echo $user[0]['mobile'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="mobile" value="<?php echo $user[0]['password'] ?>">
                        </div>
                        <input name="id" type="hidden" value="<?php echo $user[0]['id'] ?>">
                        <input type="submit" class="btn btn-sm btn-warning" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
