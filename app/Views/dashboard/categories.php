<?= $this->extend('index') ?>

<?= $this->section('content') ?>

<!-- Trigger Button -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
    Add Category
</button>

<!-- Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form class="categoryForm">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" name="categoryName">
                    </div>

                    <div class="mb-3">
                        <label for="categorySubtitle" class="form-label">Category Subtitle</label>
                        <input type="text" class="form-control" id="categorySubtitle" name="categorySubtitle">
                    </div>

                    <!-- <div class="mb-3">
                        <label for="categoryImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="categoryImage" name="categoryImage">
                        <small class="text-muted">*Choose a square image larger than 350×350px and smaller than
                            550×550px.</small>
                    </div> -->

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="reset" class="btn btn-warning">Clear</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
const categoryName = document.getElementById('categoryName').value;
const categorySubtitle = document.getElementById('categorySubtitle').value;

console.log(categoryName, categorySubtitle);
</script>

<!-- <script src="<?= base_url('js/scripts/script.js')?>"></script> -->

<script src="<?= base_url('js/scripts/api.js')?>"></script>


<?= $this->endSection() ?>