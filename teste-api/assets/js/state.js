function Mudarestado(id) {
    var display = document.getElementById(id).style.display;
    
    switch(display){
        case "none":
            document.getElementById(id).style.display = 'block';
            break;
        case "block":
            document.getElementById(id).style.display = 'none';
            break;
    } 
}