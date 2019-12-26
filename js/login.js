$(document).ready(function() {
    $("#login-submit").click(function() {
        const email = $("#email-login").val();
        const password = $("#pw-login").val();

        if(!email.length) {
            $("#email-login").addClass("is-invalid");
        } else {
            $("#email-login").removeClass("is-invalid");
        }

        if(!password.length) {
            $("#pw-login").addClass("is-invalid");
        } else {
            $("#pw-login").removeClass("is-invalid");
        }

        if(email.length) {
            $.ajax({
                type: "POST",
                url: "process/processLogin.php",
                data: {
                    email: email,
                    password: password
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.status === "error1") {
                        $("#email-login").addClass("is-invalid");
                        $("#email-login-err").text(response.message1);
                    } else if(response.status === "error2") {
                        $("#pw-login").addClass("is-invalid");
                        $("#pw-err").text(response.message2);
                    } else if(response.status === "success") {
                        $("#login-form").modal("hide");
                        window.location.href = response.url;
                    }
                }
            })
        }
    })
})
