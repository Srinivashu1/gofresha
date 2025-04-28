<?= $this->extend('index') ?>

<?= $this->section('content') ?>
<style>
    .green{
        background-color: #95C897;
        color: #ffff;
        text-align: center;
        border-radius: 5px;
    }
    .pending{
        background-color: #DCAA81;
        color: white;
        text-align: center;
        border-radius: 5px;
    }
</style>
<!-- Bootstrap -->
<div class="maincontent" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Client</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Card<small>details</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Bill No</th>
                                                <th>user Id</th>
                                                <th>Card Id</th>
                                                <th>Card</th>
                                                <th>User Name</th>
                                                <th>Advance Amount</th>
                                                <th>Total Amount</th>
                                                <th>Pending Amount</th>
                                                <th>Mobile No</th>
                                                
                                                
                                                <th>Order Status</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>


                                        <tbody>
                                           


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>


<?= $this->endSection() ?>