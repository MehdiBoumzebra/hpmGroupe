function goto(url) {
	window.open(url, "_self");
}

function upload(i, f, w, h, n) {
  var width = 400;
  var height = 100;
  var x = (screen.width-width) / 2;
  var y = (screen.height-height) / 2;
  window.open("../upload.php?s=0&field="+i+"&f="+f+"&w="+w+"&h="+h+"&n="+n,"","left="+x+",top="+y+",width="+width+",height="+height);
}
function popup(f) {
  var width = 300;
  var height = 300;
  var x = (screen.width-width) / 2;
  var y = (screen.height-height) / 2;
  window.open("../../zoom.php?f="+f,"","left="+x+",top="+y+",width="+width+",height="+height);
}function popupi(f) {
  var width = 300;
  var height = 300;
  var x = (screen.width-width) / 2;
  var y = (screen.height-height) / 2;
  window.open("zoom.php?f="+f,"","left="+x+",top="+y+",width="+width+",height="+height);
}

function apercu(src) {
	if (src == "") src = "default.jpg";
	window.open("../../imgs/" + src, "_blank");
}
function change_type(t){
//document.getElementById('formulaire').types_ventes.checked;
document.getElementById('appart_villa').style.display='none';
document.getElementById('terrain').style.display='none';
document.getElementById('magazin').style.display='none';
document.getElementById('bureau').style.display='none';
if(t=='1' || t=='4'){
document.getElementById('appart_villa').style.display='block';
}
else if(t=='2'){
document.getElementById('bureau').style.display='block';
}
else if(t=='3'){
document.getElementById('magazin').style.display='block';
}
else if(t=='5'){
document.getElementById('terrain').style.display='block';
}
}
