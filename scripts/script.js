function search() {
    var input = document.getElementById("input");
    var filter = input.value.toUpperCase();
    var table = document.getElementById("table1");
    var tr = table.getElementsByTagName('tr');
    var td = tr.getElementsByTagName('td');

    for (var i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}




/*
function search() {
  // Declare variables 
  var input, filter, table, tr, tds, i;
  input = document.getElementById("input");
  filter = input.value.toUpperCase();
  table = document.getElementById("table1");
  tr = table.getElementsByTagName("tr");
  tds = tr.getElementsByTagName('td');

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
        var firstCol = tds[0].textContent.toUpperCase();
        var secondCol = tds[1].textContent.toUpperCase();
        var thirdCol = tds[2].textContent.toUpperCase();
        var fourthCol = tds[3].textContent.toUpperCase();
        if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1 || 
          thirdCol.indexOf(filter) > -1 || fourthCol.indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }      
    }
}
*/
/*
document.addEventListener("click", function(){
    document.getElementById("btn1").innerHTML = window.alert("hey!");
});
