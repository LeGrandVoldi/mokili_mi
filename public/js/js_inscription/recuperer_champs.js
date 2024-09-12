let btn_scroll = document.getElementById('scroll_bas');
let input1s = document.querySelectorAll('.input1');
let body = document.getElementById('body');

btn_scroll.addEventListener('click',function(){
    window.scrollTo({
        top: 1000,
        left: 0,
        behavior: 'smooth'
    });
})

input1s.forEach(function(input1){
    input1.addEventListener('click',function(){
        input1.style.backgroundColor = "#F7F9F9"
        input1.style.color = "#2C3E50"
    })
    input1.addEventListener('mouseout',function(){
        input1.style.backgroundColor = "#273746"
        input1.style.color = "white"
    })
    
})