document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById("message-form");
    const button = document.querySelector(".send-message-btn");
    const container = document.querySelector('.users_container');
    const inputBox = document.querySelector('#message_input');

    if(form && button) {
        form.onsubmit = (e) => {
            e.preventDefault();
        }
    
        button.addEventListener('click', () => {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/chat/index.php/chats/send', true);
            xhr.onload = () => {
                if (xhr.status === 200) {
                    console.log(xhr.response);
                    console.log("CEND BUTTON");
                    inputBox.value = '';
                }
            }
            const formData = new FormData(form);
            xhr.send(formData);
        })
    }

    if(container) {
        setInterval(() => {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', '/chat/index.php/chats/users', true);
            xhr.onload = () => {
                if (xhr.status === 200) {
                    container.innerHTML = xhr.responseText;
                } else {
                    console.error(`Failed to fetch users: ${xhr.status} ${xhr.statusText}`);
                }
            };
            xhr.onerror = () => {
                console.log("Request failed");
            };
            xhr.send();
        }, 500);
    }
});
