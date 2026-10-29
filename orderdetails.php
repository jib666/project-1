<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Order Details</h2>
        <p class="text-muted mb-0">Order #O001 for M. Martod</p>
    </div>
</div>
 
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-4"><strong>Order Date</strong><br>09-03-2026</div>
            <div class="col-md-4"><strong>Staff</strong><br>Mas Adam</div>
            <div class="col-md-4"><strong>Customer</strong><br>M. Martod</div>
        </div>
    </div>
</div>
 
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h5 class="mb-3"><i class="bi bi-cart-plus text-primary me-2"></i>Add Product</h5>
        <hr>
        <form action="" method="post" class="needs-validation" novalidate>
            <input type="hidden" name="order_num" value="O001">
            <div class="row g-3">
                <div class="col-md-8">
                    <label for="product_num" class="form-label">Product <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_num" id="product_num" class="form-select" required>
                        <option value="">Select Product</option>
                        <option value="P001">Single-Burner Gas Stove 100 (Piezo, 2,200 W) (Stock = 1021)</option>
                        <option value="P002">Gas Stove with Lighter MT100 (Stock = 566)</option>
                        <option value="P003">Lightweight Compact Gas Stove MT500 (Stock = 992)</option>
                        <option value="P004">Compact Gas Stove 500 (3,500 W, Offset Gas) (Stock = 322)</option>
                        <option value="P005">Stainless Steel Wood-Burning Bushcraft Stove (Stock = 230)</option>
                        <option value="P006">Non-Stick Cookset 500 - 2 People (15 pcs) (Stock = 1092)</option>
                        <option value="P007">Non-Stick Cookset 500 - 4 People (25 pcs) (Stock = 1112)</option>
                        <option value="P008">Stainless Cooking Set 100 - 2 People (10 pcs) (Stock = 998)</option>
                        <option value="P009">Stainless Cooking Set 100 - 4 People (18 pcs) (Stock = 223)</option>
                        <option value="P010">Stainless Trekking Cookset MT500 - 2 People (Stock = 238)</option>
                        <option value="P011">Stainless Trekking Cookset MT500 - 1 Person (Stock = 1139)</option>
                        <option value="P012">XL Non-Stick Cookset 900 - 4 People (33 pcs) (Stock = 522)</option>
                        <option value="P013">Stainless Frying Pan 500 (1.2 L, 20 cm) (Stock = 987)</option>
                        <option value="P014">1 L Stainless Steel Kettle 500 (Stock = 233)</option>
                        <option value="P015">3-in-1 Coffee Maker, Kettle & Teapot (0.6-0.8 L) (Stock = 764)</option>
                        <option value="P016">0.35 L Stainless Steel Isothermal Mug (Stock = 821)</option>
                        <option value="P017">3-Piece Stainless Cutlery Set with Box (Stock = 1062)</option>
                        <option value="P018">Folding Cutlery Fork & Spoon MT500 (Stock = 233)</option>
                        <option value="P019">Ø23 cm Plastic Camping Plate 100 (Stock = 238)</option>
                        <option value="P020">Screw-In Gas Cartridge 450 g (Stock = 1481)</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="quantity" id="quantity" type="number" class="form-control" min="1" value="1" required>
                </div>
            </div>
            <hr class="mt-4 mb-3">
            <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i>Add Product</button>
            <a href="#" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0"><i class="bi bi-table text-primary me-2"></i>Products in Order</h5>
            <a href="invoice.php" class="btn btn-success"><i class="bi bi-receipt me-1"></i>View Invoice</a>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Gas Stove with Lighter MT100</td>
                        <td>RM 99.90</td>
                        <td>1</td>
                        <td>RM 99.90</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr><td colspan="5" class="text-center">No products added to this order</td></tr>
                </tbody>
                <tfoot><tr><th colspan="3" class="text-end">Grand Total</th><th>$1,200.00</th><th></th></tr></tfoot>
            </table>
        </div>
        <a href="orders.php" class="btn btn-secondary"><i class="bi bi-arrow-left me-1"></i>Back to Orders</a>
    </div>
</div>
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>

