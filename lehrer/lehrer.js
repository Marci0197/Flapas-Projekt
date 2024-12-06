document.addEventListener("DOMContentLoaded", function () {
  const myHtml = document.getElementById("myHtml");
  const userAgent = navigator.userAgent || navigator.vendor || window.opera;

  // Überprüfen, ob es sich um ein mobiles Gerät handelt
  const isMobile = /android|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(userAgent);

  // Setze den iFrame-Quell basierend auf dem Gerätetyp
  if (isMobile) {
      myHtml.src = "/lehrer/iframes-handy/dashboard.html"; // Mobile iFrame
  } else {
      myHtml.src = "/lehrer/iframes/dashboard.html"; // Desktop iFrame
  }

  // Event-Listener für die Links im Footer
  document.querySelectorAll(".footer a").forEach((link, index) => {
      link.addEventListener("click", function (event) {
          event.preventDefault();

          // Ändere den iFrame-Quell basierend auf dem Link
          if (index === 0) {
              myHtml.src = isMobile ? "/lehrer/iframes-handy/dashboard.html" : "/lehrer/iframes/dashboard.html";
          } else if (index === 1) {
              myHtml.src = isMobile ? "/lehrer/iframes-handy/erstellen.html" : "/lehrer/iframes/erstellen.html";
          } else if (index === 2) {
              myHtml.src = isMobile ? "/lehrer/iframes-handy/profil.html" : "/lehrer/iframes/profil.html";
          }
      });
  });
});