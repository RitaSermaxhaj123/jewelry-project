function changePhoto(nr){
      switch(nr){
            case 1: document.getElementById('main').style.backgroundImage = "url(images/marble.jpg)"
            break
            case 2: document.getElementById('main').style.backgroundImage = "url(images/flush.jpg)"
            break
            case 3: document.getElementById('main').style.backgroundImage = "url(images/bokeh.jpg)"
            break
            case 4: document.getElementById('main').style.backgroundImage = "url(images/fluska.jpg)"
            break
            case 5: document.getElementById('main').style.backgroundImage = "url(images/grad.jpg)"
            break
            case 6: document.getElementById('main').style.backgroundImage = "url(images/pika.jpg)"
            break
            default: document.getElementById('main').style.backgroundImage = ""
      }
}

function insert(){
let card=document.getElementById('main')

let title=document.getElementById('title').value
let color=document.getElementById('color').value
let desc=document.getElementById('desc').value

let h1=document.createElement("h1")
h1.setAttribute("class","mainTitle")
h1.innerHTML=title
h1.style.color=color
card.appendChild(h1)

let p=document.createElement("p")
p.setAttribute("class","mainPara")
p.innerHTML=desc
p.style.color=color
card.appendChild(p)

      if(title !== null  && color !== null && desc !== null){
        let button = document.getElementById('btnInsert')
        button.classList.add('disabled')
      }
}



