<?php include 'includes/header.inc.php' ?>
<?php include '../db/orderModel.php' ?>
<?php
if (isset($_GET['id']) and is_numeric($_GET['id'])) {
    $order_detail = Order::getSingleOrder($_GET['id']);
    if ($order_detail) {
        $order_id = $order_detail['id'];
        $order_user_name =  $order_detail['fname'] . ' ' . $order_detail['lname'];
        $order_items = explode(',', $order_detail['items']);
        $order_quantities = explode(',', $order_detail['qty']);
        $order_total_price = $order_detail['price'];
        $order_address = $order_detail['address'];
        $order_address_2 = $order_detail['address2'];
        $order_city = $order_detail['city'];
        $order_state = $order_detail['state'];
        $order_postcode = $order_detail['postcode'];
        $order_phone = $order_detail['phone'];
        $order_email = $order_detail['email'];
    }
} else {
    print '<script>location = "orders.php"</script>';
}

?>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Orders# <?php echo $order_id ?>
                        <span class="text-danger float-right">
                            <strong>$<?php echo $order_total_price ?></strong>
                        </span>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h6>Order Name: <span class="text-success"><?php echo $order_user_name ?></span></h6>
                        </div>
                        <div class="col-md-4">
                            <h6>Contact: <span class="text-success"><?php echo $order_phone ?></span></h6>
                        </div>
                        <div class="col-md-4">
                            <h6>Email: <span class="text-success"><?php echo $order_email ?></span></h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h6>City: <span class="text-success"><?php echo $order_city ?></span></h6>
                        </div>
                        <div class="col-md-4">
                            <h6>State: <span class="text-success"><?php echo $order_state ?></span></h6>
                        </div>
                        <div class="col-md-4">
                            <h6>Postcode: <span class="text-success"><?php echo $order_postcode ?></span></h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <h6 class="text-info">Address Line 1: <span class="text-info"><?php echo $order_address ?></span></h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <h6 class="text-warning">Address Line 2: <span class="text-warning"><?php echo $order_address_2 ?></span></h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <form action="update_order_status.php" method="post">
                                <div class="form-group">
                                    <label>Update Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1" selected>PENDING</option>
                                        <option value="2">DISPATCHED</option>
                                        <option value="3">DELIVERED</option>
                                        <option value="4">REJECTED</option>
                                    </select>
                                    <input type="hidden" name="order_id" value="<?php echo $order_id?>">
                                    <input class="btn btn-primary btn-round" type="submit" name="submit" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row mb-3 p-3">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Item</th>
                                <th>Qty</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach (array_combine($order_items, $order_quantities) as $item => $qty) {
                                    echo "<tr><td>$item</td><td>$qty</td></tr>";
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