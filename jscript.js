var menuIcon = document.querySelector(".menu-icon");
var sidebar = document.querySelector(".sidebar");
var container = document.querySelector(".container");

menuIcon.onclick = function(){
    sidebar.classList.toggle("small-sidebar");
    container.classList.toggle("large-container");  
}

function openPage(){
    var x = document.getElementById("search").value;
    if(x === "guilty"){
        window.open("/youtubeweb/page3.html");  
    }
    if(x === "titliyaan"){
        window.open("/youtubeweb/page4.html");  
    }
    if(x === "titliyan"){
        window.open("/youtubeweb/page5.html");
    }
    if(x === "jaani"){
        window.open("/youtubeweb/page2.html");
    }
    if(x === "bpraak"){
        window.open("/youtubeweb/page5.html");  
    }
    
}
