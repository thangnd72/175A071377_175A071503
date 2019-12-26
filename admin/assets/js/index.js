$(document).ready(function() {
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
                    setTimeout(()=>{
                      $('.notify-success').css('display', 'none');
                      $('.notify-success').text('');
                    }, 3000);
                }
            })
        } else {
            alert("Error");
        }
    })
})
