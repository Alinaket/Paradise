const img_mini = document.querySelectorAll(".content .slider_img img")
const img_title = document.querySelector(".content .title_img img")


img_mini.forEach((item)=>{
    item.addEventListener('click', ()=>{
        img_title.src = item.src

    })
})
