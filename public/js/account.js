jQuery.extend(jQuery.validator.messages, {
    required: "This field is required.",
    remote: "Already exists.",
    email: "Please enter a valid email address.",
    url: "Please enter a valid URL. (eg. http://www.example.com)",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Both password must be same.",
    accept: "Please enter a value with a valid extension.",
    maxlength: "Please do not exceed the limit of {0} character.",
    minlength: "This field must be at least of {0} characters in length.",
    rangelength: "Please enter a value between {0} and {1} characters long.",
    range: "Please enter a value between {0} and {1}.",
    max: "Please do not exceed the limit of {0} character",
    min: "Please enter at least {0} character."
});

$(function(){
	//$.validator.messages.maxlength = 'Please do not exceed the limit of {0} character';
	$.validator.addMethod("alphanum", function(value, element) { 
		return this.optional(element) || /^[a-z0-9/_]+$/i.test(value); 
	}, "Please enter only alphanumeric characters.");
	
	$.validator.addMethod("CharsOnly", function(value, element) { 
		return this.optional(element) || /^[^0-9/_]+$/i.test(value); 
	}, "Please enter only characters.");
	
	$.validator.addMethod("NoSpecialCharacters", function(value, element) { 
       return this.optional(element) || /^[^!@#$%^&*-+|\?<>]+$/i.test(value);
	}, "Special characters are not allowed.");
	
	$.validator.addMethod("OnlyFloat", function(value, element) { 
       return this.optional(element) || /^\d*(\.\d{1})?\d{0,1}$/i.test(value);
	}, "Please enter only numeric/float value.");
	
	
	$.validator.addMethod("NoSpecialCharactersForMailingAddress", function(value, element) { 
       return this.optional(element) || /^[^!@#$%^&*-+|\?<>]+$/i.test(value);
	}, "Special characters are not allowed. (eg. Washington Ave, Memorial Park)");
	
	$.validator.addMethod("NoSpecialCharactersWithoutDollar", function(value, element) { 
       return this.optional(element) || /^[^!@#%^&*-+|\?<>]+$/i.test(value);
	}, "Special characters are not allowed.");
	
	
	$.validator.addMethod("mobileFormat", function(value, element) {
	if($('.mobile').val()){

       var status = phoneFormat2($('.mobile').val());
		   if(status)
		   return true;
		   return false;
		} else {
			return true;
		}
	}, "Invalid phone number.");
	
	$.validator.addMethod("mobileFormatWithDot", function(value, element) {
		return this.optional(element) || /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/.test(value);
	}, "Invalid phone number.");

jQuery.validator.addMethod("noSpace", function(value, element) { 
     return value.indexOf(" ") < 0 && value != ""; 
  }, "Space are not allowed");


$.validator.addMethod("imageValidate", function(value, element) { 
       var status = userImageValidate();
		   if(status)
		   return true;
		   return false;
	}, "Please upload JPG|JPEG|PNG|GIF.");



$.validator.addMethod("imageANDDocValidate", function(value, element) { 
       var status = userImageWithDocXlsValidate();
		   if(status)
		   return true;
		   return false;
	}, "Please upload JPG | JPEG | PNG | GIF | DOCX | XLSX file only.");
	
jQuery.validator.addMethod("keywordValidate", function(value, element) {
	
	
	var searchBy = $('#searchBy').val();
	var keyword = $('#keyword').val();
	
	if(searchBy=='5')
	return true;
	else{
		
			if(keyword!='')
			return true;
			return false;
	}
	 
     return value.indexOf(" ") < 0 && value != ""; 
  }, "Required field.");
	
	
	$.validator.addMethod("DateTo", function(value, element) { 
       var status = DateCheck($('.mem_start_date').val(),$('.mem_end_date').val());
		   if(status)
		   return true;
		   return false;
	}, "End date must be greater than or equal to start date.");

    $.validator.addMethod("imageValidateMp4", function(value, element) { 
       var status = userImageValidateMp4();
           if(status)
           return true;
           return false;
    }, "Please upload only MP4 File.");

    $.validator.addMethod("imageValidateMp4Size", function(value, element) { 
       var status = userImageValidateMp4Size();
           if(status)
           return true;
           return false;
    }, "Video Size should not be more than 2 MB.");

    $.validator.addMethod("imageValidateSize", function(value, element) { 
       var status = userImageValidateSize();
		   if(status)
		   return true;
		   return false;
	}, "Image Size should not be more than 2 MB.");

    $.validator.addMethod("imageValidatePDF", function(value, element) { 
	   var status = userImageValidatePDF();
	       if(status)
	       return true;
	       return false;
	}, "File Format should be PDF,DOCX,DOC.");


    $.validator.addMethod("validateFilePDF", function(value, element) { 
	   var status = userValidateFilePDF();
	       if(status)
	       return true;
	       return false;
	}, "File Format should be PDF!");
    

	$.validator.addMethod("imageValidatePdfSize", function(value, element) { 
		
       var status = userImageValidatePdfSize();
           if(status)
           return true;
           return false;
    }, "Document Size should not be more than 10 MB.");
 


   $.validator.addMethod("imageValidatePDFAndSize", function(value, element) { 
	   var status = userImageValidatePDFAndSize();
           if(status)
           return true;
           return false;
	}, "Image Size should not be more than 2 MB.");

   $.validator.addMethod("imageValidateNewsSize", function(value, element) { 
	   var status = userImageValidateNewsSize();
           if(status)
           return true;
           return false;
	}, "Image Size should not be more than 2 MB.");


    jQuery.validator.addMethod("greaterThan", 
		function(value, element, params) {

		    if (!/Invalid|NaN/.test(new Date(value))) {
		        return new Date(value) > new Date($(params).val());
		    }

		    return isNaN(value) && isNaN($(params).val()) 
		        || (Number(value) > Number($(params).val())); 
		},'Must be greater than {0}.');

    jQuery.validator.addMethod(
    "multiemail",
     function(value, element) {
         if (this.optional(element)) // return true on optional element 
             return true;
         var emails = value.split(/[;,]+/); // split element by , and ;
         valid = true;
         for (var i in emails) {
             value = emails[i];
             valid = valid &&
                     jQuery.validator.methods.email.call(this, $.trim(value), element);
         }
         return valid;
     },

    jQuery.validator.messages.email
);

});



function requiredOptionSelected() { 
		var optionV = $("input[type='radio'][name='option']:checked").val();
		if(optionV=='1' && $('#emailSelected').val()==''){
			
			return true;
			
		}else{
			
			return false;
		}
		
}
	
	
	$.validator.addMethod("GroupCheckboxOneRequired", function(value, elem, param) {
    if($(".onechkbox:checkbox:checked").length > 0){
       return true;
   }else {
       return false;
   }
},"Please check at least one.");


$.validator.addMethod("InputAginstRequired", function(value, elem, param) {
	var x=0;
   $('.onechkbox').each(function(){
   var $this = $(this);
    if ($this.is(':checked')) {
		
		 var InputVal = $(this).parent().parent().find('input[type=text]').val();
			if(InputVal==''){
				x=1;
			}
    }
    
});

if(x==1) return false;
return true;   
   
},"Please enter float value in all box.");


jQuery.validator.setDefaults({
    errorPlacement: function(error, element){
    if(element.attr("name") == "price[]"){
        error.appendTo($('#errorbox'));
    }
    if(element.attr("name") == "options_values_id[]"){
        error.appendTo($('#errorbox'));
    }
}
});

 function userImageValidate()
 {
		var userImage = $("#upload").val();

		if(userImage != "") {
		
	        var extension = userImage.split('.').pop().toUpperCase();
	        
	        if (extension!="PNG" && extension!="JPG" && extension!="GIF" && extension!="JPEG"){
	            return 0;
	        }
	        else {
	            return 1;
	        }
	        
 		} else {

 			return 1;

 		}
	}
 
 
 function phoneFormat2(mobile) { 
    var phoneRegEx =/^\(\d{3}\) \d{3}-\d{4}$/; 
     if(mobile.match(phoneRegEx)) {
         return 1;            
     } else{
          return 0;      
     }
    
}

 function userImageValidatePDF()
 {
        var userImage = $("#upload").val();
        if(userImage!=""){
        
        var extension = userImage.split('.').pop().toUpperCase();
        
        if (extension!="PDF" && extension!="DOCX" && extension!="DOC"){
            return 0;
        }
        else {
            return 1;
        }
    }
    else{
        return 1;
    }
 }

  function userValidateFilePDF()
 {
        var userImage = $("#upload").val();
        if(userImage!=""){
        
        var extension = userImage.split('.').pop().toUpperCase();
        
        if (extension!="PDF"){
            return 0;
        }
        else {
            return 1;
        }
    }
    else{
        return 1;
    }
 }

 function phoneFormat(mobile) { 
    var phoneRegEx =/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/; 
     if(mobile.match(phoneRegEx)) {
         return 1;            
     } else{
          return 0;      
     }
    
}

function userImageValidateMp4()
 {
        var userImage = $("#video").val();
        if(userImage!=""){
        
        var extension = userImage.split('.').pop().toUpperCase();
        
        if (extension!="MP4"){
            return 0;
        }
        else {
            return 1;
        }
    }
    else{
        return 1;
    }
 }

 function userImageValidateMp4Size()
 {
        var video = $("#video").val();
        if(video!=""){
        var userImage = $("#video")[0].files[0].size;
        
        if (userImage > "2097152"){
            return 0;
        }
        else {
            return 1;
        }
    }else{
        return 1;
    }
 }

  function userImageValidateSize()
 {
        var video = $("#upload").val();
        if(video!=""){
        var userImage = $("#upload")[0].files[0].size;
        
        if (userImage > "2097152"){
            return 0;
        }
        else {
            return 1;
        }
    }else{
        return 1;
    }
 }

function userImageValidatePDFAndSize(){
	var video = $("#upload").val();
        if(video!=""){
        var userImage = $("#upload")[0].files[0].size;
        
        if (userImage > "2097152"){
            return 0;
        }
        else {
            return 1;
        }
    }else{
        return 1;
    }
}


 function userImageValidatePdfSize()
 {
        var video = $("#pdf").val();
        if(video!=""){
        var userImage = $("#pdf")[0].files[0].size;
        
        if (userImage > "10000000"){
            return 0;
        }
        else {
            return 1;
        }
    }else{
        return 1;
    }
 }

function userImageValidateNewsSize()
 {
        var video = $("#image").val();
        if(video!=""){
        var userImage = $("#image")[0].files[0].size;
        if (userImage > "2097152"){
            return 0;
        }
        else {
            return 1;
        }
    }else{
        return 0;
    }
 }


  function userImageValidatePdfSize()
 {
        var video = $("#upload").val();
        if(video!=""){
        var userImage = $("#upload")[0].files[0].size;
        
        if (userImage > "10000000"){
            return 0;
        }
        else {
            return 1;
        }
    }else{
        return 1;
    }
 }


function DateCheck(start,end){

    /*var st = start.split('-');
    st = st[1]+'/'+st[0]+'/'+st[2];

    var en = end.split('-');
    en = en[1]+'/'+en[0]+'/'+en[2];*/

	var s = new Date(start);
    var e = new Date(end);
    //console.log(s);
    //console.log(e);
   if(end!=''){

	if(s.getTime() > e.getTime()){
			return 0;	
		}else{
			return 1;
		}
	}else{
		return 1;
	}	
}


$(document).ready(function() {
	
	
/*---------------Start Validate pages-----------------*/

/*---------------Start Validation for Add User-----------------*/


$("#insertUser").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				"fname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },

			    "lname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },

			    "licensenum":{
			    	remote: $('#checkUniqueLicenceAdmin').val()
			    },

			     "email": {
			        required: true,
					email: true,
					noSpace: true,
					remote:  $('#checkEmail').val()
			    },

			   

			    "phone": {
					required: true,
					mobileFormatWithDot: true,
					 
			    },

			    "password": {
					required: true,
					minlength: 6,
					 
			    },



        },
        messages: {
        	
        	email: {
        		remote: "Email already Exists.",
        	},

        	fname: {
        		minlength: "Please enter at least two characters.",

        	},
        	
        	lname: {
        		minlength: "Please enter at least two characters.",

        	},

        	licensenum: {
        		remote: "License already taken."
        	},
        },
});

/*---------------End Validation for Add User-----------------*/

/*---------------Start Validation for Edit USer-----------------*/

$("#updateUser").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

					"fname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },

			    "lname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },

			   "email": {
					email: true,
					required: true,
					remote: $('#checkEmailOnEdit').val()
			    },

			   


			    "phone": {
					required: true,
					mobileFormatWithDot: true,
					 
			    },

       


        },
        messages: {

        	email:{
        		remote: "Email Already Exists.",
        	},

        	fname: {
        		minlength: "Please enter at least two characters.",

        	},
        	
        	lname: {
        		minlength: "Please enter at least two characters.",

        	},

        },
});



