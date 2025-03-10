
  function searchTerminal() {
    let filter = document.getElementById("searchBar").value.toUpperCase();
    let item = document.querySelectorAll(".parent");
    let l = document.getElementsByTagName("h1");
    let loc = document.querySelectorAll('.parent');
    for (var i = 0; i <= l.length; i++) {
      let a = item[i].getElementsByTagName("h1")[0];
      let value = a.textContent;
      if (value.toUpperCase().indexOf(filter) > -1) {
        item[i].style.display = "";
      } else {
        item[i].style.display = "none";
      }
    }
    
  }

