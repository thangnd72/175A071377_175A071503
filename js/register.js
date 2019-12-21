$(document).ready(function() {
    $("#register-submit").click(function () {
        const firstName = $("#fName").val();
        const lastName = $("#lName").val();
        const email = $("#email").val();
        const password = $("#pw-register").val();
        const cfpassword = $("#pw-confirm").val();

        //Kiểm tra các trường nhập vào
        if(!firstName.length) {
            $("#fName").addClass("is-invalid");
        } else {
            $("#fName").removeClass("is-invalid")
        }
        if(!lastName.length) {
            $("#lName").addClass("is-invalid");
        } else {
            $("#lName").removeClass("is-invalid");
        }
        if(!email.length) {
            $("#email").addClass("is-invalid");
        } else {
            $("#email").removeClass("is-invalid");
        }
        if(!password.length) {
            $("#pw-register").addClass("is-invalid");
        } else {
            $("#pw-register").removeClass("is-invalid");
        }
        if(password !== cfpassword) {
            $("#pw-confirm").addClass("is-invalid");
        } else {
            $("#pw-confirm").removeClass("is-invalid");
        }
        if(password.length < 6 && password.length > 18) {
            $("#pw-register").addClass("is-invalid");
            $("#passwordErr").text("Password must be between 6 and 18 characters. Try Again!")
        } else {
            $("#pw-register").removeClass("is-invalid");
        }

        // Các trường thoả mãn thì chạy ajax
        if(firstName.length && lastName.length && email.length && password.length >=6 && password.length <= 18 && password === cfpassword ) {
            $.ajax({
                type: "POST",
                url: "process/processRegister.php",
                data: {
                    firstName: firstName,
                    lastName: lastName,
                    email: email,
                    password: password
                },
                dataType: "JSON",
                success: function (response) {
                    if(response.status === "error") {
                        $("#email").addClass("is-invalid");
                        $("#email-err").text(response.message);
                    } else if(response.status === "success") {
                        // Đăng ký thành công
                        $("#register-form").modal("hide")
                        $("#login-form").modal("show");
                        $("#alert-success").addClass("alert alert-success");
                        $("#alert-success").text(response.message);
                    }
                }
            })
        }
    })
})
