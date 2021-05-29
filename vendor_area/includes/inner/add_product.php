<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo WEBSITE_PATH ?>vendor_area/index.php">Home</a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Add</li>
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
            <section class="col-lg-10 mx-auto connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Product Name">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Product Image 1</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Product Image 2</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Product Image 3</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <label for="exampleFormControlFile11">Product Category 1</label>
                            <select class="custom-select" id="exampleFormControlFile11">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="exampleFormControlFile11" class="mt-3">Product Category 2</label>
                            <select class="custom-select" id="exampleFormControlFile11">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="form-group row mt-3">
                                <label for="exampleFormControlFile13" class="col-md-12 col-sx-12">Product
                                    Attributes</label>
                                <div class="col-md-3 col-sx-3">
                                    <input type="text" class="form-control" id="exampleFormControlFile13"
                                        aria-describedby="emailHelp" placeholder="attribute1">
                                </div>
                                <div class="col-md-3 col-sx-6">
                                    <input type="text" class="form-control" id="exampleFormControlFile13"
                                        aria-describedby="emailHelp" placeholder="attribute2">
                                </div>
                                <div class="col-md-3 col-sx-6">
                                    <input type="text" class="form-control" id="exampleFormControlFile13"
                                        aria-describedby="emailHelp" placeholder="product price">
                                </div>
                                <div class="col-md-3 col-sx-6">
                                    <a href=""><i class="fa fa-trash text-danger m-2"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Product Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="product description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-outline-info"><i class="fa fa-plus mr-1"></i> Add Attribute</button>
                        </form>
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