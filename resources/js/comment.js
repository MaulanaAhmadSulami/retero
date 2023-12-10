$(document).ready(function(){
    $('.edit-comment-btn').on('click', function(){
        var commentId = $(this).data('comment-id');
        $(`.edit-comment-form[data-comment-id="${commentId}"]`).toggleClass('hidden');
    });


    $('.edit-comment-form').on('submit', function(e) {
        e.preventDefault();
        
        var commentId = $(this).attr('data-comment-id');
        var commentText = $(this).find('.edit-textarea').val();

        $.ajax({
            url : `/comments/${commentId}`,
            type : 'POST',
            data : { _method: 'PATCH', content: commentText },
            headers : { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
            success: function(response){
                if(response.success){
                    $(`#comment-body-${commentId}`).text(response.newComment);
                    $(`.edit-comment-form[data-comment-id="${commentId}"]`).addClass('hidden');
                }
            },
            error: function(error){
                console.log(error);
            }
        });
    });

    $('.delete-comment-btn').on('click', function(e){
        if(!confirm('Are you sure to delete your comment?')){
            e.preventDefault();
        }
    });
});