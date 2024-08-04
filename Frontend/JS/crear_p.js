document.addEventListener('DOMContentLoaded', function() {
    let form = document.getElementById('postForm');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        let image = document.getElementById('image').value;
        let title = document.getElementById('title').value;
        let text = document.getElementById('text').value;
        
        let posts = JSON.parse(localStorage.getItem('posts')) || [];
        
        posts.push({ image: image, title: title, text: text });
        
        localStorage.setItem('posts', JSON.stringify(posts));

        window.location.href = 'publicaciones.html';
    });
});