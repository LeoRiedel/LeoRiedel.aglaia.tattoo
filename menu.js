document.addEventListener('click', function () {
    console.log(event.target.id);
    if (event.target.id == 'menu-box') {
        document.getElementById('menu-icon').style.display = 'none';
        document.getElementById('menu-item').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    }
    else {
        document.getElementById('menu-icon').style.display = 'block';
        document.getElementById('menu-item').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    };
});