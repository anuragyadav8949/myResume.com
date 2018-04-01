$(function(){
	$("#login_form").validate({

		rules: {
         
           email_id: "required",
            password:"required",
        },

        submitHandler: function(form) {
            var email_id = document.getElementById('person_username').value; 
            var password = document.getElementById('person_password').value;
                if (document.getElementById('rememberme').checked) 
                    {
                        var rememberme=1;
                    }else
                    {
                        var rememberme=0;
                    }


        data = {
        	email_id:email_id,
        	password:password,
            rememberme:rememberme,
        }    

        $.ajax({
        	type: "POST",
			url: base_url+"login/CheckLogin", 
            data : data,
            dataType:"json",
            success: function(response){
            	if(response.success==true)
            	{
                     alert(response.message);
                     
                    window.location.href=response.linkn;
                    //location.reload();
                } else {
                        alert(response.message);
                         location.reload();
                      	}
            } 
        });
        }
	});
});