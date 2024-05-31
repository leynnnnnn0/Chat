document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.users_container');

    if (!container) {
        return;
    }

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
});
