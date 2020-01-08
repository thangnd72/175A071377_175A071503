$(document).ready(function () {

    // Add Posts

    $("#newPostBtn").click(function () {
        const category = $("#category").val();
        const title = $("#title").val();
        const content = CKEDITOR.instances['contentPost'].getData();
        const author = $("#author").val();
        const description = $("#description").val();

        if (!title.length) {
            $("#title").addClass("is-invalid");
        } else {
            $("#title").removeClass("is-invalid");
        }
        if (!category.length) {
            $("#category").addClass("is-invalid");
        } else {
            $("#category").removeClass("is-invalid");
        }
        if (!content.length) {
            $("#contentPost").addClass("is-invalid");
        } else {
            $("#contentPost").removeClass("is-invalid");
        }
        if (!author.length) {
            $("#author").addClass("is-invalid");
        } else {
            $("#author").removeClass("is-invalid");
        }
        if (!description.length) {
            $("#description").addClass("is-invalid");
        } else {
            $("#description").removeClass("is-invalid");
        }

        if (category.length && title.length && description.length && content.length && author.length) {
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
                success: function (res) {
                    if (res.status) {
                        $('.notify-success').addClass("alert alert-success");
                        $('.notify-success').text("Đã thêm thành công.");
                        $('input[type="text"], #category').val('');
                        CKEDITOR.instances['contentPost'].setData('');
                    } else {
                        $('.notify-success').text("Thêm không thành công.");
                    }
                    $('.notify-success').css('display', 'block')
                    setTimeout(function () {
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

    $("#newUserBtn").click(function () {
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

        // Kiểm tra điều kiện các trường nhập vào
        if (!firstName.length) {
            $("#fName").addClass("is-invalid");
        } else {
            $("#fName").removeClass("is-invalid");
        }
        if (!lastName.length) {
            $("#lName").addClass("is-invalid");
        } else {
            $("#lName").removeClass("is-invalid");
        }
        if (!email.length) {
            $("#email").addClass("is-invalid");
            $("#emailErr").text("Email is required.");
        } else {
            $("#email").removeClass("is-invalid");
        }
        if (!password.length) {
            $("#pwd").addClass("is-invalid");
        } else {
            $("#pwd").removeClass("is-invalid");
        }
        if (password !== cfpassword) {
            $("#cfpwd").addClass("is-invalid");
        } else {
            $("#cfpwd").removeClass("is-invalid");
        }
        if (password.length < 6) {
            $("#pwd").addClass("is-invalid");
            $("#passwordErr").text("Passwords must have at least 6 characters Try again.");
        } else {
            $("#pwd").removeClass("is-invalid");
        }
        if (level == '') {
            $("#level").addClass("is-invalid");
        } else {
            $("#level").removeClass("is-invalid");
        }
        if (!userID.length) {
            $("#idUser").addClass("is-invalid");
        } else {
            $("#idUser").removeClass("is-invalid");
        }

        // Các trường thoả mãn chạy ajax
        if (firstName.length && lastName.length && email.length && password.length >= 6 && password === cfpassword) {
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
                success: function (res) {
                    // Thêm thành công
                    if (res.status) { // TRUE
                        // Set nội dung tag div thông báo kết quả
                        $('.notify-success').text("Thêm thành công.");
                        // Clear giá trị các trường nhập vào
                        $('input[type="text"],input[type="password"],textarea, #level').val('');
                    }
                    // Email đã tồn tại
                    if (res.status == false && res.error == "existMail") {
                        $('.notify-success').text("Thêm không thành công.");
                        $("#email").addClass("is-invalid");
                        $("#emailErr").text(res.message);
                    }
                    // userID đã tồn tại
                    if (res.status == false && res.error == "existUser") {
                        $('.notify-success').text("Thêm không thành công.");
                        $("#idUser").addClass("is-invalid");
                        $("#idUserErr").text(res.message);
                    }
                    // level k hợp lệ
                    if (res.status == false && res.error == "validLevel") {
                        $('.notify-success').text(res.message);
                    }
                    // set trang thái tag div được hiển thị và ẩn sau 3s
                    $('.notify-success').css('display', 'block')
                    setTimeout(function () {
                        $('.notify-success').css('display', 'none');
                        $('.notify-success').text('');
                    }, 3000);
                }
            })
        }
    })

    // Edit User

    $(document).on('click', '#editUserBtn', function () {
        let userID = $(this).data("user");
        $("#editUser").data('user', userID);
        $.ajax({
            type: "POST",
            url: "admin/process/processGetDataUser.php",
            data: {
                userID: userID
            },
            dataType: "JSON",
            success: function (res) {
                if (res.status) {
                    $('#userNameEdit').val(res.userName);
                    $('#phoneEdit').val(res.phone);
                    $('#contactEdit').val(res.contact);
                    $('#jobEdit').val(res.job);
                } else {
                    alert(res.message);
                }
            }
        })
    })

    //Save user change
    $(document).on('click', '#saveUser', function () {
        const userName = $("#userNameEdit").val();
        const job = $("#jobEdit").val();
        const phone = $("#phoneEdit").val();
        const contact = $("#contactEdit").val();
        const userID = $("#editUser").data('user');

        // Kiểm tra điều kiện các trường nhập vào
        if (!userName.length) {
            $("#userNameEdit").addClass("is-invalid");
        } else {
            $("#userNameEdit").removeClass("is-invalid");
        }


        if (userName.length) {
            $.ajax({
                type: "POST",
                url: "admin/process/processEditUser.php",
                data: {
                    userName: userName,
                    phone: phone,
                    contact: contact,
                    job: job,
                    userID: userID
                },
                dataType: "JSON",
                success: function(res) {
                    if (res.status) {
                        //khi thay đổi info user and save thì cập nhật lại user 
                        $("#showUser").load('admin/process/processUser.php');
                        $('.notify-success').text("Cập nhật thành công.");
                        $("#editUser").modal("hide");
                    } else {
                        $('.notify-success').text("Cập nhật không thành công.");
                        alert(res.message);
                    }
                    $('.notify-success').css('display', 'block')
                    setTimeout(function() {
                        $('.notify-success').css('display', 'none');
                        $('.notify-success').text('');
                    }, 3000);
                }
            })
        }
    })
    // Delete User
    $(document).on('click', '#deleteUserBtn', function () {
        let data = $(this).data('user');
        $("#yesDel").data('userID', data);
        $('#yesDel').click(function () {
            // Lấy giá trị id user từ attr data-user
            let userID = $(this).data('userID');

            $.ajax({
                type: "POST",
                url: "admin/process/processDeleteUser.php",
                data: {
                    userID: userID
                },
                dataType: "JSON",
                success: function (res) {
                    // console.log(res);
                    if (res.status) {
                        $("#showUser").load('admin/process/processUser.php');
                        $('.notify-success').text("Xoá thành công.");
                    } else {
                        $('.notify-success').text("Xoá không thành công.");
                        alert(res.message);
                    }
                    $("#confirm-delete").modal("hide");
                    $('.notify-success').css('display', 'block')
                    setTimeout(function () {
                        $('.notify-success').css('display', 'none');
                        $('.notify-success').text('');
                    }, 3000);
                }
            })
        })
    })


    // Edit Account

    $(document).on('click', '#editAccBtn', function () {
        let accID = $(this).data("acc");
        $("#editAcc").data('acc', accID);
        $.ajax({
            type: "POST",
            url: "admin/process/processGetDataAcc.php",
            data: {
                accID: accID
            },
            dataType: "JSON",
            success: function (res) {
                if (res.status) {
                    $('#fNameEdit').val(res.firstName);
                    $('#lNameEdit').val(res.lastName);
                    $('#emailEdit').val(res.email);
                    $('#levelEdit').val(res.level);
                } else {
                    alert(res.message);
                }
            }
        })
    })

    // Save account change
    $(document).on('click', '#saveAcc', function () {
        const firstName = $("#fNameEdit").val();
        const lastName = $("#lNameEdit").val();
        const email = $("#emailEdit").val();
        const level = $("#levelEdit").val();
        const accID = $("#editAcc").data('acc');

        // Kiểm tra điều kiện các trường nhập vào
        if (!firstName.length) {
            $("#fNameEdit").addClass("is-invalid");
        } else {
            $("#fNameEdit").removeClass("is-invalid");
        }
        if (!lastName.length) {
            $("#lNameEdit").addClass("is-invalid");
        } else {
            $("#lNameEdit").removeClass("is-invalid");
        }
        if (!email.length) {
            $("#emailEdit").addClass("is-invalid");
        } else {
            $("#emailEdit").removeClass("is-invalid");
        }


        if (firstName.length && lastName.length && email.length) {
            $.ajax({
                type: "POST",
                url: "admin/process/processEditAcc.php",
                data: {
                    firstName: firstName,
                    lastName: lastName,
                    email: email,
                    level: level,
                    accID: accID
                },
                dataType: "JSON",
                success: (res) => {
                    if (res.status) {
                        //khi thay đổi info account and save thì cập nhật lại account
                        $("#showAcc").load('admin/process/processAcc.php');
                        $('.notify-success').text("Cập nhật thành công.");
                        $("#editAcc").modal("hide");
                    } else {
                        $('.notify-success').text("Cập nhật không thành công.");
                        alert(res.message);
                    }
                    $('.notify-success').css('display', 'block')
                    setTimeout(function() {
                        $('.notify-success').css('display', 'none');
                        $('.notify-success').text('');
                    }, 3000);
                }
            })
        }
    })

    // Delete Account
    $(document).on('click', '#deleteAccBtn', function() {
        let data = $(this).data('acc');
        $("#yesDel").data('accID', data);
        $('#yesDel').click(function () {
            // Lấy giá trị id acc từ attr data-user
            let accID = $(this).data('accID');

            $.ajax({
                type: "POST",
                url: "admin/process/processDeleteAcc.php",
                data: {
                    accID: accID
                },
                dataType: "JSON",
                success: function (res) {
                    if (res.status) {
                        $("#showAcc").load('admin/process/processAcc.php');
                        $('.notify-success').text("Xoá thành công.");
                    } else {
                        $('.notify-success').text("Xoá không thành công.");
                        alert(res.message);
                    }
                    $("#confirm-delete").modal("hide");
                    $('.notify-success').css('display', 'block')
                    setTimeout(function () {
                        $('.notify-success').css('display', 'none');
                        $('.notify-success').text('');
                    }, 3000);
                }
            })
        })
    })
})
