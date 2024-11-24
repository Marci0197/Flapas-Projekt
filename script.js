document.addEventListener("DOMContentLoaded", function () {
  const iframeContainer = document.getElementById('iframeContainer');
  const myHtml = document.getElementById("myHtml");
  const userAgent = navigator.userAgent || navigator.vendor || window.opera;

  // Überprüfen, ob es sich um ein Handy handelt
  const isMobile = /android|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(userAgent);

  // Setze den iframe basierend auf dem Gerätetyp
  if (isMobile) {
      myHtml.src = "/iframes-handy/dashboard.html"; // Mobile iFrame
  } else {
      myHtml.src = "/iframes/dashboard.html"; // Desktop iFrame
  }

  // Event-Listener für die Links im Footer
  document.querySelectorAll(".footer a").forEach((link, index) => {
      link.addEventListener("click", function (event) {
          event.preventDefault();

          // Ändere den iframe basierend auf dem Link
          if (index === 0) {
              myHtml.src = isMobile ? "/iframes-handy/dashboard.html" : "/iframes/dashboard.html";
          } else if (index === 1) {
              myHtml.src = isMobile ? "/iframes-handy/scoreboard.html" : "/iframes/scoreboard.html";
          } else if (index === 2) {
              myHtml.src = isMobile ? "/iframes-handy/profil.html" : "/iframes/profil.html";
          }
      });
  });
});