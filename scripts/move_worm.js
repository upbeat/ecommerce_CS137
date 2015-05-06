//Move Worm to the right

var imgObj = null;
function init(){
   imgObj = document.getElementById('worm');
   imgObj.style.position= 'relative';
   imgObj.style.left = '0px';
}

function moveRight(){
   imgObj.style.left = parseInt(imgObj.style.left) + 14 + 'px';
}

window.onload =init;
