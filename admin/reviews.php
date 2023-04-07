<?php include 'includes/header.inc.php' ?>
<?php include '../db/reviewModel.php' ?>



<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Reviews</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Review</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php 
                                $reviews = Review::getAllReview();
                                if(empty($reviews)){
                                    echo '<tr><td class="text-center" colspan="4">No records...</td></tr>';
                                }else{
                                    $counter = 1;
                                    foreach($reviews as $review){
                                        echo "<tr>
                                                <td>".$counter++."</td>
                                                <td>".$review[1]."</td>
                                                <td>".$review[2]."</td>
                                                <td>".$review[3]."</td>
                                                <td><a class='btn btn-danger' href='delete_review.php?id=" . $review[0] . "'><i class='fa-solid fa-trash'></i></a></td>
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