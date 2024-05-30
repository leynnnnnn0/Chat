setInterval(() => {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', '/chat/index.php/chats/users' , true);
    xhr.onload = () => {
        if(xhr.status === 200)
            {
                console.log(xhr.response);
            }
            else {
                console.log(xhr.status);
            }
    }
    xhr.onerror = () => {
        console.log("Request failed");
    }

    xhr.send();
}, 5000);