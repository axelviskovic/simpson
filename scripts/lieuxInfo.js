const black = document.querySelectorAll('.black')


for(let i=0; i<black.length;i++){
    black[i].addEventListener(
        'mouseover',
        ()=>{
            black[i].style.opacity='.4'
        }
    )
    black[i].addEventListener(
        'mouseout',
        ()=>{
            black[i].style.opacity='0'
        }
    )
}