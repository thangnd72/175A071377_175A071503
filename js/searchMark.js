$(document).ready(function() {
    $('#searchMark').click(function() {
        const userID = $("#studentCode").val();
        const CMT = $("#cmt").val();
        const yearSchool = $("#yearSchool").val();
        const termName = $("#term").val();
        const stage = $("#stage").val();

        if(!userID.length) {
            $("#studentCode").addClass("is-invalid");
        } else {
            $("#studentCode").removeClass("is-invalid");
        }
        if(!CMT.length) {
            $("#cmt").addClass("is-invalid");
        } else {
            $("#cmt").removeClass("is-invalid");
        }

        if(userID.length && CMT.length) {
            $.ajax({
                type: "POST",
                url: "process/processGetMark.php",
                data: {
                    userID: userID,
                    CMT: CMT,
                    yearSchool: yearSchool,
                    termName: termName,
                    stage: stage
                },
                dataType: "JSON",
                success: function(res){
                    $("#viewStudent").html(res.data);
                }
            })
        }
    })
})
