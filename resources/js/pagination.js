// $(document).ready(function() {
//     $('#load-more').on('click', function(e) {
//         e.preventDefault();

//         // Get the next page URL from the data attribute
//         var nextPageUrl = $(this).data('next-page-url');
//         if (!nextPageUrl) return; // If there's no next page, don't do anything

//         $.ajax({
//             url: nextPageUrl,
//             type: 'GET',
//             success: function(data) {
//                 // Append the new products to the container
//                 $('#products-container').append(data.products);

//                 // Update the "View More" button's data attribute with the next page URL
//                 if (data.next_page_url) {
//                     $('#load-more').data('next-page-url', data.next_page_url);
//                 } else {
//                     // If there's no next page URL, remove the "View More" button
//                     $('#load-more').remove();
//                 }
//             },
//             error: function(error) {
//                 console.error('Error:', error);
//             }
//         });
//     });
// });
