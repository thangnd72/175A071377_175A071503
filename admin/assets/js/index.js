$(document).ready(function() {

    // Add Posts

    $("#newPostBtn").click( function(){
        const category = $("#category").val();
        const title = $("#title").val();
        const content = CKEDITOR.instances['contentPost'].getData();
        const author = $("#author").val();
        const description = $("#description").val();

        if(!title.length) {
            $("#title").addClass("is-invalid");
        } else {
             $("#title").removeClass("is-invalid");
        }
         if(!category.length) {
             $("#category").addClass("is-invalid");
        } else {
             $("#category").removeClass("is-invalid");
        }
         if(!content.length) {
             $("#contentPost").addClass("is-invalid");
        } else {
             $("#contentPost").removeClass("is-invalid");
        }
         if(!author.length) {
             $("#author").addClass("is-invalid");
        } else {
             $("#author").removeClass("is-invalid");
        }
        if(!description.length) {
            $("#description").addClass("is-invalid");
       } else {
            $("#description").removeClass("is-invalid");
       }

        if(category.length && title.length && description.length && content.length && author.length) {
            $.ajax({
                type: "POST",
                url: "admin/process/processNewPosts.php",
                data: {
                    category: category,
                    title: title,
                    content: content,
                    author: author,
                    description: description
                },
                dataType: "JSON",
                success: function(res) {
                    if(res.status) {
                        $('.notify-success').addClass("alert alert-success");
                        $('.notify-success').text("Đã thêm thành công.");
                        $('input[type="text"], #category').val('');
                        CKEDITOR.instances['contentPost'].setData('');
                    } else {
                        $('.notify-success').text("Thêm không thành công.");
                    }
                    $('.notify-success').css('display', 'block')
                    setTimeout(function(){
                      $('.notify-success').css('display', 'none');
                      $('.notify-success').text('');
                    }, 3000);
                }
            })
        } else {
            alert("Error");
        }
    })

    // Add Acount and User

    $("#newUserBtn").click( function () {
        const firstName = $("#fName").val();
        const lastName = $("#lName").val();
        const email = $("#email").val();
        const password = $("#pwd").val();
        const cfpassword = $("#cfpwd").val();
        const level = $("#level").val();
        const userID = $("#idUser").val();
        const job = $("#jobUser").val();
        const phone = $("#phone").val();
        const contact = $("#eContact").val();

        // Kiểm tra checkbox được check: 0 = False ; 1 =True
        const newUser = $("#newUser:checked").length;

        // Kiểm tra checkbox được check thì điều kiện kiểm tra trường userID được bật
        if(newUser == 1) {
            if(!idUser.length) {
                $("#idUser").addClass("is-invalid");
            } else {
                $("#idUser").removeClass("is-invalid");
            }
        }
        // Kiểm tra điều kiện các trường nhập vào
        if(!firstName.length) {
            $("#fName").addClass("is-invalid");
        } else {
            $("#fName").removeClass("is-invalid");
        }
        if(!lastName.length) {
            $("#lName").addClass("is-invalid");
        } else {
            $("#lName").removeClass("is-invalid");
        }
        if(!email.length) {
            $("#email").addClass("is-invalid");
            $("#emailErr").text("Email is required.");
        } else {
            $("#email").removeClass("is-invalid");
        }
        if(!password.length) {
            $("#pwd").addClass("is-invalid");
        } else {
            $("#pwd").removeClass("is-invalid");
        }
        if(password!==cfpassword) {
             $("#cfpwd").addClass("is-invalid");
        } else {
            $("#cfpwd").removeClass("is-invalid");
        }
        if(password.length < 6) {
             $("#pwd").addClass("is-invalid");
             $("#passwordErr").text("Passwords must have at least 6 characters Try again.");
        } else {
             $("#pwd").removeClass("is-invalid");
        }
        if(level == '') {
            $("#level").addClass("is-invalid");
        } else {
            $("#level").removeClass("is-invalid");
        }

        // Các trường thoả mãn chạy ajax
        if(firstName.length && lastName.length && email.length && password.length >=6 && password === cfpassword ) {
            $.ajax({
                type: "POST",
                url: "admin/process/processNewAcc.php",
                data: {
                    firstName: firstName,
                    lastName: lastName,
                    email: email,
                    password: password,
                    level: level,
                    userID: userID,
                    phone: phone,
                    contact: contact,
                    job: job
                },
                dataType: "JSON",
                success: function(res) {
                    // Thêm thành công
                    if(res.status) { // TRUE
                        // Set nội dung tag div thông báo kết quả
                        $('.notify-success').text("Thêm thành công.");
                        // Clear giá trị các trường nhập vào
                        $('input[type="text"],input[type="password"],textarea, #level').val('');
                        $('input:checkbox').prop("checked", false);
                    }
                    // Email đã tồn tại
                    if (res.status == false && res.error == "existMail") {
                        $('.notify-success').text("Thêm không thành công.");
                        $("#email").addClass("is-invalid");
                        $("#emailErr").text(res.message);
                    }
                    // idPerson đã tồn tại
                    if (res.status == false && res.error == "existPerson") {
                        $('.notify-success').text("Thêm không thành công.");
                        $("#idPerson").addClass("is-invalid");
                        $("#idPersonErr").text(res.message);
                    }
                    // set trang thái tag div được hiển thị và ẩn sau 3s
                    $('.notify-success').css('display', 'block')
                    setTimeout(function(){
                      $('.notify-success').css('display', 'none');
                      $('.notify-success').text('');
                    }, 3000);
                }
            })
        }
    })
})
