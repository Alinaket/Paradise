const contact_form = document.querySelector(".contact")
const order = document.querySelector(".order")
let currentIndex = 0;
const sliders = document.querySelectorAll('.text_slider > div');
let transitioning = false;
let intervelContact = null
let intervelOrder = null


function contact_block() {
    if(intervelContact){
        clearTimeout(intervelContact)
        intervelContact = null
    }
    if(!contact_form.classList.contains("open")){
        contact_form.classList.remove('none')
    }
    setTimeout(()=>{
        contact_form.classList.toggle('open')
    }, 0)
    intervelContact = setTimeout(()=>{
        if(contact_form.classList.contains("open")){
            contact_form.classList.remove('none')
        }else{
            contact_form.classList.add('none')
        }
        intervelContact = null
    }, 400)

}
function order_block() {

    if(intervelOrder){
        clearTimeout(intervelOrder)
        intervelOrder = null
    }
    if(!order.classList.contains("open")){
        order.classList.remove('none')
    }
    setTimeout(()=>{
        order.classList.toggle('open')
    }, 0)
    intervelOrder = setTimeout(()=>{
        if(order.classList.contains("open")){
            order.classList.remove('none')
        }else{
            order.classList.add('none')
        }
        intervelOrder = null
    }, 400)
}








function showSlide(index) {
    if (transitioning) return;

    transitioning = true;
    fadeOut(sliders[currentIndex], () => {
        fadeIn(sliders[index], () => {
            sliders[currentIndex].classList.remove('active');
            sliders[index].classList.add('active');
            currentIndex = index;
            transitioning = false;
        });
    });
}

function fadeIn(element, callback) {
    element.style.opacity = '0';
    element.style.display = 'block';

    let opacity = 0;

    function updateOpacity() {
        opacity += 0.05; // уменьшаем шаг
        element.style.opacity = opacity.toFixed(2);

        if (opacity < 1) {
            requestAnimationFrame(updateOpacity);
        } else {
            if (callback) callback();
        }
    }

    updateOpacity();
}

function fadeOut(element, callback) {
    element.style.opacity = '1';

    let opacity = 1;

    function updateOpacity() {
        opacity -= 0.02; // уменьшаем шаг
        element.style.opacity = opacity.toFixed(2);

        if (opacity > 0) {
            requestAnimationFrame(updateOpacity);
        } else {
            element.style.display = 'none';
            if (callback) callback();
        }
    }

    updateOpacity();
}

function changeSlide(direction) {
    const newIndex = (currentIndex + direction + sliders.length) % sliders.length;
    showSlide(newIndex);
}


