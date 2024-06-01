const setReceiverId = (e, id) => {
    e.preventDefault();
    
    

}

document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById('select-conversation-form');
    
    if(!form) {
        return;
    }

    form.onsubmit = (e) => {
        e.preventDefault();
        
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '/chat/index.php/chats/select_conversation', true);
        xhr.onload = () => {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
            }
        }

        xhr.onerror = () => {
            console.log("Request failed");
        }

        const formData = new FormData(form);
        xhr.send(formData);
    } 
});