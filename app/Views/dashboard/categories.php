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
<a type="button" class="btn btn-secondary  text-white" data-bs-toggle="modal" data-bs-target="#CategoryModal">
    <i class="fa fa-plus  "></i> Add Category
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
                            <th style="width:100px;">Name</th>
                            <th>Subtitle</th>
                            <th>Image</th>
                            <th>Actions</th>


                        </tr>
                    </thead>


                    <tbody>

                        <?php $sno = 1; foreach ($categories as $category) :?>
                        <tr>
                            <td><?= $sno++; ?></td>
                            <td><?= $category['category_name']; ?></td>
                            <td><?= $category['category_subtitle']; ?></td>
                            <td><img src="<?= base_url('uploads/categories/' . $category['category_image']); ?>"
                                    alt="No Image" height="30px" width="50px"></td>
                            <td>
                                <a href="#" class="edit-category-btn fs-4" data-bs-toggle="modal"
                                    data-bs-target="#CategoryModal" data-id="<?= $category['id']; ?>"
                                    data-name="<?= $category['category_name']; ?>"
                                    data-subtitle="<?= $category['category_subtitle']; ?>"
                                    data-image="<?= base_url('uploads/categories/' . $category['category_image']); ?>">
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

<div class="modal fade" id="CategoryModal" tabindex="-1" aria-labelledby="CategoryModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="CategoryModalLabel">Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="category_Form" enctype="multipart/form-data" method="post">
                    <!-- Hidden input for ID -->
                    <input type="hidden" id="categoryId" name="categoryId">

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
                        <small class="text-muted">*Choose a square image larger than 350×350px and smaller than 550×550px.</small>
                        <div class="mt-2">
                            <img id="previewImage" src="#" alt="Current Image" style="max-height: 100px; display:none;" />
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
    const editButtons = document.querySelectorAll('.edit-category-btn');

    editButtons.forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const name = this.getAttribute('data-name');
            const subtitle = this.getAttribute('data-subtitle');
            const image = this.getAttribute('data-image');

            document.getElementById('categoryId').value = id;
            document.getElementById('categoryName').value = name;
            document.getElementById('categorySubtitle').value = subtitle;

            const preview = document.getElementById('previewImage');
            if (image) {
                preview.src = image;
                preview.style.display = 'block';
            } else {
                preview.style.display = 'none';
            }

            document.querySelector('#CategoryModal .modal-title').textContent =
                'Edit Category';
            document.querySelector('#CategoryModal button[type="submit"]').textContent =
                'Update';
        });
    });
});
</script>
<div class="loader" id="loader"></div>
  <div id="content"></div>

  <script>
    const loader = document.getElementById('loader');
    const content = document.getElementById('content');

    function fetchData() {
      loader.style.display = 'block'; // Show loader

      // Simulate internet fetch delay (replace with real URL)
      fetch('http://192.168.1.6/Gofresha/public/categoriespage?')
        .then(res => res.json())
    
        .finally(() => {
          loader.style.display = 'none'; // Hide loader
        });
    }

    // Start fetching when page loads
    window.onload = fetchData;
  </script>


<script>
const BASEURL_Categories_Add = "<?= base_url('categories_add') ?>";
console.log(BASEURL_Categories_Add);
</script>
<script src="<?= base_url('js/scripts/sp.js')?>"></script>

<?= $this->endSection() ?>