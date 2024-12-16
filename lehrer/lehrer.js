document.addEventListener("DOMContentLoaded", function () {
  const myHtml = document.getElementById("myHtml");
  const userAgent = navigator.userAgent || navigator.vendor || window.opera;

  // Überprüfen, ob es sich um ein mobiles Gerät handelt
  const isMobile = /android|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(userAgent);

  // Setze den iFrame-Quell basierend auf dem Gerätetyp
  if (isMobile) {
      myHtml.src = "/lehrer/iframes-handy/dashboard.php"; // Mobile iFrame
  } else {
      myHtml.src = "/lehrer/iframes/dashboard.php"; // Desktop iFrame
  }

  // Event-Listener für die Links im Footer
  document.querySelectorAll(".footer a").forEach((link, index) => {
      link.addEventListener("click", function (event) {
          event.preventDefault();

          // Ändere den iFrame-Quell basierend auf dem Link
          if (index === 0) {
              myHtml.src = isMobile ? "/lehrer/iframes-handy/dashboard.php" : "/lehrer/iframes/dashboard.php";
          } else if (index === 1) {
              myHtml.src = isMobile ? "/lehrer/iframes-handy/erstellen.php" : "/lehrer/iframes/erstellen.php";
          } else if (index === 2) {
              myHtml.src = isMobile ? "/lehrer/iframes-handy/profil.php" : "/lehrer/iframes/profil.php";
          }
      });
  });
});