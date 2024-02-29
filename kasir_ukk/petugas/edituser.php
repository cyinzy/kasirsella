<?php

include_once("../koneksi/koneksi.php");
 
if(isset($_POST['update']))
{	
	$id = $_GET['userID'];
	
	$Username=$_POST['username'];
	$Password= md5($_POST['password']);
    $level = $_POST['level'];

	$result = mysqli_query($con, "UPDATE user SET username='$Username', password='$Password', level='$level' WHERE userID=$id");
	
	header("Location: index.php?page=user");
    echo "<script>alert('berhasil')</script>";
}


$id = $_GET['userID'];

$result1 = mysqli_query($con, "SELECT * FROM user WHERE userID=$id");
 
while($user_data = mysqli_fetch_array($result1))
{
	$Username = $user_data['username'];
	$Password = $user_data['password'];
    $Level = $user_data['level'];
}
?>

<div class="row well">
        <div class="col-md-4">
            <div class="card well">
                <div class="card-header">
                    <h3 class="">Update User</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        
                        <div class="mb-3 mt-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="username" value="<?php echo $Username; ?>" placeholder="Enter Name" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" value="<?php echo $Password; ?>" placeholder="Enter password" name="password">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Role :</label>
                            <select name="level" class="form-control" required>
                                <option value="<?php echo $level?>"><?php echo $level ?></option>
                                <option value="Administrator">Administrator</option>
                                <option value="Petugas">Petugas</option>
                            </select>
                        </div>
                        <div>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>