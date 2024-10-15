document.getElementById('toggle-link').addEventListener('click', function(e) {
    e.preventDefault();

    var content = document.getElementById('toggle-content');
    var info = document.getElementById('toggle-info');

    var link = document.getElementById('toggle-link');
    
    if (content.style.display === 'none') {
        content.style.display = 'flex';
        info.style.margin = '20px 0';
        link.classList.toggle('changed-bg');
    } else {
        content.style.display = 'none'
        info.style.margin = '50px 0';
        link.classList.remove('changed-bg');
    }

});
