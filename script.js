document.addEventListener("DOMContentLoaded", function () { 
    const myHtml = document.getElementById("myHtml");
    const preloader = document.getElementById("preloader");
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;

    // Überprüfen, ob es sich um ein mobiles Gerät handelt
    const isMobile = /android|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(userAgent);

    // Setze den iFrame-Quell basierend auf dem Gerätetyp
    if (isMobile) {
        myHtml.src = "/iframes-handy/dashboard.php"; // Mobile iFrame
    } else {
        myHtml.src = "/iframes/dashboard.php"; // Desktop iFrame
    }

    // Ladeanimation anzeigen, während iFrame-Inhalt lädt
    function showLoader() {
        preloader.style.display = "flex"; // Preloader sichtbar machen
    }

    function hideLoader() {
        setTimeout(() => { preloader.style.display = "none";}, 500); // Preloader ausblenden
    }

    // Event-Listener für das Laden des iFrames
    myHtml.addEventListener("load", hideLoader);

    // Event-Listener für die Links im Footer
    document.querySelectorAll(".footer a").forEach((link, index) => {
        link.addEventListener("click", function (event) {
            event.preventDefault();

            // Ladeanimation starten
            showLoader();

            // Ändere den iFrame-Quell basierend auf dem Link
            if (index === 0) {
                myHtml.src = isMobile ? "/iframes-handy/dashboard.php" : "/iframes/dashboard.php";
            } else if (index === 1) {
                myHtml.src = isMobile ? "/iframes-handy/scoreboard.php" : "/iframes/scoreboard.php";
            } else if (index === 2) {
                myHtml.src = isMobile ? "/iframes-handy/profil.php" : "/iframes/profil.php";
            }
        });
    });

    // Ladeanimation beim ersten Laden des Inhalts anzeigen
    showLoader();
});