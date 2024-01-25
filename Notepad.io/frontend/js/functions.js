var x = document.getElementById("notecreator");
function newnote() {
  if (x.style.display == "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

var a = document.getElementById("activenotes");
var ar = document.getElementById("archivednotes");
var d = document.getElementById("discardednotes");

function write(w){
  var textbox = document.getElementById("Readbox");

  textbox

}

function activenote(){
  if (a.style.display == "none") {
    a.style.display = "block";
    ar.style.display = "none";
    d.style.display = "none";
    }
  }

function archivednote(){
  if (ar.style.display == "none") {
    ar.style.display = "block";
    a.style.display = "none";
    d.style.display = "none";
  }
}

function discardenote(){
  if (d.style.display == "none") {
      d.style.display = "block";
      a.style.display = "none";
      ar.style.display = "none";
  }
}