/*---------------End Validation for Edit User-----------------*/

/*---------------Start Validation for Add SuperAdmin----------------*/


$("#insertSuperAdmin").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				"fname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },

			    "lname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },
			    "email": {

			    	required: true,
					email: true,
					noSpace: true,
					remote: $('#checkSuperAdminEmailOnAdd').val()
			    },

			    "password": {
					required: true,
					minlength: 4,
					maxlength: 30,
					noSpace: true
					 
			    },

			    
        },
        messages: {
        	email:{
        		remote: "Email Already Exists.",
        	},
        	comm_email: {
        		remote: "This Communication email already taken.",
        	},

        	
        },
});

/*---------------End Validation for Add SuperAdmin-----------------*/

/*---------------Start Validation for Edit SuperAdmin-----------------*/

$("#updateSuperAdmin").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

			"fname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },

			    "lname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },
			    "email": {
			    	required: true,
					email: true,
					noSpace: true,
					remote: $('#checkSuperAdminEmailEdit').val()
			    },



			    "password": {
					minlength: 4,
					maxlength: 30,
					 
			    },
			    
        },
        messages: {
              email:{
        		remote: "Email Already Exists.",
        	},
        	comm_email: {
        		remote: "This Communication email already taken.",
        	},
        	
        },
});

/*---------------End Validation for Edit SuperAdmin-----------------*/

