document.getElementById('mode-btn').addEventListener('click', () => {
    document.body.classList.toggle('dark');
    localStorage.setItem('mode', document.body.classList);
});

if (localStorage.getItem('mode') != ''){
    document.body.classList.add(localStorage.getItem('mode')); 
    document.getElementById('mode-btn').checked = true;
}

document.getElementById('mode-btn2').addEventListener('click', () => {
    document.body.classList.toggle('dark');
    localStorage.setItem('mode2', document.body.classList);
});

if (localStorage.getItem('mode2') != ''){
    document.body.classList.add(localStorage.getItem('mode')); 
    document.getElementById('mode-btn2').checked = true;
}
