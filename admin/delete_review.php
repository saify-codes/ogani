<?php
include '../db/reviewModel.php';

if (isset($_GET['id'])) {
    Review::removeReview($_GET['id']);
}
header("location:reviews.php");
?>