
let mudar  = document.querySelector('#link_1');
let voltar = document.querySelector('#link_2');

console.log(mudar)

mudar.onclick = function invisible(){
    
    const login        = document.querySelector('#login');
    const register        = document.querySelector('#register');
    const btn_register = document.querySelector('.register');
    const btn_login    = document.querySelector('#link_2');


    login.style.display        = 'none';
    btn_register.style.display = 'none';
    register.style.display     = 'block';
    btn_login.style.display    = 'inline';
}

voltar.onclick = function invisible(){
    
    const login        = document.querySelector('#login');
    const register        = document.querySelector('#register');
    const btn_register = document.querySelector('.register');
    const btn_login    = document.querySelector('#link_2');


    login.style.display        = 'block';
    btn_register.style.display = 'inline';
    register.style.display     = 'none';
    btn_login.style.display    = 'none';
}