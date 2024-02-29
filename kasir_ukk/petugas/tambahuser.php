<div class="row well">
        <div class="col-md-4">
            <div class="card well">
                <div class="card-header">
                    <h3 class="">Tambah User</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="nama" placeholder="Enter Name" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Level:</label>
                            <select name="level" id="level" class="form-control">
                                <option value=""></option>
                                <option value="Administrator">Administrator</option>
                                <option value="Petugas">Petugas</option>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php 
    include_once("../koneksi/koneksi.php");
    if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
    $level = $_POST['level'];

        // Insert user data into table
        $result = mysqli_query($con, "INSERT INTO user (username, password, level) VALUES('$username','$password','$level')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php?page=user'>View Users</a>";
    } 
?>