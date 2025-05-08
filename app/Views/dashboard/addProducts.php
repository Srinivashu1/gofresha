<?= $this->extend('index') ?>

<?= $this->section('content') ?>

<?php
  if (!empty($_GET['data'])) {
    $getval = json_decode(urldecode($_GET['data']), true);

    $subcategories = $getval['subCategory'];
    $categories = $getval['categories'];
  }
  ?>

<h3>Add Product</h3>
<form id="product_form" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Product Name <span class="text-danger fs-5">*</span></label>
            <input type="text" class="form-control" name="product_name" required placeholder="Product Name"
                value="Test">
        </div>
        <div class="col-md-3 mt-3">
            <label class="form-label">Type</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="qtytype" value="1" checked>
                <label class="form-check-label">Packet</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="qtytype" value="2">
                <label class="form-check-label">Loose</label>
            </div>
        </div>
        <div class="col-md-3  mt-3">
            <label class="form-label">Tax</label>
            <select class="form-select" name="tax">
                <option>Select Tax</option>
                <option value="14">IGST - 18%</option>
                <option selected value="15">CGST + SGST - 18%</option>
                <option value="16">SGST - 9%</option>
                <option value="17">CGST - 9%</option>
            </select>
        </div>
    </div>

    <div id="variantContainer">
        <!-- Variant Row Template -->
        <div class="row mb-5 variant-row">
            <div class="col-md-2 ">
                <label class="form-label">Measurement <span class="text-danger fs-5">*</span> </label>
                <input type="number" class="form-control" name="measurement[]" value="45"
                    placeholder="Enter  (e.g., 1.5)">
            </div>
            <div class="col-md-1  mt-2">
                <label class="form-label">Unit</label>
                <select class="form-select" name="measureUnit[]">
                    <option value="kg">kg</option>
                    <option value="gm">gm</option>
                    <option value="ltr">ltr</option>
                    <option value="ml">ml</option>
                    <option value="pack">pack</option>
                    <option value="pcs">pcs</option>
                    <option value="cm">cm</option>
                    <option value="s">s</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XS">XS</option>
                    <option value="XXL">XXL</option>
                    <option value="XXXL">XXXL</option>
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-label">Price <span class="text-danger fs-5">*</span></label>
                <input type="number" class="form-control" name="prices[]" placeholder="₹" value="45">
            </div>
            <div class="col-md-2 mt-2">
                <label class="form-label">Discount type:</label>
                <select name="discount_type[]" class="form-select" id="">
                    <option value="1">Flat</option>
                    <option value="2">Percentage</option>
                    <option selected value="0">No discount</option>
                </select>

            </div>
            <div class="col-md-2  mt-2">
                <label class="form-label">Discounted Price (₹):</label>
                <input type="number" class="form-control" name="discount_price[]" placeholder="" value="45">
            </div>
            <div class="col-md-1">
                <label class="form-label">Stock <span class="text-danger fs-5">*</span></label>
                <input type="number" class="form-control" name="stock[]" value="0" required>
            </div>
            <div class="col-md-1  mt-2">
                <label class="form-label">Unit</label>
                <select class="form-select" name="stock_unit[]">
                    <option value="kg">kg</option>
                    <option value="gm">gm</option>
                    <option value="ltr">ltr</option>
                    <option value="ml">ml</option>
                    <option value="pack">pack</option>
                    <option value="pcs">pcs</option>
                    <option value="cm">cm</option>
                    <option value="s">s</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XS">XS</option>
                    <option value="XXL">XXL</option>
                    <option value="XXXL">XXXL</option>
                </select>
            </div>

            <div class="col-md-1 add-button  mt-2">
                <label class="form-label">Variation</label>
                <div class="ms-2">
                    <button type="button" id="addVariantBtn" class="btn btn-outline-primary ">+</button>

                </div>
            </div>
            <div class="col-md-2 mt-2">
                <label class="form-label">SKU</label>
                <input type="text" class="form-control" name="sku_code[]" placeholder="Enter SKU"
                    value="LQMFQM322LM1DR">
            </div>
            <div class="col-md-2 mt-2">
                <label class="form-label">HSN Code</label>
                <input type="text" class="form-control" name="hsn_code[]" placeholder="Enter HSN" value="AOEAOFM3224KD">
            </div>
            <div class="col-md-2  mt-2">
                <label class="form-label">Status</label>
                <select class="form-select" name="status[]">
                    <option value="1">Available</option>
                    <option value="0">Unavailable</option>
                </select>
            </div>
            <div class="col-md-5 mt-2">
                <label class="form-label">Variant Image (Use a square image between 350×350 and 550×550 pixels)</label>
                <input type="file" class="form-control" name="variant_images[]">
            </div>
            <div class="col-md-1 d-flex align-items-end">
                <button type="button" class="btn btn-danger remove-btn d-none">-</button>
            </div>
        </div>
    </div>



    <hr>


    <div class="mb-4">
        <label class="form-label">FSSAI Lic. No.</label>
        <input type="text" class="form-control" name="fssai_no" placeholder="Enter no." value="fssai_no">
    </div>

    <div class="row mb-3">
        <div class="col-md-4">
            <label class="form-label">Category</label>
            <select class="form-select" name="category" id="mainCategory">
                <option>--Select Category--</option>
                <?php foreach ($categories as $category) : ?>
                <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Sub Category</label>
            <select class="form-select" name="sub_category" id="subCategory">
                <option value="">--Select Sub Category--</option>
                <?php foreach ($subcategories as $subcategory) : ?>
                <option value="<?= $subcategory['id'] ?>" data-main-category="<?= $subcategory['main_category'] ?>"
                    style="display:none;">
                    <?= $subcategory['sub_category_name'] ?>
                </option>
                <?php endforeach; ?>
            </select>


        </div>
        <div class="col-md-4">
            <label class="form-label">Product Type</label>
            <select class="form-select" name="productType">
                <option>--Select Type--</option>
                <option selected value="1">Veg</option>
                <option value="2">Non-Veg</option>
                <option value="0">No type</option>
            </select>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Manufacturer</label>
            <input type="text" class="form-control" name="manufacturer" value="Test">
        </div>
        <div class="col-md-6">
            <label class="form-label">Made In</label>
            <input type="text" class="form-control" name="made_in" value="India">
        </div>
    </div>

    <div class="row mb-3 ms-4">
        <div class="col-md-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" name="returnable" value="1" checked>
            <label class="form-check-label">Is Returnable?</label>
        </div>
        <div class="col-md-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" name="cancelable" value="1" checked>
            <label class="form-check-label">Is Cancel-able?</label>
        </div>
        <div class="col-md-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" name="cod_allowed" value="1" checked>
            <label class="form-check-label">Is COD Allowed?</label>
        </div>
        <div class="col-md-3">
            <label class="form-label">Total Allowed Quantity</label>
            <input type="number" class="form-control" name="total_quantity" placeholder="Leave blank if unlimited">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Main Image *</label>
        <input type="file" class="form-control" name="main_image">
    </div>

    <div class="mb-3">
        <label class="form-label">Other Images of the Product</label>
        <input type="file" class="form-control" name="other_images[]" multiple>
    </div>

    <div class="mb-3">
        <label class="form-label">Size Chart</label>
        <input type="file" class="form-control" name="size_chart">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description :</label>
        <textarea class="form-control" id="description" rows="3" name="product_description"></textarea>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Shipping Policy :</label>
        <textarea class="form-control" id="description" rows="3" name="shippingPolicy"></textarea>
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



const variantContainer = document.getElementById('variantContainer');
const addVariantBtn = document.getElementById('addVariantBtn');

addVariantBtn.addEventListener('click', () => {
    const lastRow = variantContainer.querySelector('.variant-row:last-of-type');
    const newRow = lastRow.cloneNode(true);

    newRow.querySelectorAll('input').forEach(input => {
        input.value = '';
    });

    newRow.querySelectorAll('select').forEach(select => {
        select.selectedIndex = 0;
    });

    newRow.querySelector('.remove-btn').classList.remove('d-none');
    const addBtn = newRow.querySelector('.add-button');
    if (addBtn) addBtn.classList.add('d-none');

    variantContainer.appendChild(newRow);
});

variantContainer.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-btn') || e.target.closest('.remove-btn')) {
        e.target.closest('.variant-row').remove();
    }
});
</script>


<script src="<?= base_url('js/scripts/sp.js')?>"></script>


<?= $this->endSection() ?>