<?php include 'includes/header.inc.php' ?>
<?php include '../db/orderModel.php' ?>


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
                                <th>#</th>
                                <th>Name</th>
                                <th>Items</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <?php
                                $orders = Order::getAllOrders();
                                if (empty($orders)) {
                                    echo '<tr><td class="text-center" colspan="6">No records...</td></tr>';
                                } else {
                                    $counter = 1;
                                    foreach ($orders as $order) {
                                        echo "<tr>
                                                <td>" . $counter++ . "</td>
                                                <td>" . $order[1] . "</td>
                                                <td>" . $order[2] . "</td>
                                                <td>" . $order[3] . "</td>
                                                <td>" . $order[4] . "</td>
                                                <td><a class='btn btn-danger' href='order_detail.php?id=" . $order[0] . "'>$order[5]</a></td>
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