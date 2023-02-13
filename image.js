const canvas = document.getElementById('rysuj');
const ctx = canvas.getContext('2d');

const canvasOffsetX = canvas.offsetLeft;
const canvasOffsetY = canvas.offsetTop;

canvas.width = 500;
canvas.height = 500;

let isPainting = false;
let lineWidth = 5;
let startX;
let startY;


narzedia.addEventListener('click', e => {
    if (e.target.id === 'clear') {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
});

narzedia.addEventListener('change', e => {
    if(e.target.id === 'strok') {
        ctx.strokeStyle = e.target.value;
    }

    if(e.target.id === 'lineWidth') {
        lineWidth = e.target.value;
    }
    
});

const draw = (e) => {
    if(!isPainting) {
        return;
    }

    ctx.lineWidth = lineWidth;
    ctx.lineCap = 'round';

    ctx.lineTo(e.clientX - canvasOffsetX, e.clientY);
    ctx.stroke();
}

canvas.addEventListener('mousedown', (e) => {
    isPainting = true;
    startX = e.clientX;
    startY = e.clientY;
});

canvas.addEventListener('mouseup', e => {
    isPainting = false;
    ctx.stroke();
    ctx.beginPath();
});

canvas.addEventListener('mousemove', draw);


function convert(){
    var canvas = document.getElementById("rysuj");
    var ctx= canvas.getContext("2d");
    var url = canvas.toDataURL();
	var dane = document.getElementsByName("Base64");
    dane.value = url;
  };

  