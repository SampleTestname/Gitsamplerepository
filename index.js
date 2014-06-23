$(document).ready(function ($) {
$("#create_account").click(function() 
{
	loginfunction();
});
});

function loginfunction()
{
	if ($("#username").val() == "" || $("#password").val() == "") {
		$("#account_div").find(".error").html("Please enter a username and password.").slideDown('fast').delay(2000).slideUp('fast');
		return false;
	}
	
	var postFields = {
		'user_name':$("#username").val(),
		'password':$("#password").val()
			};

	$.ajax({
		url: $("#g_php_self").val() + "?ajax=true&url_action=login",
		type: "POST",
		data: postFields,
		
		success: function(returnArray) {	
			if (returnArray['status'] == 'success') {
				alert('rose');
			} else {
				$("#account_div").find(".error").html(returnArray['message']).slideDown('fast').delay(2000).slideUp('fast');
			}
		},
		dataType: "json"
	});

}