/*---------------Start Validation for Add Administrative----------------*/

$("#insertAdministrative").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				"fname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },

			    "lname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },
			    "phone": {
					required: true,
					mobileFormatWithDot: true,
					 
			    },


			    "email": {
					email: true,
					noSpace: true,
					remote: $('#checkAdministrativeEmailOnAdd').val()
			    },

			    "password": {
					required: true,
					minlength: 4,
					maxlength: 30,
					noSpace: true
					 
			    },

			    
        },
        messages: {
        	email:{
        		remote: "Email Already Exists.",
        	},

        	
        },
});

/*---------------End Validation for Add Administrative-----------------*/

/*---------------Start Validation for Edit Administrative-----------------*/

$("#updateAdministrative").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

			"fname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },

			    "lname": {
					required: true,
					minlength: 2,
					maxlength: 30,
					NoSpecialCharacters: true,
					CharsOnly: true,
					 
			    },


			     "phone": {
					required: true,
					mobileFormatWithDot: true,
					 
			    },

              
			    "email": {
					email: true,
					noSpace: true,
					remote: $('#checkAdministrativeEmailEdit').val()
			    },

			    "password": {
					minlength: 6,
					maxlength: 30,
					 
			    },
			    
        },
        messages: {
              email:{
        		remote: "Email Already Exists.",
        	},
        },
});

