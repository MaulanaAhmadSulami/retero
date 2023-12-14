
// function createRemoveButton() {
//     let removeButton = document.createElement('button');
//     removeButton.type = 'button';
//     removeButton.textContent = 'Remove';
//     removeButton.classList.add('py-1', 'px-2', 'bg-button', 'text-[#000]', 'ml-2');
//     removeButton.onclick = function() {
//         this.parentElement.remove();
//     };
//     return removeButton;
// }

// function addAdvantage(){
//     let container = document.getElementById("advantages");
//     let current_advantages = container.querySelectorAll('input[name="advantages[]"]').length;

//     if (current_advantages >= 5){
//         alert("You can only add up to 5 advantages!");
//         return;
//     }
    
//     let inputContainer = document.createElement('div');
//     let input = document.createElement('input');
//     input.type = 'text';
//     input.name = 'advantages[]';
//     input.classList.add('w-full', 'mb-2', 'bg-button', 'border', 'mt-2');
    
//     let removeButton = createRemoveButton();
    
//     inputContainer.appendChild(input);
//     inputContainer.appendChild(removeButton);
    
//     container.appendChild(inputContainer);
    
    
    
// }

// function addDisadvantage(){
//     let container = document.getElementById("disadvantages");
//     let current_disadvantages = container.querySelectorAll('input[name="disadvantages[]"]').length;
    
    
//     if(current_disadvantages >= 5){
//         alert("You can only add up to 5 disadvantages!");
//         return;
//     }
    
//     let inputContainer = document.createElement('div');
//     let input = document.createElement('input');
//     input.type = 'text';
//     input.name = 'disadvantages[]';
//     input.classList.add('w-full', 'mb-2', 'bg-button', 'border', 'mt-2');
    
//     let removeButton = createRemoveButton();
    
//     inputContainer.appendChild(input);
//     inputContainer.appendChild(removeButton);
    
//     container.appendChild(inputContainer);

// }

// document.addEventListener('DOMContentLoaded', () => {
//     document.getElementById('addAdvantageButton').addEventListener('click', addAdvantage);
//     document.getElementById('addDisadvantageButton').addEventListener('click', addDisadvantage);
// })