const image = document.querySelectorAll('.image')
const fantome = document.querySelectorAll('.fantome')


for(let i=0; i<image.length; i++){
    fantome[i].addEventListener(
        'click',
        ()=>{
            image[i].style.display='block'
        }
    )
}

const poubelle = document.querySelector('#poubelle')
const voir = document.querySelector('#voir')


poubelle.addEventListener(
    'click',
    ()=>{
        for(let i=0; i<image.length; i++){
            image[i].style.display='none'
        }
    }
)

voir.addEventListener(
    'click',
    ()=>{
        for(let i=0; i<image.length; i++){
             image[i].style.display='block'
        }
    }
)