/*---------------End Validation for Edit Administrative-----------------*/


/*---------------Start Validation for Add Board-----------------*/

$("#insertBoard").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				
		    "name": {
					required: true,
			},
			"title": {
					required: true,
			},
			"employer": {
					required: true,
			},
		    "image_name": {
				required: true,
				imageValidate: true,
				imageValidateSize : true,
			},
        },
});

/*---------------End Validation for Add Board-----------------*/

/*---------------Start Validation for Edit Board-----------------*/

$("#updateBoards").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				'name': {
					required: true,
			    },
			    "title": {
					required: true,
				},
			    "employer": {
					required: true,
				},

			    'image_name': {
			    	imageValidate: true,
					imageValidateSize : true,
			    },
        },
});

/*---------------End Validation for Edit Board-----------------*/


/*---------------Start Validation for Add Sponsors----------------*/

$("#insertSponsors").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

			"sponsorslevel": {
					required: true,		
					 
			    },
			    "name": {
					required: true,
					 
			    },
			    "logo_image": {
					required: true,
					 
			    },


			    "state": {
					required: true,
					 
			    },
			     "contact_person": {
					required: true,
					 
			    },


			    
			    "city": {
					required: true,
					NoSpecialCharacters: true,
					 
			    },

			    "zipcode": {
					required: true,
					NoSpecialCharacters: true,
					number: true,
					noSpace: true,
					 
			    },

			    "address": {
					required: true,
					 
			    },
			    
			    "email": {
					email: true,
					remote: $('#checkSponsorsEmailOnAdd').val()
			    },

			    "phone": {
			        required: true,
			        mobileFormatWithDot: true,
			    },

			   "image_name":{
			    	required: true,
					imageValidate: true,
					imageValidateSize : true,
			    }

			    
        },
        messages: {
        	email:{
        		remote: "Email Already Exists.",
        	},

        	
        },
});

/*---------------End Validation for Add Sponsors-----------------*/

/*---------------Start Validation for Edit Sponsors-----------------*/

$("#updateSponsors").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

		"sponsorslevel": {
					required: true,		
					 
			    },
			    "name": {
					required: true,
					 
			    },
			    "logo_image": {
					required: true,
					 
			    },


			    "state": {
					required: true,
					 
			    },
			    "contact_person": {
					required: true,
					 
			    },


			    
			    "city": {
					required: true,
					NoSpecialCharacters: true,
					 
			    },

			    "zipcode": {
					required: true,
					NoSpecialCharacters: true,
					number: true,
					noSpace: true,
					 
			    },

			    "address": {
					required: true,
					 
			    },
			    
			    "email": {
					email: true,
					remote: $('#checkSponsorsEmailEdit').val()
			    },

			    "phone": {
			        required: true,
			        mobileFormatWithDot: true,
			    },

			     "image_name":{
					imageValidate: true,
					imageValidateSize : true,
			    }
        },
        messages: {
              email:{
        		remote: "Email Already Exists.",
        	},
        },
});

