// function init(){
M.AutoInit(); 
// } 

function Carrusel(){
// console.log('log'); 
// document.addEventListener('DOMContentLoaded', () => {
    var elem = document.querySelector('.carousel');
    var instance = M.Carousel.init(elem, {
        indicators: true,
        duration: 400,
        dist: -90,
        shift: 5,
        padding: 5,
        numVisible: 5,
        indicators: true,
        noWrap: false,
    });

    if (instance.pressed==false) {
         setInterval(()=>{
            instance.next();
        }, 4000);
    }


    // setInterval(() => {
    //     if (instance.pressed==false) {
    //         instance.next();
    //     }
    // }, 3000)
// });
}