<?= $this->extend('index') ?>

<?= $this->section('content') ?>

<?php
  if (!empty($_GET['data'])) {
    $getval = json_decode(urldecode($_GET['data']), true);

    $subcategories = $getval['subCategory'];
    $categories = $getval['categories'];
    $product = $getval['products'];
    $product_variants = $getval['product_variants'];

    // print_r($product_variants);

  }
  ?>

<h3>Edit Product</h3>
<form id="product_form" enctype="multipart/form-data">
    <input type="hidden" name="prod_id" value="<?=  $product['id']?>">
    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Product Name <span class="text-danger fs-5">*</span></label>
            <input type="text" class="form-control" name="product_name" required placeholder="Product Name"
                value="<?php echo $product['prod_name']; ?>">
        </div>
        <div class="col-md-3 mt-3">
            <label class="form-label">Type</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="qtytype" value="1"
                    <?php echo ($product['qty_type'] == 1) ? 'checked' : ''; ?>>
                <label class="form-check-label">Packet</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="qtytype" value="2"
                    <?php echo ($product['qty_type'] == 2) ? 'checked' : ''; ?>>
                <label class="form-check-label">Loose</label>
            </div>
        </div>

        <div class="col-md-3 mt-3">
            <label class="form-label">Tax</label>
            <select class="form-select" name="tax">
                <option value="">Select Tax</option>
                <option value="14" <?php echo ($product['tax_id'] == 14) ? 'selected' : ''; ?>>IGST - 18%</option>
                <option value="15" <?php echo ($product['tax_id'] == 15) ? 'selected' : ''; ?>>CGST + SGST - 18%
                </option>
                <option value="16" <?php echo ($product['tax_id'] == 16) ? 'selected' : ''; ?>>SGST - 9%</option>
                <option value="17" <?php echo ($product['tax_id'] == 17) ? 'selected' : ''; ?>>CGST - 9%</option>
            </select>
        </div>

    </div>

    <div id="variantContainer">
        <?php foreach ($product_variants as $key => $variant): ?>
        <div class="row mb-5 variant-row">
            <!-- Add hidden ID for server-side reference -->
            <input name="variantexist[]" value="<?= $variant['id'] ?>" hidden>

            <div class="col-md-2">
                <label class="form-label">Measurement <span class="text-danger fs-5">*</span></label>
                <?php $measure_value = filter_var($variant['measure'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION); ?>
                <input type="number" class="form-control" name="measurement[]" value="<?= esc($measure_value) ?>">
            </div>

            <?php $meas_unit = preg_replace('/[^a-zA-Z]/', '', $variant['measure']); ?>

            <div class="col-md-1 mt-2">
                <label class="form-label">Unit</label>
                <select class="form-select" name="measureUnit[]">
                    <?php
                $units = ['kg', 'gm', 'ltr', 'ml', 'pack', 'pcs', 'cm', 's', 'm', 'l', 'xl', 'xs', 'xxl', 'xxxl'];
                foreach ($units as $unit):
                ?>
                    <option value="<?= $unit ?>" <?= ($meas_unit === $unit) ? 'selected' : '' ?>><?= esc($unit) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-2">
                <label class="form-label">Price <span class="text-danger fs-5">*</span></label>
                <input type="number" class="form-control" name="prices[]" placeholder="₹"
                    value="<?= $variant['price'] ?? '' ?>">
            </div>

            <div class="col-md-2 mt-2">
                <label class="form-label">Discount type:</label>
                <select name="discount_type[]" class="form-select">
                    <option value="1" <?= $variant['disc_type'] == 1 ? 'selected' : '' ?>>Flat</option>
                    <option value="2" <?= $variant['disc_type'] == 2 ? 'selected' : '' ?>>Percentage</option>
                    <option value="0" <?= $variant['disc_type'] == 0 ? 'selected' : '' ?>>No discount</option>
                </select>
            </div>

            <div class="col-md-2 mt-2">
                <label class="form-label">Discounted Price (₹):</label>
                <input type="number" class="form-control" name="discount_price[]"
                    value="<?= $variant['disc_price'] ?? '' ?>">
            </div>

            <div class="col-md-1">
                <label class="form-label">Stock <span class="text-danger fs-5">*</span></label>
                <?php $stock_value = filter_var($variant['stock'], FILTER_SANITIZE_NUMBER_INT); ?>
                <input type="number" class="form-control" name="stock[]" value="<?= $stock_value  ?>" required>
            </div>

            <div class="col-md-1 mt-2">
                <label class="form-label">Unit</label>
                <select class="form-select" name="stock_unit[]">
                    <?php
                $stock_unit =  preg_replace('/[^a-zA-Z]/', '', $variant['stock']); 

                foreach ($units as $unit):
                ?>
                    <option value="<?= $unit ?>" <?= ($variant['stock'] === $unit) ? 'selected' : '' ?>>
                        <?= esc($unit) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-2 mt-2">
                <label class="form-label">SKU</label>
                <input type="text" class="form-control" name="sku_code[]" value="<?= $variant['sku_code'] ?? '' ?>">
            </div>

            <div class="col-md-2 mt-2">
                <label class="form-label">HSN Code</label>
                <input type="text" class="form-control" name="hsn_code[]" value="<?= $variant['hsn_code'] ?? '' ?>">
            </div>

            <div class="col-md-2 mt-2">
                <label class="form-label">Status</label>
                <select class="form-select" name="status[]">
                    <option value="1" <?= ($variant['status'] == 1) ? 'selected' : '' ?>>Available</option>
                    <option value="0" <?= ($variant['status'] == 0) ? 'selected' : '' ?>>Unavailable</option>
                </select>
            </div>

            <div class="col-md-5 mt-2">
                <label class="form-label">Variant Image</label>
                <input type="file" class="form-control" name="variant_images[]">
            </div>

            <div class="col-md-1 d-flex align-items-end">
                <button type="button" class="btn btn-outline-danger remove-btn rounded-circle"><i class="bi bi-x"></i></button>
            </div>
        </div>
        <?php endforeach; ?>

        <div id="variantRowsContainer"></div>
        <button type="button" id="addVariantRowBtn" class="btn btn-primary">Add Variant</button>


    </div>



    <hr>


    <div class="mb-4">
        <label class="form-label">FSSAI Lic. No.</label>
        <input type="text" class="form-control" name="fssai_no" placeholder="Enter no."
            value="<?php echo $product['fssai_no'] ?>">
    </div>

    <div class="row mb-3">
        <div class="col-md-4">
            <label class="form-label">Category</label>
            <select class="form-select" name="category" id="mainCategory">
                <option>--Select Category--</option>
                <?php foreach ($categories as $category) : ?>
                <option <?= ($product['category_id'] ==  $category['id']) ? 'selected' : '' ?>
                    value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Sub Category</label>
            <select class="form-select" name="sub_category" id="subCategory">
                <option value="">--Select Sub Category--</option>
                <?php foreach ($subcategories as $subcategory) : ?>
                <option <?= ($product['subcategory_id'] ==  $subcategory['id']) ? 'selected' : '' ?>
                    value="<?= $subcategory['id'] ?>" data-main-category="<?= $subcategory['main_category'] ?>"
                    style="display:none;">
                    <?=  $subcategory['sub_category_name'] ?>
                </option>
                <?php endforeach; ?>
            </select>


        </div>
        <div class="col-md-4">
            <label class="form-label">Product Type</label>
            <select class="form-select" name="productType">
                <option>--Select Type--</option>
                <option <?= ($product['prod_type'] == 1) ? 'selected' : '' ?> value="1"> veg</option>
                <option <?= ($product['prod_type'] == 2) ? 'selected' : '' ?> value="2">Non-Veg</option>
                <option <?= ($product['prod_type'] == 0) ? 'selected' : '' ?>value="0">No type</option>
            </select>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Manufacturer</label>
            <input type="text" class="form-control" name="manufacturer" value="<?php echo $product['manufacturer'] ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Made In</label>
            <input type="text" class="form-control" name="made_in" value="<?php echo $product['made_in'] ?>">
        </div>
    </div>

    <div class="row mb-3 ms-4">
        <div class="col-md-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" name="returnable" value="1"
                <?php echo ($product['return_status'] == 1) ? 'checked' : ''; ?>>
            <label class="form-check-label">Is Returnable?</label>
        </div>
        <div class="col-md-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" name="cancelable" value="1"
                <?php echo ($product['cancelable_status'] == 1) ? 'checked' : ''; ?>>
            <label class="form-check-label">Is Cancel-able?</label>
        </div>
        <div class="col-md-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" name="cod_allowed" value="1"
                <?php echo ($product['cod_allowed'] == 1) ? 'checked' : ''; ?>>
            <label class="form-check-label">Is COD Allowed?</label>
        </div>
        <div class="col-md-3">
            <label class="form-label">Total Allowed Quantity</label>
            <input type="number" class="form-control" name="total_quantity" placeholder="Leave blank if unlimited">
        </div>
    </div>
    <div class="mb-3 col-md-6">
        <div class="col-md-4">
            <label class="form-label">Main Image</label><br>
            <img id="preview_main" src="<?= base_url('uploads/products/' . $product['main_image']) ?>" width="150"
                height="80" alt="Main Image">
        </div>

        <div class="col-md-8">
            <label>Change Image</label>
            <label for="main_image"
                style="border: 2px dotted #ccc; padding: 20px; text-align: center; display: block; border-radius: 10px; cursor: pointer;">
                <strong>Click to Upload</strong><br>
                <span class="text-muted">Main Image (jpg, png, etc.)</span>
            </label>
            <input type="file" class="form-control mt-2" name="main_image" id="main_image" hidden accept="image/*"
                onchange="showPreview(event, 'preview_main')">
        </div>
    </div>

    <div class="mb-3 col-md-6">
        <div class="col-md-4">
            <label class="form-label">Other Images of the Product</label><br>
            <img id="preview_other" src="<?= base_url('uploads/products/' . $product['other_images']) ?>" width="150"
                height="80" alt="Other Image">
        </div>

        <div class="col-md-8">
            <label>Change Image</label>
            <label for="other_images"
                style="border: 2px dotted #ccc; padding: 20px; text-align: center; display: block; border-radius: 10px; cursor: pointer;">
                <strong>Click to Upload</strong><br>
                <span class="text-muted">Other Image (jpg, png, etc.)</span>
            </label>
            <input type="file" class="form-control mt-2" name="other_images[]" id="other_images" hidden accept="image/*"
                onchange="showPreview(event, 'preview_other')">
        </div>
    </div>




    <div class="mb-3 ">
        <label class="form-label">Size Chart</label>
        <input type="file" class="form-control" name="size_chart">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description :</label>
        <textarea class="form-control" id="description" rows="3"
            name="product_description"><?= esc($product['description']) ?></textarea>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Shipping Policy :</label>
        <textarea class="form-control" id="description" rows="3"
            name="shippingPolicy"><?= esc($product['shipping_policy']) ?> </textarea>
    </div>

    <button type="submit" class="btn btn-primary" onclick="addproducts()">Submit</button>
</form>


<script>
document.getElementById('mainCategory').addEventListener('change', function() {
    var selectedText = this.options[this.selectedIndex].text;
    var subCategorySelect = document.getElementById('subCategory');
    var options = subCategorySelect.options;

    subCategorySelect.value = '';
    for (var i = 0; i < options.length; i++) {
        var option = options[i];
        if (!option.dataset.mainCategory) continue;

        if (option.dataset.mainCategory === selectedText) {
            option.style.display = 'block';
        } else {
            option.style.display = 'none';
        }
    }
});


function showPreview(event, previewId) {
    const input = event.target;
    const reader = new FileReader();
    reader.onload = function() {
        const preview = document.getElementById(previewId);
        preview.src = reader.result;
    };
    if (input.files && input.files[0]) {
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<script>
const variantContainer = document.getElementById('variantContainer');

variantContainer.addEventListener('click', function(e) {
    // ADD VARIANT
    if (e.target.closest('#addVariantBtn')) {
        const lastRow = variantContainer.querySelector('.variant-row:last-of-type');
        const newRow = lastRow.cloneNode(true);

        newRow.querySelectorAll('input').forEach(input => {
            if (['measurement[]', 'prices[]', 'discount_price[]', 'stock[]', 'sku_code[]', 'hsn_code[]']
                .includes(input.name)) {
                input.value = '';
            }
            if (input.type === 'file') input.value = null;
        });

        newRow.querySelectorAll('select').forEach(select => {
            select.selectedIndex = 0;
        });

        const addBtn = newRow.querySelector('.add-button');
        if (addBtn) addBtn.classList.add('d-none');

        const removeBtn = newRow.querySelector('.remove-btn');
        removeBtn.classList.remove('d-none');

        variantContainer.appendChild(newRow);
    }

    if (e.target.classList.contains('remove-btn') || e.target.closest('.remove-btn')) {
        const row = e.target.closest('.variant-row');

        const variantIdInput = row.querySelector('input[name="variant_id[]"]');
        if (variantIdInput) {
            const deletedFlag = document.createElement('input');
            deletedFlag.type = 'hidden';
            deletedFlag.name = 'deleted_variants[]';
            deletedFlag.value = variantIdInput.value;
            row.appendChild(deletedFlag);

            row.style.display = 'none';
        } else {
            row.remove();
        }
    }
});
</script>

<script>
const variantRowsContainer = document.getElementById('variantRowsContainer');
const addVariantRowBtn = document.getElementById('addVariantRowBtn');

function createVariantRow() {
    const row = document.createElement('div');
    row.classList.add('row', 'mb-5', 'variant-row');

    row.innerHTML = `
        <div class="col-md-2">
            <label class="form-label">Measurement <span class="text-danger fs-5">*</span></label>
            <input type="number" class="form-control" name="measurement[]" placeholder="Enter (e.g., 1.5)">
        </div>
        <div class="col-md-1 mt-2">
            <label class="form-label">Unit</label>
            <select class="form-select" name="measureUnit[]">
                ${getUnitOptions()}
            </select>
        </div>
        <div class="col-md-2">
            <label class="form-label">Price <span class="text-danger fs-5">*</span></label>
            <input type="number" class="form-control" name="prices[]" placeholder="₹">
        </div>
        <div class="col-md-2 mt-2">
            <label class="form-label">Discount type:</label>
            <select name="discount_type[]" class="form-select">
                <option value="1">Flat</option>
                <option value="2">Percentage</option>
                <option selected value="0">No discount</option>
            </select>
        </div>
        <div class="col-md-2 mt-2">
            <label class="form-label">Discounted Price (₹):</label>
            <input type="number" class="form-control" name="discount_price[]" placeholder="">
        </div>
        <div class="col-md-1">
            <label class="form-label">Stock <span class="text-danger fs-5">*</span></label>
            <input type="number" class="form-control" name="stock[]" value="0" required>
        </div>
        <div class="col-md-1 mt-2">
            <label class="form-label">Unit</label>
            <select class="form-select" name="stock_unit[]">
                ${getUnitOptions()}
            </select>
        </div>
        <div class="col-md-2 mt-2">
            <label class="form-label">SKU</label>
            <input type="text" class="form-control" name="sku_code[]" placeholder="Enter SKU">
        </div>
        <div class="col-md-2 mt-2">
            <label class="form-label">HSN Code</label>
            <input type="text" class="form-control" name="hsn_code[]" placeholder="Enter HSN">
        </div>
        <div class="col-md-2 mt-2">
            <label class="form-label">Status</label>
            <select class="form-select" name="status[]">
                <option value="1">Available</option>
                <option value="0">Unavailable</option>
            </select>
        </div>
        <div class="col-md-5 mt-2">
            <label class="form-label">Variant Image</label>
            <input type="file" class="form-control" name="variant_images[]">
        </div>
        <div class="col-md-1 d-flex align-items-end">
            <button type="button" class="btn btn-outline-danger remove-btn rounded-circle"><i class="bi bi-x"></i></button>
        </div>
    `;

    variantRowsContainer.appendChild(row);
}

function getUnitOptions() {
    const units = ["kg", "gm", "ltr", "ml", "pack", "pcs", "cm", "s", "M", "L", "XL", "XS", "XXL", "XXXL"];
    return units.map(u => `<option value="${u}">${u}</option>`).join('');
}

addVariantRowBtn.addEventListener('click', () => {
    createVariantRow();
});

variantRowsContainer.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-btn')) {
        e.target.closest('.variant-row').remove();
    }
});
</script>




<script src="<?= base_url('js/scripts/sp.js')?>"></script>


<?= $this->endSection() ?>