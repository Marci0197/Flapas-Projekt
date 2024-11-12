function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function hideSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}

document.addEventListener("DOMContentLoaded", function (){
    document.querySelectorAll("nav a").forEach((link, index) => {
        link.addEventListener("click", function (event){
            event.preventDefault();
  
            if (index === 0) {
                document.getElementById("myHtml").src = "/Start/iframes/download.html";
            } else if (index === 1) {
                document.getElementById("myHtml").src = "/Start/iframes/updates.html";
            } else if (index === 2) {
                document.getElementById("myHtml").src = "/Start/iframes/feedback.html";
            } else if (index === 3) {
                document.getElementById("myHtml").src = "/Start/iframes/kontakt.html";
            }
        });
    });
});