/*---------------End Validation for Edit Sponsors-----------------*/



/*---------------Start Validation for Edit Page Content-----------------*/

$("#updatePageContent").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				'title': {
					required: true,
			    },
                 
                 'slug': {
					required: true,
			    },

			    'contents': {
					required: true,
			    },

			    'description': {
					required: true,
			    },

			    'keyword': {
					required: true,
			    },
        },
});


/*---------------Start Validation for Add JobPosting----------------*/

$("#insertJobPosting").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

			"job_title": {
					required: true,		
					 
			    },

			  "job_desc": {
					required: true,
					 
			    },

			    "image_name":{
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    }
			   

			    
        },
      
});

/*---------------End Validation for Add JobPosting-----------------*/

/*---------------Start Validation for Edit JobPosting-----------------*/

$("#updateJobPosting").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

		"job_title": {
					required: true,		
					 
			    },

			  "job_desc": {
					required: true,
					 
			    },

			    "image_name":{
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    }
			   
			 },

});

/*---------------End Validation for Edit JobPosting-----------------*/

/*---------------Start Validation for Sign up User-----------------*/
$("#userSignUp").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				"fname": {
					required: true,
					maxlength:30,
					 
			    },

			    "lname": {
					required: true,
					maxlength:30,
					 
			    },

			    "phone_type": {
					required: true,
					 
			    },

			    "phone": {
					required: true,
					mobileFormatWithDot:true,
					 
			    },

			    "licence": {
					required: true,
					maxlength:6,
					number:true,
					remote: $('#checkUniqueLicence').val()
					 
			    },

			    "licence_type": {
					required: true,
					 
			    },
			    
			    "email": {
			        required: true,
					email: true,
					noSpace: true,
					remote:  $('#checkEmail').val()
			    },
			    
			    "password": {
			        required: true,
					minlength: 4,
					maxlength: 30,
					noSpace: true
			    },
			    
			    "cpassword": {
			        required: true,
					noSpace: true,
					equalTo: "#password"
			    },
			    
        },
        messages: {

        	email: {
        		remote: "Email already Exists.",
        	},
        	licence: {
        		remote: "Licence already been taken.",
        	},
        },
        errorPlacement: function(error, element) {
        element.parent().append(error);
    }
});


/*---------------End Validation for Sign up User-----------------*/


/*---------------Start Validation for Login User-----------------*/
$("#userLogin").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			    "email": {
			        required: true,
					email: true,
					noSpace: true,
			    },
			    
			    "password": {
			        required: true,
					noSpace: true
			    },
			    
        },
        errorPlacement: function(error, element) {
        element.parent().parent().append(error);
    }
});


/*---------------End Validation for Login User-----------------*/

/*---------------Start Validation for Security Question-----------------*/
$("#signUpSecurityQuestions").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			    "ques1": {
			        required: true,
			        NoSpecialCharacters: true,
			        maxlength:30,
			    },

			    "ques2": {
			        required: true,
			        NoSpecialCharacters: true,
			        maxlength:30,
			    },

			    "ques3": {
			        required: true,
			        NoSpecialCharacters: true,
			        maxlength:30,
			    },
			    
        },
        errorPlacement: function(error, element) {
        element.parent().append(error);
    }
});


/*---------------End Validation for Security Question-----------------*/

/*---------------Start Validation for Change Password-----------------*/

$("#updateChangePassword").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			    "oldpass": {
			        required: true,
			    },

			    "newpass": {
			        required: true,
			        minlength:6
			    },

			    "cpass": {
			        required: true,
			        minlength:6,
			        equalTo: "#newpass"
			    },
			    
        },
        errorPlacement: function(error, element) {
        error.insertAfter(element);
    }
});


/*---------------End Validation for Change Password-----------------*/

/*---------------Start Validation for Forgot Password-----------------*/

$("#actionForgotPassword").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			    "email": {
			        required: true,
			        email: true,
			        remote: $('#checkEmailForgotPassword').val()
			    },
			    
        },
        messages: {

        		"email": {
        			remote: "Your email address does not match our records. Try another email or create a login profile!"
        		}

        },
        errorPlacement: function(error, element) {
        element.parent().parent().append(error);
    }
});


/*---------------End Validation for Forgot Password-----------------*/

/*---------------Start Validation for Forgot Password-----------------*/

