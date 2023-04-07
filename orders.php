<?php include './includes/header.inc.php' ?>
<?php include './db/orderCustomerModel.php' ?>

<?php
if (!isset($_SESSION['logged_in'])) {
    echo "<script>location='index.php'</script>";
    exit;
}
?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Orders</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Order#</th>
                                <th>Items</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <?php
                                $orders = Order::getAllOrders();
                                if (empty($orders)) {
                                    echo '<tr><td class="text-center" colspan="4">No records...</td></tr>';
                                } else {
                                    $counter = 1;
                                    foreach ($orders as $order) {
                                        echo "<tr>
                                                <td>" . $counter++ . "</td>
                                                <td>" . $order[1] . "</td>
                                                <td>" . $order[2] . "</td>
                                                <td>" . $order[3] . "</td>
                                                <td><span class='badge badge-danger'>" . $order[4] . "</span></td>
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
<?php include './includes/footer.inc.php' ?>