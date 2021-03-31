var items = document.getElementsByClassName("edit");

for(var i = items.length; i--;) {

items[i].onclick = function(e) {

 document.getElementById("updateArticleId").value = document.getElementById(this.id).value;
}
}