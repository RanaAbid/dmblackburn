function addCoreModal() {
    $('#value_id').val('');
    $('#value_title').val('');
    $('#value_short_desc').val('');
    $('#value_icon').val('');
    $('#core_values_modal').modal('toggle');
}

function editCoreModal(value_id) {
    $.ajax({
        url: 'ajax_call.php',
        type: 'POST',
        data: {'action':'get_data','value_id': value_id},
        success: function(response) {
            var data = JSON.parse(response);
            if (data.error) {
            } else {
                $('#value_id').val(data.value_id);
                $('#value_title').val(data.value_title);
                $('#value_short_desc').val(data.short_desc);
                $('#value_icon').attr("data-default-file",data.value_icon);
                $('#value_icon').dropify();
                $('#value_icon').attr("required",false);
            }
            $('#core_values_modal').modal('toggle');
        },
        error: function(xhr, status, error) {
            showToastMsg('error', 'Oops! something went wrong!')
        }
    });
}

$(document).ready(function () {
    $('#save_button').on('click', function (event) {
        event.preventDefault();
        if (validateForm()) {
            var formData = new FormData($('#core_values_form')[0]);
            $.ajax({
                url: 'ajax_call.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#values_div').html(response);
                    $('#core_values_modal').modal('hide');
                    showToastMsg('success', 'Data updated Successfully!');
                },
                error: function (xhr, status, error) {
                    // handle error response
                    showToastMsg('error', error);
                }
            });
        } else {
            // If validation fails, show error message or handle it as needed
            showToastMsg('error', 'Please fill in all required fields.');
        }
    });
});

function validateForm() {
    // Check if any of the required fields are empty
    var title = $('#value_title').val();
    var description = $('#value_short_desc').val();
    var icon = $('#value_icon').val();

    if (title.trim() === '' || description.trim() === '' || icon.trim() === '') {
        return false; // Return false if any required field is empty
    }
    return true; // Return true if all required fields are filled
}