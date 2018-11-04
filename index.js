var imageObj;

function download()
{
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");
    
    context.fillRect(0, 0, canvas.width, canvas.height);
    imageObj = new Image();
    
    imageObj.onload = function(){
        context.drawImage(imageObj, 100, 100, 900,1600);
        context.font = "50pt Calibri";
        context.fillText(document.getElementById("txtDomanda").value, 200, 560);

        var link = document.createElement('a');
        link.href = canvas.toDataURL('image/jpeg');
        link.download = 'Img.jpeg';
        link.text="aa";
        link.setAttribute("hidden", "true");
        document.body.appendChild(link);
        link.click();
    };
    imageObj.src = "wondergram.jpg";
    
    
}