<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">View Category1</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo WEBSITE_PATH ?>vendor_area/index.php">Home</a></li>
                    <li class="breadcrumb-item">Category1</li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Category1
                        </h3>
                        <div class="card-tools">
                            <select id="category1_arrange" class="custom-select" onchange="category_fetch_by_vendor('<?php echo WEBSITE_PATH ?>')" aria-label="Default select example">
                                <option selected value="desc">Desending Order</option>
                                <option value="asc">Asending Order</option>
                            </select>
                        </div>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Status <br> by <br> vendor</th>
                                        <th class="text-center">Status <br> by <br> admin</th>
                                        <th class="text-center">Last Update</th>
                                    </tr>
                                </thead>
                                <tbody id="product_category1"></tbody>
                            </table>
                        </div>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->