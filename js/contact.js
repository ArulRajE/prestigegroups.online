$(function () {
	$("#contact-form1").validate({
		rules: {
			name1: {
				required: true,
				minlength: 3
			},
			phone1: {
				required: true,
				number: true,
				minlength: 10,
				maxlength: 10
			},
		},
		messages: {
			name1: {
				required: "Please enter your name",
				minlength: "Name should contain atleast 3 characters"
			},
			phone1: {
				required: "Please enter phone number",
				number: "Please enter valid phone number",
				minlength: "Phone number should contain atleast 10 digit",
				maxlength: "Phone number should contain max 10 digit"
			},
		},
		submitHandler: function (form) {
			form.submit();
		}
	});
	$("#contact-form2").validate({
		rules: {
			name2: {
				required: true,
				minlength: 3
			},
			email2: {
				required: true,
				email: true
			},
			course: {
				required: true
			},
			phone2: {
				required: true,
				number: true,
				minlength: 10,
				maxlength: 10
			},
			message2: "required",
		},
		messages: {
			name2: {
				required: "Please enter your name",
				minlength: "Name should contain atleast 3 characters"
			},
			email2: {
				required: "Please enter your email address",
				email: "Please enter a valid email address"
			},
			course: {
				required: "Please select your course",
			},
			phone2: {
				required: "Please enter phone number",
				number: "Please enter valid phone number",
				minlength: "Phone number should contain atleast 10 digit",
				maxlength: "Phone number should contain max 10 digit"
			},
			message2: "Please enter message",
		},
		submitHandler: function (form) {
			form.submit();
		}
	});
	$("#contact-form3").validate({
		rules: {
			name3: {
				required: true,
				minlength: 3
			},
			phone3: {
				required: true,
				number: true,
				minlength: 10,
				maxlength: 10
			},
		},
		messages: {
			name3: {
				required: "Please enter your name",
				minlength: "Name should contain atleast 3 characters"
			},
			phone3: {
				required: "Please enter phone number",
				number: "Please enter valid phone number",
				minlength: "Phone number should contain atleast 10 digit",
				maxlength: "Phone number should contain max 10 digit"
			},
		},
		submitHandler: function (form) {
			form.submit();
		}
	});
});