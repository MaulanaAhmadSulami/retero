// document.addEventListener('DOMContentLoaded', () => {
//     const registerForm = document.getElementById('registerForm');
//     const registerBtn = document.getElementById('registerBtn');

//     registerForm.addEventListener('input', () => {
//         let allFilled = true;
//         document.querySelectorAll('#registerForm input[required]').forEach(input => {
//             if (!input.value) {
//                 allFilled = false;
//             }
//         });

//         registerBtn.disabled = !allFilled;
//         if (allFilled) {
//             registerBtn.classList.remove('opacity-50', 'cursor-not-allowed');
//         }
//     });
// });
