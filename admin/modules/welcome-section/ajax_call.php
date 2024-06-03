<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/welcome-section/';
if (isset($_POST['add_edit'])) {
  extract($_POST);
  $value_id = isset($_POST['value_id']) ? validate_string($link, $_POST['value_id']) : 0;
  $value_title = validate_string($link, $value_title);
  $short_desc = validate_ckeditor_data($link, $short_desc);

  if ($value_id > 0) {
    $query = "UPDATE tbl_core_values set `value_title`='$value_title', `short_desc`='$short_desc', updated_on=NOW(), updated_by=$user_id WHERE `value_id` = '$value_id'";
    $chk = mysqli_query($link, $query);
    $last_id = $value_id;
  } else {
    $query = "INSERT INTO tbl_core_values (`value_title`, `short_desc`, `added_on`, `added_by`) VALUES('$value_title', '$short_desc', NOW(),'$user_id')";
    $chk = mysqli_query($link, $query);
    $last_id = mysqli_insert_id($link);
  }
  if ($chk) {
    if (is_uploaded_file($_FILES['value_icon']['tmp_name'])) {
      //create name of file
      $file_name = $last_id . rand() . "_value_icon";
      //folder path to save the file
      $path_to_save = $storeFolder;
      //upload the file in above path folder
      $res = upload_file($_FILES['value_icon'], $file_name, $path_to_save, "value_icon", "value_id", $last_id, "tbl_core_values", $link);
      if ($res == "err=ok") {
      } else {
        
      }
    }
    echo showValues($storeFolder, $link);
  } else {
    $_SESSION['toast_type'] = "error";
    $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
    echo showValues($storeFolder, $link);
  }
}
if (isset($_POST['action']) && $_POST['action'] == 'get_data') {
  extract($_POST);
  $value_id = validate_string($link, $value_id);
  $values = fetch_data($link, "SELECT * FROM tbl_core_values WHERE value_id='$value_id'");
  if ($values) {
    $values[0]['value_icon'] = $storeFolder . $values[0]['value_icon'];
    echo json_encode($values[0]);
  } else {
    echo json_encode(['error' => 'No data found']);
  }
}

function showValues($storeFolder, $link)
{
  $values = fetch_data($link, "SELECT * FROM tbl_core_values");
  $val = '';
  foreach ($values as $value) {
    $val .= <<<HTML
    <div class="col-lg-6">
      <div class="card card-aside custom-card">
        <a href="javascript:void(0);" class="card-aside-column cover-image rounded-start-11" data-image-src="{$storeFolder}{$value['value_icon']}" style="background: url('{$storeFolder}{$value['value_icon']}') center center;"></a>
        <div class="card-body">
          <h5 class="main-content-label tx-dark tx-medium mg-b-10">{$value['value_title']}</h5>
          <div class="">{$value['short_desc']}</div>
          <div class="d-flex align-items-center pt-3 mt-auto">
            <div class="ms-auto text-muted">
              <a onclick="editCoreModal('{$value['value_id']}')" class="icon d-none d-md-inline-block ms-3"><i class="fas fa-edit tippy-btn me-1" title="Edit" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
              <a onclick="JSconfirm('save.php?delete=1&value_id={$value['value_id']}&imgname={$value['value_icon']}')" class="icon d-none d-md-inline-block ms-3"><i class="fas fa-trash-alt tippy-btn" title="Delete" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    HTML;
  }
  return $val;
}