$("#ForgotSecurityQuestions").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			    "ans": {
			        required: true,
			    },
			    
        },
        errorPlacement: function(error, element) {
        error.insertAfter(element);
    }
});


/*---------------End Validation for Forgot Password-----------------*/

/*---------------Start Validation for Forgot Password-----------------*/

$("#updateForgotPassword").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			    "pass": {
			        required: true,
			        minlength:6
			    },

			    "cpass": {
			        required: true,
			        minlength:6,
			        equalTo: '#pass'
			    },
			    
        },
        errorPlacement: function(error, element) {
        error.insertAfter(element);
    }
});


/*---------------End Validation for Forgot Password-----------------*/

/*---------------Start Validation for Membership-----------------*/

$("#insertMembership").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			    "title": {
			        required: true,
			    },

			    "mem_start_date": {
			        required: true,
			    },
			    
			    "mem_end_date": {
			        required: true,
			        DateTo: true,
			    },

			    "dicount_date_type[]": {
			        required: true,
			    },

			    "amount[]": {
			        required: true,
			    },

        },
});


/*---------------End Validation for Membership-----------------*/
/*---------------Start Validation for Membership-----------------*/

$("#updateMembership").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			    "title": {
			        required: true,
			    },

			    "mem_start_date": {
			        required: true,
			    },
			    
			    "mem_end_date": {
			        required: true,
			        DateTo: true,
			    },

			    "dicount_date_type[]": {
			        required: true,
			    },

			    "amount[]": {
			        required: true,
			    },

        },
});


$("#updateBrochure").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

			    "image_name":{
			    	required: true,
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    }
			   
			 },

});

/*---------------End Validation for Membership-----------------*/
/*---------------Start Validation for Seminars-----------------*/

$("#insertSeminars").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			    "seminartype": {
			        required: true,
			    },

			    "name": {
			        required: true,
			    },
			    
			    "date": {
			        required: true,
			        DateTo: true,
			    },

			    "capacity": {
			        required: true,
			    },

			    "directions": {
			        required: true,
			    },

			    "image_name":{
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    }
			   
        },
});


/*---------------End Validation for Seminars-----------------*/

/*---------------Start Validation for Seminars-----------------*/

$("#updateSeminars").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			  "seminartype": {
			        required: true,
			    },

			    "name": {
			        required: true,
			    },
			    
			    "date": {
			        required: true,
			        DateTo: true,
			    },

			    "capacity": {
			        required: true,
			    },

			    "directions": {
			        required: true,
			    },

			    "image_name":{
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    }
			   
        },
});

/*---------------End Validation for Seminars-----------------*/

/*---------------Start Validation for Add News-----------------*/

$("#insertNews").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				'title': {
					required: true,
			    },

			    'description': {
					required: true,
					 
			    },
			    'date': {
					required: true,
					 
			    },
			    
				 "image_name":{
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    },
			    "image_name2":{
			    	imageValidateNewsSize: true
			    },

			   			   
        },
});

/*---------------End Validation for Add News-----------------*/

/*---------------Start Validation for Edit News-----------------*/

$("#updateNews").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				'title': {
					required: true,
			    },

			    'description': {
					required: true,
					 
			    },
			    'date': {
					required: true,
					 
			    },
			    
			   "image_name":{
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    },

               "image_name2":{
                     imageValidateNewsSize: true
			    },
			   
        },
});

/*---------------End Validation for Edit Flower Category-----------------*/

/*---------------Start Validation for Add News-----------------*/

$("#inserEmailTemplate").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				'name': {
					required: true,
			    },

			    'subject': {
					required: true,
					 
			    },
			    'content': {
					required: true,
					 
			    },
			    "image_name":{
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    }
        },
});

/*---------------End Validation for Add News-----------------*/

/*---------------Start Validation for Edit News-----------------*/

$("#updateEmailTemplate").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				'name': {
					required: true,
			    },

			    'subject': {
					required: true,
					 
			    },
			    'content': {
					required: true,
					 
			    },
			    "image_name":{
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    }
        },
});

/*---------------End Validation for Edit Flower Category-----------------*/

/*---------------Start Validation for Edit News-----------------*/

$("#sendMail").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

				'name': {
					required: true,
			    },

			    'subject': {
					required: true,
					 
			    },
			    'content': {
					required: true,
					 
			    },
			    'users': {
					required: true,
					multiemail: true
			    },
        },
});

/*---------------End Validation for Edit Flower Category-----------------*/

/*---------------Start Validation for Credit-----------------*/
$("#insertCredit").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			  "amount": {
			        required: true,
			    },

			   "issueDate": {
			        required: true,
			        DateTo: true,
			    },
			    
			   
        },
       
});
/*---------------End Validation for Credit-----------------*/

