function loadPage(url) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector(".main").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", url);
    xhttp.send();
  }