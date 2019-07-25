var marsouins=["VERROUX","RENAY","VITULIN","TERRINE","ROBINEL","MAXIMIN","MARIE-LUCE","RENARD-VATON","NEY","THOME"];
var nbr = marsouins.length;
var copie = [];
for(var i = 0; i < nbr; i++);
copie.push(marsouins[i]);
console.log(copie);
var last = marsouins[marsouins.length -1];
//document.write(last);
marsouins.forEach(function(item,index,array){
console.log(item,index);
});
var addNewMarsouin = marsouins.push("POPOTTE");
//Document.write(marsouins);
var deleteLastMarsouin = marsouins.pop();
//document.write(marsouins);
var deleteFirstMarsouin = marsouins.shift();
//document.write(marsouins);
var genre="";
genre = prompt("masculin ou féminin?")
if(genre != null){
    document.getElementById("reponse").innerHTML = genre;
alert(genre);    
}

else{
    alert("vous n'avez pas répondu.");
}

