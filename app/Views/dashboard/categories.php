<?= $this->extend('index') ?>

<?= $this->section('content') ?>

<!-- Trigger Button -->
<a type="button" class="btn btn-secondary  text-white" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
    <i class="fa fa-plus  "></i> Add Category
</a>

<div class="x_content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">

                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width:10px;">ID</th>
                            <th>Name</th>
                            <th>Subtitle</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>


                    <tbody>

                        <?php $sno = 1; foreach ($products as $prod) :?>
                        <tr>
                            <td ><?= $sno++; ?></td>
                            <td><?= $prod['category_name']; ?></td>
                            <td><?= $prod['category_subtitle']; ?></td>
                            <td><img src="<?= base_url('uploads/categories/' . $prod['category_image']); ?>" alt="No Image" height="50px" width="80px"></td>
                            <td>
                                <a href="<?= base_url('dashboard/editProduct/' . $prod['id']); ?>" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>

                        <?php endforeach; ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="category_Form" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" name="categoryName">
                    </div>

                    <div class="mb-3">
                        <label for="categorySubtitle" class="form-label">Category Subtitle</label>
                        <input type="text" class="form-control" id="categorySubtitle" name="categorySubtitle">
                    </div>

                    <div class="mb-3">
                        <label for="categoryImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="categoryImage" name="categoryImage">
                        <small class="text-muted">*Choose a square image larger than 350×350px and smaller than
                            550×550px.</small>
                    </div>

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
const BASEURL_Categories_Add = "<?= base_url('categories_add') ?>";
console.log(BASEURL_Categories_Add);
</script>
<script src="<?= base_url('js/scripts/sp.js')?>"></script>

<?= $this->endSection() ?>