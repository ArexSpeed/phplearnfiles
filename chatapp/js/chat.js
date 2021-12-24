const form = document.querySelector(".typing-area");
const inputField = form.querySelector(".input-field");
const sendBtn = form.querySelector("button");
const chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) => {
  e.preventDefault();
}

sendBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/insert-chat.php", true);
  xhr.onload = () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        inputField.value = '';
        
      }
    }
  };
  //Send data through ajax to php
  let formData = new FormData(form);
  xhr.send(formData); //this send to php
};

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/get-chat.php", true);
  xhr.onload = () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        chatBox.innerHTML = data;
      }
    }
  }

  let formData = new FormData(form);
  xhr.send(formData); //this send to php
}, 500);