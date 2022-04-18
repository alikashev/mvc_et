function loadPage(url) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector(".main").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", url);
    xhttp.send();
  }

  function loadPageSide(url) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector(".side").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", url);
    xhttp.send();
  }