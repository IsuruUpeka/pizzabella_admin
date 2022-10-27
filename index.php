<?php include_once "config.php"; 
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$users = [];
while($row = $result->fetch_assoc()){
    array_push($users,$row);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 bg-white shadow-sm">
                <div class="p-3">
                    <h2 class="mb-0">Bella Verona | Admin</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-xl-4 shadow-sm bg-white">
                <div class="p-3">
                    <form action="add_user.php" method="POST">
                        <div class="form-group">
                            <h5>Add user</h5>
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="text" class="form-control" name="age">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <input type="text" class="form-control" name="gender">
                        </div>
                        <div class="form-group">
                            <label for="">Phone number</label>
                            <input type="text" class="form-control" name="mobile">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <input type="submit" class="btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
            <div class="col-xl-8">
                <div>
                    <div class="p-2">
                        <h5>User List</h5>
                    </div>
                    <?php if(count($users)>0): ?>
                    <?php foreach($users as $user): ?>
                        <div class="p-3 bg-white shadow-sm d-flex mt-2">
                            <h5><?php echo $user['username']; ?></h5>
                            <div class="justify-content-end d-flex flex-grow-1">
                                <div>
                                <a href="edituser.php?id=<?php echo $user['id'] ?>" class="badge badge-warning">edit</a>
                                    <a href="deluser.php?id=<?php echo $user['id'] ?>" class="badge badge-danger">delete</a>
                                </div>
                            </div>
                        </div>  
                    <?php endforeach; ?>
                    <?php else: ?>
                        <div class="alert alert-danger">
                            <h5>No Users Yet!</h5>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12 pl-0 pr-0">
                <div class="bg-dark p-1">
                    <p class="text-center text-white mb-0">All rights received</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>