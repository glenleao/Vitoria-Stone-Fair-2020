// resize iframe.
function autoResize(id){ var newheight; if(document.getElementById){ newheight = document.getElementById(id).contentWindow.document.getElementById('pagconsulta').scrollHeight; } document.getElementById(id).style.height = (newheight) + "px"; } 
