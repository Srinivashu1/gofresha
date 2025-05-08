<?= $this->extend('index') ?>

<?= $this->section('content') ?>
<?php
  if (!empty($_GET['data'])) {
    $getval = json_decode(urldecode($_GET['data']), true);

    $categories = $getval['categories'];
    $subcategories = $getval['subcategories'];
    $products = $getval['products'];
    $products_variants = $getval['products_variants'];

  }
  ?>
<style>
.table-wrapper {
    overflow-x: auto;
    max-width: 100%;
}
.action-tab{
    width: 600px !important;
}
</style>
<div class="container">
    <div class="row">
        <div class="col align-items-center mb-3">
            <h5>Products / <a href="#" class="text-decoration-none"><i class="bi bi-house-fill"></i> Home</a></h5>
        </div>
        <div class="col  d-flex justify-content-end">
            <a href="<?= base_url('products') ?>" onclick="addproductview()"><button class="btn btn-outline-primary"><i
                        class="bi bi-plus-square"></i> Add New Product</button></a>

        </div>
    </div>


    <divv class="row mb-3">
        <div class="col-md-3">
            <label for="category" class="form-label">Filter by Products Category</label>
            <select class="form-select" id="category" name="category">
                <option value="">All</option>
                <?php foreach($categories as $cat): ?>
                <option value="<?= esc($cat['id']) ?>"><?= esc($cat['category_name']) ?></option>
                <?php endforeach; ?>

            </select>
        </div>

        <div class="col-md-3">
            <label for="subcategory" class="form-label">Filter by Products Sub-Category</label>
            <select class="form-select" id="subcategory" name="subcategory">
                <option selected>All</option>
                <?php foreach($subcategories as $subcat): ?>
                <option value="<?= esc($subcat['id']) ?>"><?= esc($subcat['sub_category_name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

</div>
<div class="table-wrapper" style="overflow-x: auto;">
    <table id="datatable" class="table table-bordered table-striped align-middle">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Tax ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Disc.Price</th>
                <th>Measurement</th>
                <th>Stock</th>
                <th>Availability</th>
                <th>Indicator</th>
                <th>Ratings</th>
                <th>Return</th>
                <th>Cancellation</th>
                <th class="action-tab">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php if(!empty($products)): ?>
            <?php $sno = 0; foreach($products as $prod): ?>
            <tr data-category="<?= esc($prod['category_id']) ?>" data-subcategory="<?= esc($prod['subcategory_id']) ?>">
                <td><?= esc(++$sno) ?></td>
                <td><?= esc($prod['id']) ?></td>
                <td><?= esc($prod['tax_id']) ?></td>
                <td><?= esc($prod['prod_name']) ?></td>
                <td>
                    <img src="<?= base_url("uploads/products/".$prod['main_image']) ?>" class="product-image"
                        alt="product image" height="30px" width="50px">
                </td>
                <td><?= esc($prod['tax_id']) ?></td>
                <td><?= esc($prod['tax_id']) ?></td>
                <td><?= esc($prod['tax_id']) ?></td>
                <td><?= esc($prod['tax_id']) ?></td>

                <?php $badge = ($prod['status'] == 1) ? 'bg-success' : 'bg-danger'; ?>
                <td>
                    <span class="badge <?= $badge ?> status-badge">
                        <?= $prod['status'] == 1 ? 'Available' : 'Unavailable' ?>
                    </span>
                </td>

                <?php
                $type = (int) $prod['prod_type'];
                $typeText = $type === 1 ? 'Veg' : ($type === 2 ? 'Non-veg' : 'None');
                $typeBadge = $type === 1 ? 'bg-success' : ($type === 2 ? 'bg-warning' : 'bg-danger');
            ?>
                <td>
                    <span class="badge <?= $typeBadge ?> text-dark status-badge"><?= $typeText ?></span>
                </td>

                <?php
                $rating = $prod['ratings'] ?? 0; 
                $filledStars = str_repeat('★', $rating);
                $emptyStars = str_repeat('☆', 5 - $rating);

                $returnBadgeClass = ($prod['return_status'] == 1) ? 'bg-success' : 'bg-danger';
                $returnText = ($prod['return_status'] == 1) ? 'Allowed' : 'Not Allowed';

                $cancelBadgeClass = ($prod['cancelable_status'] == 1) ? 'bg-success' : 'bg-danger';
                $cancelText = ($prod['cancelable_status'] == 1) ? 'Allowed' : 'Not Allowed';
            ?>
                <td>
                    <span class="text-warning"><?= $filledStars ?><span
                            class="text-muted"><?= $emptyStars ?></span></span>
                </td>

                <td><span class="badge <?= $returnBadgeClass ?> status-badge"><?= $returnText ?></span></td>
                <td><span class="badge <?= $cancelBadgeClass ?> status-badge"><?= $cancelText ?></span></td>
                <td class="text-center">
                    <!-- <a href="#" class="p-1 btn-info rounded" title="Open"><i class="fa fa-folder"></i></a> -->
                    <a onclick="editProduct(<?= $prod['id'] ?>)" class="p-1 btn-primary rounded text-white"
                        title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                    <!-- <a href="#" class="p-1 btn-success rounded" title="Feature"><i class="fa fa-star"></i></a> -->
                    <a href="<?= base_url('product/delete/'.$prod['id']) ?>" class="p-1 btn-danger rounded"
                        onclick="deletes('product', 5)" title="Delete"><i class="fa fa-trash"></i></a>
                    <!-- <a href="#" class="p-1 btn-warning rounded" title="Preview"><i class="fa fa-eye"></i></a> -->
                </td>

            </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr>
                <td colspan="15" class="text-center">No products found.</td>
            </tr>
            <?php endif; ?>

        </tbody>
    </table>
</div>


</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const categorySelect = document.getElementById('category');
    const subcategorySelect = document.getElementById('subcategory');
    const rows = document.querySelectorAll('table tbody tr');

    function filterRows() {
        const selectedCategory = categorySelect.value;
        const selectedSubcategory = subcategorySelect.value;

        rows.forEach(row => {
            const rowCategory = row.getAttribute('data-category');
            const rowSubcategory = row.getAttribute('data-subcategory');

            const categoryMatch = selectedCategory === rowCategory || selectedCategory === "";
            const subcategoryMatch = selectedSubcategory === rowSubcategory || selectedSubcategory ===
                "All";

            if (categoryMatch && subcategoryMatch) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    categorySelect.addEventListener('change', filterRows);
    subcategorySelect.addEventListener('change', filterRows);
});

const products = JSON.parse(localStorage.getItem('products'));
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?= $this->endSection() ?>