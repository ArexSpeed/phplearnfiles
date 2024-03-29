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
        scrollToBottom();
      }
    }
  };
  //Send data through ajax to php
  let formData = new FormData(form);
  xhr.send(formData); //this send to php
};

//remove auto scrol when someone try to check older msg in top
chatBox.onmouseenter = () => {
  chatBox.classList.add("active");
}
chatBox.onmouseleave = () => {
  chatBox.classList.remove("active");
}

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/get-chat.php", true);
  xhr.onload = () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        chatBox.innerHTML = data;
        if(!chatBox.classList.contains("active")){
          scrollToBottom();
        }
      }
    }
  }

  let formData = new FormData(form);
  xhr.send(formData); //this send to php
}, 500);

function scrollToBottom(){
  chatBox.scrollTop = chatBox.scrollHeight;
}