function reservations() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector(".main").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "http://localhost/exellent_taste/index.php?controller=reservations");
    xhttp.send();
  }

  function reservationDetails() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector(".main").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "http://localhost/exellent_taste/index.php?controller=reservations&id=6");
    xhttp.send();
  }

  function orders() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector(".main").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "http://localhost/exellent_taste/index.php?controller=orders");
    xhttp.send();
  }

  function products() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector(".main").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "http://localhost/exellent_taste/index.php?controller=products");
    xhttp.send();
  }

  function createForm() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector(".main").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "http://localhost/exellent_taste/index.php?controller=reservations&action=createForm");
    xhttp.send();
  }

  function loadPage(url) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector(".main").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", url);
    xhttp.send();
  }