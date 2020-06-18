const personnageContainer = document.querySelectorAll('.personnageContainer')

let values = [10,30,50,70,80]

for(i=0; i<personnageContainer.length; i++){

    personnageContainer[i].style.left = values[i]+'%'

}
