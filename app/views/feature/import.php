<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Burst Message</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?= BASEURL; ?>/feature/createburstmessage" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="msidn">MSIDN</label>
                                <input type="number" class="form-control" id="msidn" placeholder="Enter MSIDN" name="MSIDN">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <input type="text" class="form-control" id="message" placeholder="Message" name="Message">
                            </div>
                            <div class="form-group">
                                <label for="JobId">JobId</label>
                                <input type="text" class="form-control" id="message" placeholder="Message" name="JobId">
                            </div>
                            <div class="col-sm-12 mt-2">
                                <?php
                                Flasher::flash();
                                ?>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Import File to Burst Message</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form enctype="multipart/form-data" action="<?= BASEURL; ?>/feature/uploadburstmessagefromfile" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="fileinput">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fileinput" name="filexlsx">
                                        <label class="custom-file-label" for="fileinput">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <!-- <span class="input-group-text">Upload</span> -->
                                        <input type="submit" class="btn btn-primary" name="uploadfileburstmessage" value="Upload" />

                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <?php
                                        Flasher::flash();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->

            </div>
            
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->