/*---------------Start Validation for Credit-----------------*/
$("#updateUserProfile").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			  "fname": {
			        required: true,
			    },

			   "lname": {
			        required: true,
			    },

			    "city": {
			        required: true,
			    },
			    
			   "zipcode": {
			        required: true,
			        minlength: 5,
			        maxlength: 5,
			        numeric: true,
			    },

			    "street_address": {
			        required: true,
			    },

			    "phone": {
			        required: true,
			    },

			    "phone_type": {
			        required: true,
			    },

			    "state": {
			        required: true,
			    },
        },
        errorPlacement: function(error, element) {
        error.insertAfter(element);
    }
       
});
/*---------------End Validation for Credit-----------------*/

/*---------------Start Validation for Add Newsletter----------------*/

$("#insertNewsletter").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

			"newsletter_title": {
					required: true,		
					 
			    },

			    "image_name":{
			    	required: true,
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    }
			   

			    
        },
      
});

/*---------------End Validation for Add Newsletter-----------------*/

/*---------------Start Validation for Edit Newsletter-----------------*/

$("#updateNewsletter").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

		       "newsletter_title": {
					required: true,		
					 
			    },

			

			    "image_name":{
			    	required: true,
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    }
			   
			 },

});

/*---------------End Validation for Edit Newsletter-----------------*/


$("#addUserProfile").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			  "fname": {
			        required: true,
			    },

			   "lname": {
			        required: true,
			    },

			    "email": {
			        required: true,
			        email: true,
			        remote:  $('#checkEmail').val()
			    },

			    "password": {
			        required: true,
			        minlength: 6,
			    },
			    
			   "licence": {
			        required: true,
					maxlength:6,
					number:true,
					remote: $('#checkUniqueLicence').val()
			    },

			    "licence_type": {
			        required: true,
			    },
        },
        errorPlacement: function(error, element) {
        error.insertAfter(element);
    }
       
});


$("#eeditUserProfile").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			  "fname": {
			        required: true,
			    },

			   "lname": {
			        required: true,
			    },

			    "email": {
			        required: true,
			        email: true,
			        remote:  $('#checkEmailOnEdit').val()
			    },

			    "password": {
			        minlength: 6,
			    },
			    
			   "licence": {
			        required: true,
					maxlength:6,
					number:true,
			    },

			    "licence_type": {
			        required: true,
			    },
        },
        errorPlacement: function(error, element) {
        error.insertAfter(element);
    }
       
});

$("#pay-now").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			  "first_name": {
			        required: true,
			    },

			   "last_name": {
			        required: true,
			    },

			    "email": {
			        required: true,
			        email: true,
			    },

			    "cnumber": {
			        required: true,
			        minlength: 15,
			        maxlength:16,
			        number: true,
			    },
			    
			   "card_expiry_month": {
			        required: true,
			    },

			    "card_expiry_year": {
			        required: true,
			    },

			    "card_code": {
			        required: true,
			        maxlength: 4,
			        minlength: 3,
			    },

			    "zipcode": {
			        required: true,
			        minlength: 5,
			        maxlength:5,
			        number: true,
			    },
        },
        messages:{
        	
        	"card_expiry_year":{
        		required: "Please make a selection."
        	},
        	"card_expiry_month":{
        		required: "Please make a selection."
        	},
        	"cnumber":{
        		minlength: "This should be 15 to 16 numbers long.",
        		maxlength: "This should be 15 to 16 numbers long."
        	},

        },
        errorPlacement: function(error, element) {
        error.insertAfter(element);
    }
       
});

/*---------------Start Validation for Add Sponsors----------------*/

$("#insertCheck").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

		
			    "fname": {
					required: true,
					 
			    },
			    "lname": {
					required: true,
				},

				 "checkNum": {
					required: true,
					 
			    },
			    "checkAmount": {
					required: true,
				},
					 
			 
			    
        },
       
});

/*---------------End Validation for Add Check-----------------*/

/*---------------Start Validation for Edit Check-----------------*/

$("#updateCheck").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

		  "fname": {
					required: true,
					 
			    },
			    "lname": {
					required: true,
				},

				 "checkNum": {
					required: true,
					 
			    },
			    "checkAmount": {
					required: true,
				},
			  		
        },
       
});

/*---------------End Validation for Edit Check-----------------*/

/*---------------Start Validation for Edit Check-----------------*/

$("#searchUserFrontend").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

		  "keyword": {
					required: true,
					 
			    },
			  		
        },
        errorPlacement: function(error, element) {
        error.insertAfter(element);
    }
       
});

