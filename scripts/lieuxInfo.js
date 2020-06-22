const hoverImg = document.querySelectorAll('.hoverImg')
const black = document.querySelectorAll('.black')


for(let i=0; i<hoverImg.length;i++){
    hoverImg[i].addEventListener(
        'mouseover',
        ()=>{
            hoverImg[i].style.opacity='1'
            black[i].style.opacity='.4'
        }
    )
}