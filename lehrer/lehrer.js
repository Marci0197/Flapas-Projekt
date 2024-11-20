document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".footer a").forEach((link, index) => {
      link.addEventListener("click", function (event) {
        event.preventDefault();
  
        if (index === 0) {
          document.getElementById("myHtml").src = "/lehrer/iframes/dashboard.html";
        } else if (index === 1) {
          document.getElementById("myHtml").src = "/lehrer/iframes/erstellen.html";
        } else if (index === 2) {
          document.getElementById("myHtml").src = "/lehrer/iframes/profil.html";
        }
      });
    });
  });