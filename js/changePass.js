$(document).ready(function() {
    $("#change-submit").click(function() {

        const oldPass = $("#oldPass").val();
        const newPass = $("#newPass").val();
        const cfnewPass = $("#cfnewPass").val();
        console.log(oldPass.length);
        console.log(newPass.length);
        console.log(cfnewPass.length);

        if (!oldPass.length) {
            $("#oldPass").addClass("is-invalid");
        } else {
            $("#oldPass").removeClass("is-invalid");
        }

        if (!newPass.length) {
            $("#newPass").addClass("is-invalid");
        } else {
            $("#newPass").removeClass("is-invalid");
        }

        if (newPass !== cfnewPass) {
            $("#cfnewPass").addClass("is-invalid");
        } else {
            $("#cfnewPass").removeClass("is-invalid");
        }

        if (newPass.length < 6) {
            $("#newPass").addClass("is-invalid");
            $("#nPassErr").text("Passwords must have at least 6 characters Try again.");
        } else {
            $("#newPass").removeClass("is-invalid");
        }


        if (oldPass.length && newPass.length && newPass === cfnewPass && newPass.length >= 6) {
            $.ajax({
                type: "POST",
                url: "process/processChangePass.php",
                data: {
                    oldPass: oldPass,
                    newPass: newPass
                },
                dataType: "JSON",
                success: function(res) {
                    if (res.status === "error") {
                        // Đổi mật khẩu thất bại
                        $("#oldPass").addClass("is-invalid");
                        $("#oPassErr").text(res.message);
                        $('.notify-success').text("Cập nhật không thành công.");
                    } else if (res.status === "success") {
                        // Đổi mật khẩu thành công
                        $('#changePass input[type="password"]').val('');
                        // window.location.reload();
                        $("#changePass").modal("hide");
                        $('.notify-success').text("Cập nhật thành công.");
                    }
                    $('.notify-success').css('display', 'block');
                    setTimeout(function() {
                        $('.notify-success').css('display', 'none');
                    }, 3000);
                }
            })
        }
    })
})