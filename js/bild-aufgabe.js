const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");
let drawing = false;
let points = [];

canvas.addEventListener("mousedown", () => {
    drawing = true;
    points = [];
    ctx.beginPath();
});

canvas.addEventListener("mousemove", (e) => {
    if (!drawing) return;
    const x = e.offsetX;
    const y = e.offsetY;
    points.push({ x, y });
    ctx.lineTo(x, y);
    ctx.strokeStyle = "red";
    ctx.lineWidth = 2;
    ctx.stroke();
});

canvas.addEventListener("mouseup", () => {
    drawing = false;
    ctx.closePath();

    // Optional: Polygon schließen
    if (points.length > 1) {
        ctx.lineTo(points[0].x, points[0].y);
        ctx.stroke();
    }

    // Daten an Server senden
    fetch("../../php/save_polygon.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ points })
    });
});