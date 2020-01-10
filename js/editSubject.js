$(document).ready(function() {

    // get data subject
    $(document).on('click', '#editSubjectBtn', function () {
        let subjectID = $('#subjectList').val();
        $.ajax({
            type: "POST",
            url: "process/processGetDataSubject.php",
            data: {
                subjectID: subjectID
            },
            dataType: "JSON",
            success: function (res) {
                if (res.status) {
                    $('#sNameEdit').val(res.subjectName);
                    $('#creEdit').val(res.credits);
                    $('#pMarkEdit').val(res.processMark);
                    $('#testMarkEdit').val(res.testScore);
                } else {
                    alert(res.message);
                }
            }
        })
    })

    // Save subject
    $(document).on('click', '#saveSubject', function () {
        const credits = $("#creEdit").val();
        const processMark = $("#pMarkEdit").val();
        const testScore= $("#testMarkEdit").val();


        // Kiểm tra điều kiện các trường nhập vào
        if (!credits.length) {
            $("#creEdit").addClass("is-invalid");
        } else {
            $("#creEdit").removeClass("is-invalid");
        }
        if (!processMark.length) {
            $("#pMarkEdit").addClass("is-invalid");
        } else {
            $("#pMarkEdit").removeClass("is-invalid");
        }
        if (!testScore.length) {
            $("#testMarkEdit").addClass("is-invalid");
        } else {
            $("#testMarkEdit").removeClass("is-invalid");
        }


        if (credits.length && processMark.length && testScore.length) {
            $.ajax({
                type: "POST",
                url: "process/processManageSubject.php",
                data: {
                    credits: credits,
                    processMark: processMark,
                    testScore: testScore
                },
                dataType: "JSON",
                success: function(res) {
                    if (res.status) {
                        $('.notify-success').text("Cập nhật thành công.");
                        $("#editSubject").modal("hide");
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
})