/*---------------End Validation for Edit Check-----------------*/

$("#security-question-user").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

		  "ans1": {
					required: true,
					 
			    },

			"ans2": {
					required: true,
					 
			    },
			"ans3": {
					required: true,
					 
			    },
			  		
        },
        errorPlacement: function(error, element) {
        error.insertAfter(element);
    }
       
});

$("#updatescholarship").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

			    "image_name":{
			    	validateFilePDF: true,
			    	imageValidatePdfSize: true
			    }
			   
			 },

});

/*---------------End Validate pages-----------------*/

$("#changePassword").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

	 		"password": {
				required: true,
				minlength: 6,
				maxlength: 15,	 
			 },

		    "cpassword": {
				required: true,
				equalTo: "#password"
			},	
        },
        messages : {

        	"password": {
        		required: "The password field is required.",
        	},

        	"cpassword": {
        		required: "The confirm password field is required.",
        		equalTo: "The confirm password and password must be same."
        	},

        }
       
});


$("#sponsor-pay").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			  "first_name": {
			        required: true,
			    },

			   "last_name": {
			        required: true,
			    },

			    "city": {
			        required: true,
			    },

			    "country": {
			        required: true,
			    },
			    
			   "zipcode": {
			        required: true,
			        minlength: 5,
			        maxlength: 5,
			        number: true,
			    },

			    "address": {
			        required: true,
			    },

			    "phone": {
			        required: true,
			        mobileFormatWithDot:true,
			    },

			    "state": {
			        required: true,
			    },

			    "company_name": {
			        required: true,
			    },

			    "company_website": {
			        required: true,
			        url: true,
			    },

			    "email": {
			        required: true,
			        email: true,
			        remote: $('#checkEmailAlreadyPurchased').val()
			    },

			    "card_name": {
			        required: true,
			    },

			    "billing_zip": {
			        required: true,
			        maxlength: 5,
			        minlength: 5,
			        number: true,
			    },

			    "cnumber": {
			        required: true,
			        maxlength: 16,
			        minlength: 15,
			        number: true,
			    },

			    "card_code": {
			        required: true,
			        maxlength: 4,
			        minlength: 3,
			        number: true,
			    },

			    "card_expiry_month": {
			        required: true,
			    },

			    "card_expiry_year": {
			        required: true,
			    },

			    "image": {
			    	required: true,
			    	imageValidate: true,
			    	imageValidateSize: true,
			    },
        },
        messages:{

        	"email": {

        		remote: 'You already purchased sponsorship for this year!'

        	},
        	"cnumber":{
        		minlength: "This should be 15 to 16 numbers long.",
        		maxlength: "This should be 15 to 16 numbers long."
        	},

        },
        errorPlacement: function(error, element) {
        error.insertAfter(element);
    }
       
});

$("#insertPdf").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {

	 		"pdf_name": {
				required: true,
				validateFilePDF: true,
			    imageValidatePdfSize: true	 
			},	
        },
       
});

$("#sponsor-pay-admin").validate({
		
		debug: false,
		errorClass: "errorClass",
		errorElement: "div",
	 	rules: {
			    
			  "first_name": {
			        required: true,
			    },

			   "last_name": {
			        required: true,
			    },

			    "city": {
			        required: true,
			    },

			    "country": {
			        required: true,
			    },
			    
			   "zipcode": {
			        required: true,
			        minlength: 5,
			        maxlength: 5,
			        number: true,
			    },

			    "address": {
			        required: true,
			    },

			    "phone": {
			        required: true,
			        mobileFormatWithDot:true,
			    },

			    "state": {
			        required: true,
			    },

			    "company_name": {
			        required: true,
			    },

			    "company_website": {
			        required: true,
			        url: true,
			    },

			    "email": {
			        required: true,
			        email: true,
			        remote: $('#checkEmailAlreadyPurchased').val()
			    },

			    "check_first_name": {
			        required: true,
			    },

			    "check_last_name": {
			        required: true,
			    },

			    "check_email": {
			        required: true,
			    },

			    "check_number": {
			        required: true,
			    },

			    "check_amount": {
			        required: true,
			    },

			    "image": {
			    	required: true,
			    	imageValidate: true,
			    	imageValidateSize: true,
			    },
        },
        messages:{

        	"email": {

        		remote: 'You already purchased sponsorship for this year!'

        	},
        	"cnumber":{
        		minlength: "This should be 15 to 16 numbers long.",
        		maxlength: "This should be 15 to 16 numbers long."
        	},

        },
        errorPlacement: function(error, element) {
        error.insertAfter(element);
    }
       
});

});
