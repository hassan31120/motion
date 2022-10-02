AOS.init();
window.addEventListener('scroll',()=> {
    let content = document.querySelector('.abuoutUs_Js');
    let contentPosition = content.getBoundingClientRect().top;
    let screenPosition = window.innerHeight/1;
    if(contentPosition < screenPosition){
       content.classList.add('active');
    }else{
        content.classList.remove('active');
    }

    let contentt = document.querySelector('.service_js');
    let contenttPosition = content.getBoundingClientRect().top;
    let screenPositiion = window.innerHeight/3;
    if(contenttPosition < screenPositiion){
        contentt.classList.add('activserv');
    }else{
        contentt.classList.remove('activserv');
    }
});
