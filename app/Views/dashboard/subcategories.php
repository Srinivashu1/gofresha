<?= $this->extend('index') ?>

<?= $this->section('content') ?>

<style>
    .loader {
      margin: 200px auto;
      height: 50px;
      width: 50px;
      border-radius: 50%;
      border: 5px solid gray;
      border-top-color: #79cbda;
      animation: rotate 1s infinite linear;
      display: none; /* Hide initially */
    }

    @keyframes rotate {
      100% {
        transform: rotate(360deg);
      }
    }
  </style>
<!-- Trigger Button -->
<a type="button" class="btn btn-secondary  text-white" data-bs-toggle="modal" data-bs-target="#SubCategoryModal">
    <i class="fa fa-plus  "></i> Add SubCategory
</a>
<div class="loader"></div>

<div class="x_content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">

                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                            <th style="width:10px;">ID</th>
                            <th style="width:100px;">Main Category </th>
                            <th style="width:100px;">Sub Category</th>
                            <th>Sub Category title</th>
                            <th>Image</th>
                            <th>Actions</th>


                        </tr>
                    </thead>

                   

                    <tbody>

                        <?php $sno = 1; foreach ($subcategories as $subcategory) :?>
                        <tr>
                            <td><?= $sno++; ?></td>
                            <td><?= $subcategory['main_category']; ?></td>
                            <td><?= $subcategory['sub_category_name']; ?></td>
                            <td><?= $subcategory['sub_category_subtitle']; ?></td>
                            <td><img src="<?= base_url('uploads/categories/' . $subcategory['sub_category_image']); ?>"    alt="No Image" height="30px" width="50px"></td>
                            <td>
                                <a href="#" class="edit-subcategory-btn fs-4" data-bs-toggle="modal"
                                    data-bs-target="#SubCategoryModal" data-id="<?= $subcategory['id']; ?>"
                                    data-mainCategory="<?= $subcategory['main_category']; ?>"
                                    data-subcategory = "<?= $subcategory['sub_category_name']; ?>"

                                    data-subcategorytitle="<?= $subcategory['sub_category_subtitle']; ?>"
                                    data-image="<?= base_url('uploads/categories/' . $subcategory['sub_category_image']); ?>">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>

                            </td>
                        </tr>
                        
                        <?php endforeach; ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="SubCategoryModal" tabindex="-1" aria-labelledby="SubCategoryModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="SubCategoryModalLabel">Sub Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="subCategory_Form" enctype="multipart/form-data">
                    <!-- Hidden input for ID -->
                    <input type="hidden" id="subCategoryId" name="subCategoryId">

                    <div class="mb-3">
                        <label for="subCategoryName" class="form-label">Main Category</label>
                        <select name="mainCategory" id="mainCategory" class="form-select">
                            <option>Select Main Category</option>
                            <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category['category_name']; ?>"><?= $category['category_name']; ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>

                    <div class="mb-3">
                        <label for="subCategory" class="form-label">Sub Category Name</label>
                        <input type="text" class="form-control" id="subCategory" name="subCategory">
                    </div>

                    <div class="mb-3">
                        <label for="subCategorySubtitle" class="form-label">Sub Category Subtitle</label>
                        <input type="text" class="form-control" id="subCategorySubtitle" name="subCategorySubtitle">
                    </div>

                    <div class="mb-3">
                        <label for="subCategoryImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="subCategoryImage" name="subCategoryImage">
                        <small class="text-muted">*Choose a square image larger than 350×350px and smaller than
                            550×550px.</small>
                        <div class="mt-2">
                            <img id="previewImage" src="#" alt="Current Image"
                                style="max-height: 100px; display:none;" />
                        </div>
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
document.addEventListener('DOMContentLoaded', function() {
    const editButtons = document.querySelectorAll('.edit-subcategory-btn');

    // Set up the edit button functionality
    editButtons.forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const mainCategory = this.getAttribute('data-mainCategory');
            const subcategory = this.getAttribute('data-subcategory');
            const subtitle = this.getAttribute('data-subcategorytitle');
            const img = this.getAttribute('data-image');

            document.getElementById('subCategoryId').value = id;
            document.getElementById('mainCategory').value = mainCategory;
            document.getElementById('subCategory').value = subcategory;
            document.getElementById('subCategorySubtitle').value = subtitle;

            const preview = document.getElementById('previewImage');
            if (img) {
                preview.src = img;
                preview.style.display = 'block';
            } else {
                preview.style.display = 'none';
            }

            document.querySelector('#SubCategoryModal .modal-title').textContent = 'Edit SubCategory';
            document.querySelector('#SubCategoryModal button[type="submit"]').textContent = 'Update';
        });
    });

    // Handle the form submission
    const form = document.getElementById('subCategory_Form');
    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent normal form submission

        const formData = new FormData(form);

        // Show loader before sending the request
        document.querySelector('.loader').style.display = 'block';

        fetch('<?= base_url('your-update-route-here'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            document.querySelector('.loader').style.display = 'none'; // Hide loader after response

            if (data.success) {
                // Update the table with new data if the update was successful
                const row = document.querySelector(`[data-id="${data.id}"]`).closest('tr');
                row.querySelector('td:nth-child(2)').textContent = data.main_category;
                row.querySelector('td:nth-child(3)').textContent = data.sub_category_name;
                row.querySelector('td:nth-child(4)').textContent = data.sub_category_subtitle;
                const imgCell = row.querySelector('td:nth-child(5) img');
                imgCell.src = data.image;
                
                // Close the modal
                $('#SubCategoryModal').modal('hide');
            } else {
                alert('Error updating subcategory.');
            }
        })
        .catch(error => {
            document.querySelector('.loader').style.display = 'none';
            alert('Error: ' + error.message);
        });
    });
});

</script>


<script src="<?= base_url('js/scripts/sp.js')?>"></script>

<?= $this->endSection() ?>