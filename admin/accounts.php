<?php include 'includes/header.inc.php' ?>
<?php include '../db/userModel.php' ?>



<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php 
                                $users = User::getAllUsers();
                                if(empty($users)){
                                    echo '<tr><td class="text-center" colspan="4">No records...</td></tr>';
                                }else{
                                    $counter = 1;
                                    foreach($users as $user){
                                        echo "<tr>
                                                <td>".$counter++."</td>
                                                <td>".$user[1]."</td>
                                                <td>".$user[2]."</td>
                                                <td>".$user[3]."</td>
                                                <td><a class='btn btn-danger' href='delete_user.php?id=" . $user[0] . "'><i class='fa-solid fa-trash'></i></a></td>
                                            </tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.inc.php' ?>