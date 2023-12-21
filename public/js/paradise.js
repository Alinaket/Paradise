const contact_form = document.querySelector(".contact")
const order = document.querySelector(".order")
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



