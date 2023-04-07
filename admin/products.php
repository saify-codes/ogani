<?php include 'includes/header.inc.php' ?>
<?php include '../db/productModel.php' ?>


<div class="content">
    <div class="row">
        <div class="col">
            <form action="add_product.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Product name</label>
                            <input type="text" class="form-control" placeholder="Product name" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" placeholder="Product price" name="price" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Qty</label>
                            <input type="number" class="form-control" placeholder="Qty." min="1" name="qty" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" class="form-control" placeholder="Category" name="category" required>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="file" name="file" accept="image/*" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Decscription</label>
                            <textarea class="form-control" placeholder="Desc..." name="description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Allergy</label>
                            <textarea class="form-control" placeholder="Allergy" name="allergy"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" name="submit" class="btn btn-primary btn-round">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Products</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Allergy</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $products = Product::getAllProducts();
                                if (empty($products)) {
                                    echo '<tr><td class="text-center" colspan="4">No records...</td></tr>';
                                } else {
                                    $counter = 1;
                                    foreach ($products as $product) {
                                        echo "<tr>
                                                <td>" . $counter++ . "</td>
                                                <td>" . $product[1] . "</td>
                                                <td>" . $product[2] . "</td>
                                                <td>" . $product[3] . "</td>
                                                <td><img width='50' src='../storage/" . $product[4] . "'></td>
                                                <td>" . $product[5] . "</td>
                                                <td>" . (empty($product[6]) ? 'None' : $product[6]) . "</td>
                                                <td>" . (empty($product[7]) ? 'None' : $product[7]) . "</td>
                                                <td><a class='btn btn-danger' href='delete_product.php?id=" . $product[0] . "'><i class='fa-solid fa-trash'></i></a></td>
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