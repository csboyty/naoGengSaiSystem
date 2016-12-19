var patientCreateOrUpdate=(function(config,functions){
    return{
        submitForm:function(form){
            var me=this;
            functions.showLoading();
            $(form).ajaxSubmit({
                dataType:"json",
                success:function(response){
                    if(response.success){
                        $().toastmessage("showSuccessToast",config.messages.optSuccess);
                        setTimeout(function(){
                            window.location.href="patient/index";
                        },3000);
                    }else{
                        functions.ajaxReturnErrorHandler(response.error_code);
                    }
                },
                error:function(){
                    functions.ajaxErrorHandler();
                }
            });
        }
    }
})(config,functions);

$(document).ready(function(){
    $("#myForm").validate({
        ignore:[],
        rules: {
            id: {
                required:true,
                maxlength:32
            },
            doctor: {
                required:true,
                maxlength:32
            },
            disease_date: {
                required:true
            },
            AD: {
                required:true,
                maxlength:32
            },
            height: {
                required:true,
                maxlength:8
            },
            weight: {
                required:true,
                maxlength:8
            },
            waist: {
                required:true,
                maxlength:8
            },
            hip: {
                required:true,
                maxlength:8
            },
            BMI: {
                required:true,
                maxlength:32
            },
            date: {
                required:true
            },
            fullname:{
                required:true,
                maxlength:32
            },
            sex: {
                required:true
            },
            age:{
                required:true,
                number:true,
                maxlength:3
            },
            address:{
                required:true,
                maxlength:64
            },
            tel:{
                required:true,
                maxlength:32
            }
        },
        messages: {
            id: {
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            },
            doctor: {
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            },
            disease_date: {
                required:config.validErrors.required
            },
            AD: {
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            },
            height: {
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",8)
            },
            weight: {
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",8)
            },
            waist: {
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",8)
            },
            hip: {
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",8)
            },
            BMI: {
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            },
            date: {
                required:config.validErrors.required
            },
            fullname:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            },
            sex: {
                required:config.validErrors.required
            },
            age:{
                required:config.validErrors.required,
                number:config.validErrors.number,
                maxlength:config.validErrors.maxLength.replace("${max}",3)
            },
            address:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",64)
            },
            tel:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            }
        },
        submitHandler:function(form) {
            patientCreateOrUpdate.submitForm(form);
        }
    });
});
