// Event wird ausgelöst, wenn die gesamte Seite vollständig geladen ist
window.addEventListener("load", function(){
    // Wartezeit nach dem vollständigen Laden (z.B. 2 Sekunden)
    const waitTime = 2000;
    // Preloader nach der Wartezeit ausblenden und weiterleiten
    setTimeout(() => {
        // Weiterleitung zur app.php
        window.location.href = "app.php";
    }, waitTime);
});