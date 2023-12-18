var homepage = document.getElementById("homepage");
var classListHome = homepage.classList;
var form = document.getElementById("form");
var classListForm = form.classList;
var tabel = document.getElementById("tabel");
var classListTable = tabel.classList;
console.log(classListTable);

if(classListHome.length < 2) {
    function homein(){
        document.getElementById("homepage").style.marginLeft = "0";
        document.getElementById("homepage").style.transition = "0.5s";
    }
    function homeout(){
        document.getElementById("homepage").style.marginLeft = "-100%";
    }
}
if(classListForm.length < 2){
    function formin(){
        document.getElementById("form").style.marginLeft = "0";
        document.getElementById("form").style.transition = "0.5s";
    }
    function formout(){
        document.getElementById("form").style.marginLeft = "-100%";
    }
}
if(classListTable.length < 2){
    function tablein(){
        document.getElementById("tabel").style.marginLeft = "0";
        document.getElementById("tabel").style.transition = "0.5s";
    }
    function tableout(){
        document.getElementById("tabel").style.marginLeft = "-100%";
    }
}
function loginin(){
    document.getElementById("login").style.marginLeft = "0";
    document.getElementById("login").style.transition = "0.5s";
}
function loginout(){
    document.getElementById("login").style.marginLeft = "-100%";
}
