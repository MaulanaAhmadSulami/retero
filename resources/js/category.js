// var productTypesByCategory = {
//     '1': ['Laptop', 'VGA', 'Monitor'],
//     '2': ['Headset', 'Keyboard', 'Mouse']
// };

// function updateProductTypes() {
//     var category = document.getElementById('category').value;
//     var productTypeSelect = document.getElementById('productType');

//     productTypeSelect.innerHTML = '';

//     var productTypes = productTypesByCategory[category] || [];

//     productTypes.forEach(productType => {
//         var option = document.createElement('option');
//         option.value = productType;
//         option.textContent = productType;
//         productTypeSelect.appendChild(option);
//     });
// }


// document.addEventListener('DOMContentLoaded', () => {
//     document.getElementById('category').addEventListener('change', updateProductTypes);
//     window.onload = updateProductTypes;
// });

// window.onload = updateProductTypes;