<?= $this->extend('index') ?>

<?= $this->section('content') ?>



<!-- Trigger Button -->
<form id="category_Form">
    <div class="mb-3">
        <label for="categoryName" class="form-label">Category Name</label>
        <input type="text" class="form-control" id="categoryName" name="categoryName">
    </div>

    <div class="mb-3">
        <label for="categorySubtitle" class="form-label">Category Subtitle</label>
        <input type="text" class="form-control" id="categorySubtitle" name="categorySubtitle">
    </div>



    <div class="">
        <button type="submit" class="btn btn-primary">Add</button>
        <button type="reset" class="btn btn-warning">Clear</button>
    </div>
</form>


<script>
const BASEURL_Categories_Add = "<?= base_url('categories_add') ?>";
console.log(BASEURL_Categories_Add);

</script>




<script src="<?= base_url('js/scripts/sp.js')?>"></script>

<?= $this->endSection() ?>


    <!-- <div class="mb-3">
        <label for="categoryImage" class="form-label">Image</label>
        <input type="file" class="form-control" id="categoryImage" name="category_image">
        <small class="text-muted">*Choose a square image larger than 350×350px and smaller than
            550×550px.</small>
    </div> -->