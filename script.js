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

    // Event-Listener, um den Preloader zu entfernen, wenn alles geladen ist
    myHtml.addEventListener("load", function () {
        // Preloader nach dem Laden des Inhalts ausblenden
        preloader.style.display = "none";
    });
});