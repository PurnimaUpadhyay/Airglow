// Wait for the DOM to be ready
$(function() {

            $.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please");


    $.validator.addMethod( "extension", function( value, element, param ) {
               param = typeof param === "string" ? param.replace( /,/g, "|" ) : "png|jpe?g|pdf|doc|docx";
               return this.optional( element ) || value.match( new RegExp( "\\.(" + param + ")$", "i" ) );
           }, $.validator.format( "Please enter a value with a valid extension." ) );
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
            // Career Form Start
            $("#career-form").validate({
                ignore: ".ignore",
                // Specify validation rules
                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    productno: {
                        required: true,
                        digits: true
                    },
                    uname: {
                        required: true,
                        lettersonly: true
                    },

                    uphone: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    uemail: {
                        required: true,
                        email: true
                    },
                    upload: {
                        required: true,
                        extension: "jpg|png"
                    }

                },

                // Specify validation error messages
                messages: {
                    productno: {
                        minlength: "Enter 11 digit number",
                        maxlength: "Enter 11 digit number"
                    },
                    uname:{
                        required: "Please Enter Your Name",
                        lettersonly: "Please Enter Only Letters"
                    },
                    uphone: {
                        minlength: "Enter 10 digit number",
                        maxlength: "Enter 10 digit number"
                    },
                    uemail:{ 
                         required: "Please Enter a Valid Email Address"
                    },
                    upload:{ 
                         required: "Please enter a file with valid extension"
                }
                    
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                    form.submit();
                }
            });
            // Career Form End

            // Get A Quote Form Start
            $("#get_quote").validate({
                ignore: ".ignore",
                // Specify validation rules
                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    get_name: {
                        required: true,
                        lettersonly: true
                    },
                    company_name: {
                        required: true,
                        lettersonly: true
                    },

                    tel_no: {
                        required: true,
                        digits: true
                    },
                    get_email: {
                        required: true,
                        email: true
                    }

                },

                // Specify validation error messages
                messages: {
                    get_name:{
                        required: "Please Enter Your Name",
                        lettersonly: "Please Enter Only Letters"
                    },
                    company_name: {
                        required: "Please Enter Company Name",
                        lettersonly: "Please Enter Only Letters"
                    },
                    tel_no: {
                       required: "Please Enter Contact No.",
                        digits: "Please enter only digits"
                    },
                    get_email: "Please Enter a Valid Email Address"
                    
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                    form.submit();
                }
            });
            // Get A Quote Form Start
            
             // Contact Form Start
            $("#contact-form").validate({
                ignore: ".ignore",
                // Specify validation rules
                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    
                    con_name: {
                        required: true,
                        lettersonly: true
                    },

                    con_no: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    con_email: {
                        required: true,
                        email: true
                    }

                },

                // Specify validation error messages
                messages: {
                    con_name:{
                        required: "Please Enter Your Name",
                        lettersonly: "Please Enter Only Letters"
                    },
                    con_no: {
                        minlength: "Enter 10 digit number",
                        maxlength: "Enter 10 digit number"
                    },
                    con_email: "Please Enter a Valid Email Address"
                    
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                    form.submit();
                }
            });
            // Contact Form End



            // Subscribe Form Start
            $(".subscribe-form").validate({
                ignore: ".ignore",
                // Specify validation rules
                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    email: "required"

                },

                // Specify validation error messages
                messages: {
                    email: "Please Enter a Valid Email Address"
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                    form.submit();
                }
            });
            // Subscribe Form End


});