<?php
$page_title = "Our Project Details";
include "../../includes/header.php";
$storeFolder ="";
$id = isset($_GET['id']) ? $_GET['id'] : '0';
if ($id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_project_detail WHERE project_id='$id'");
    $storeFolder = '../../assets/uploads/our-project-details/';
}
?>
<!-- Page-content -->
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0"><?= $page_title ?></h4>

                    <div class="page-title-right">
                        <a href="index.php" class="btn btn-primary waves-effect waves-light">Back</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0"><?= $page_title ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-4 mt-xl-0">
                                    <form action="save.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <label class="form-label" for="project_link">Youtube Link</label>
                                                <input class="form-control" type="text" name="project_link" value="" placeholder="https://www.youtube.com/"></input>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <label class="form-label" for="project_content">Content</label>
                                                <textarea class="form-control tinymce_" type="text" id="project_content" name="project_content" ><?= $row[0]['project_content'] ?? '' ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <label class="form-label" for="input-file-now">Project Detail Image</label>
                                                <input type="file" id="input-file-now" name="project_image[]" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' data-max-file-size="2M" multiple/>
                                            </div>
                                        </div>    
                                        <div class="row mb-3">
                                            <?php
                                                $fetch_project_detail_img = fetch_data($link,"Select * from tbl_project_detail_img where project_id = '$id'");
                                                foreach($fetch_project_detail_img as $img):
                                            ?>
                                            <div class="col-md-6 col-xl-3">
                                                <!-- Simple card -->
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="<?= $app_path.$img['project_imgurl'].$img['project_img']?>" alt="Card image cap">
                                                    <div class="card-body">
                                                        <a onclick="JSconfirm('save.php?delete_image=1&id=<?= $img['project_detail_img_id']; ?>')" class="btn btn-warning waves-effect waves-light">DELETE</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                            
                                        </div>            
                                        <div class="row mt-4">
                                            <div class="col-12 text-end">
                                                <input type="hidden" name="add_details">
                                                <button type="submit" class="btn btn-primary w-md"><?= $id > 0 ? 'Update' : 'Save' ?></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Layout -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php
include "../../includes/footer.php";
?>
<script>
    // var drEvent = $('.dropify-event').dropify();
    // drEvent.on('dropify.afterClear', function (event, element) {
    //     $('#input-file-now').attr("data-default-file", "");
    //     $('#delete_file').val('1');
    // });
</script>