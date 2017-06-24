// Javascript for homepage modals (Account update/delete)

// $('#update_modal').on('hide.bs.modal', function () {
	if(update_status=="update_msg") {
		$('#update_modal').modal('show');
	}
// });

// $('#update_modal').on('hide.bs.modal', function () {
	if(delete_status=="delete_msg") {
		$('#update_modal').modal('show');
	}
// });

// Javascript for popover
$(document).ready(function(){
	$('[data-toggle="popover"]').popover(); 
});