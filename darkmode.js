var icon = document.getElementById("Icon");

icon.onclick = function(){
    document.body.classList.toggle("darkmode");
    if(document.body.classList.contains("darkmode")){
        icon.src = "darkmode/sun.svg";
    }else{
        icon.src = "darkmode/moon.svg";
    }
}