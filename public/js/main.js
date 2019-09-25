
const input = document.querySelectorAll("input");
const username = document.getElementById('username')
const password = document.getElementById('password')

let fadeOffIcons = (currentInputField) => {
    currentInputField.addEventListener("input", ($event) => {
        if ($event.target.value.length > 18) {
            console.log("hello")
            $event.target.nextElementSibling.classList.add("fadeOff");
        } else {
            $event.target.nextElementSibling.classList.remove("fadeOff");
        }
    });
}


//Iterate form input fields
input.forEach(element => {
    let currentInputField = element
    fadeOffIcons(currentInputField);
});

window.onload = ()=>{botmanChatWidget.open(); return false;}