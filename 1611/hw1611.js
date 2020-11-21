'use strict';
//------------1------------
let counter = document.querySelector('.counter');
let plus = document.querySelector('.plus-button');

plus.addEventListener('click', function(){
    counter.value++;
});

let minus = document.querySelector('.minus-button');
minus.addEventListener('click', function(){
    if (counter.value > 0) {
        counter.value--;
    } else {
        return;
    }
});

//--------------2-------------------

let modalButton = document.querySelector('.open-modal-button');
let modalWin = document.querySelector('.modal-window');
modalButton.addEventListener("click", () => {
modalWin.style.display = "block";
});

//---------------3-----------------


let buttonClose = document.querySelector('.close');
buttonClose.addEventListener("click", () => {
modalWin.style.display = null;
});
let buttonCloseWindow = document.querySelector('.close-button');
buttonCloseWindow.addEventListener("click", () => {
modalWin.style.display = null;
});

//---------------4------------------

let progressbar = document.querySelector('.start-scrollbar-button');
let progressbarInner = document.querySelector('.progressbar-inner');
progressbar.onclick = function() { 
progressbarInner.style.width = "100%";
};
