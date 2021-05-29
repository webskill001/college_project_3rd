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
                            category1
                        </h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                    <script>category_fetch_by_vendor('<?php echo WEBSITE_PATH; ?>');</script>
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
                                <tbody id="product_category1">
                                    <?php
                                    $get_category1 = mysqli_fetch_all(mysqli_query($conn,"select * from category1 where vendor_id='$vendor_id' order by category1_last_update desc"),MYSQLI_ASSOC);
                                    $i = 0;
                                    foreach($get_category1 as $category1){
                                        echo '<tr>
                                                <td width="5%">#'.($i+1).'</th>
                                                <td width="15%" class="text-capitalize text-center">'.$category1['category1_name'].'</td>
                                                <td>'.substr($category1['category1_desc'],0,100).'<a href="">...</a></td>
                                                <td width="10%"><a href=""><i class="fa fa-trash text-danger mx-4"></i></a></td>
                                                <td width="10%">';
                                                if($category1['category1_status_by_admin'] == 1){
                                                    echo '<a href=""><i class="fa fa-pencil text-primary mx-4"></i></a>';
                                                }else{
                                                    echo '<p class="mx-3 text-muted">NA</p>';
                                                }
                                                echo '</td>
                                                <td>';
                                                if($category1['category1_status_by_admin'] == 1){
                                                    $status = "Active";
                                                    $color = "success";
                                                    if($category1['category1_status_by_vendor'] == 1){
                                                        $status = "Deactive";
                                                        $color = "danger";
                                                    }
                                                    echo '<a href="" class="btn btn-'.$color.' btn-sm">'.$status.'</a>';
                                                }else{
                                                    echo '<p class="mx-3 text-muted">NA</p>';
                                                }
                                                echo '</td>
                                                <td>';
                                                    $status = ["Under Process","Approved","Rejected"];
                                                    if($category1['category1_status_by_admin'] == 0){
                                                        $color = "info";
                                                    }else if($category1['category1_status_by_admin'] == 1){
                                                        $color = "success";
                                                    }else{
                                                        $color = "danger";
                                                    }
                                                    echo '<a class="btn btn-'.$color.' btn-sm text-light">'.$status[$category1['category1_status_by_admin']].'</a>';

                                                echo '</td>
                                                <td width="10%">'.$category1['category1_last_update'].'</td>
                                            </tr>';
                                        $i++;        
                                    }
                                ?>

                                </tbody>
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