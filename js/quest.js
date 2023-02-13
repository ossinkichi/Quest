const btn_fail = document.querySelector('.fail');
const btn_success = document.querySelector('.con');
const btn_andamento = document.querySelector('.and');

btn_fail.onclick = function fail(){

    const fail = document.querySelector('#fail');
    const success = document.querySelector('#con');
    const andamento = document.querySelector('#and');

    fail.style.display = 'block';
    success.style.display = 'none';
    andamento.style.display = 'none';
}

btn_success.onclick = function success(){

    const fail = document.querySelector('#fail');
    const success = document.querySelector('#con');
    const andamento = document.querySelector('#and');

    fail.style.display = 'none';
    success.style.display = 'block';
    andamento.style.display = 'none';
}

btn_andamento.onclick = function andamento(){

    const fail = document.querySelector('#fail');
    const success = document.querySelector('#con');
    const andamento = document.querySelector('#and');

    fail.style.display = 'none';
    success.style.display = 'none';
    andamento.style.display = 'block';
}