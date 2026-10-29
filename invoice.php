<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4 no-print">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1">Invoice</h2>
                <p class="text-muted mb-0">Order #O001</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="window.print()"><i class="bi bi-printer me-1"></i>Print</button>
            </div>
        </div>
    </div>
</div>
 
<div class="card shadow-sm" id="invoice">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>TrailForge&reg;</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O001<br>
                <strong>Date: </strong>09-03-2026
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer</strong><br>
                M. Martod<br>
                012-2239984
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff</strong><br>
                Mas Adam<br>
                adam33@gmail.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Road Bike</td>
                        <td>RM 99.90</td>
                        <td>1</td>
                        <td class="text-end">RM 99.90</td>
                    </tr>
                    <tr><td colspan="5" class="text-center">No products added to this order</td></tr>
                </tbody>
                <tfoot><tr><th colspan="4" class="text-end">Grand Total</th><th class="text-end">RM 99.90</th></tr></tfoot>
            </table>
        </div>
        <a href="orderdetails.php" class="btn btn-secondary no-print"><i class="bi bi-arrow-left me-1"></i>Back to Details</a>
    </div>
</div>
 
<style>
@media print {
    /* Hide everything except the invoice (works regardless of layout.php markup) */
    body * {
        visibility: hidden;
    }
    #invoice, #invoice * {
        visibility: visible;
    }
    #invoice {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        border: none !important;
        box-shadow: none !important;
    }

    .no-print {
        display: none !important;
    }

    /* Keep table header colors and striping in print */
    * {
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }

    @page {
        margin: 1cm;
    }
}
</style>
 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>