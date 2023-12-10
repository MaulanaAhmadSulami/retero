document.querySelectorAll('.update-comment-btn').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const form = this.nextElementSibling;
        if (form && form.classList.contains('edit-form')) {
            form.classList.toggle('hidden');
        }
    });
});

document.querySelectorAll('.edit-form').forEach(form => {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const commentId = this.getAttribute('data-comment-id');
        if (!commentId) return; // Check if commentId is valid

        const formData = new FormData(this);
        formData.append('_method', 'PUT');

        fetch(`/comments/${commentId}`, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': this.querySelector('input[name="_token"]').value
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const commentBody = document.querySelector(`#comment-body-${commentId}`);
                if (commentBody) {
                    commentBody.textContent = formData.get('comment');
                    this.classList.add('hidden');
                }
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
