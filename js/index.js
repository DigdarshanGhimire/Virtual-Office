
let hamburger = document.getElementById('hamburg');
let menu = document.getElementById('navlist')
let open = false;

function openclosemenu(){
    if (open){
        menu.style.display = 'none';
        open=false;
    }
    else{
        menu.style.display = 'flex';
        open=true;
    }
}

hamburger.addEventListener('click',openclosemenu)