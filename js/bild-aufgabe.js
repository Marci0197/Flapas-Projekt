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
    if(points.length > 1){
        ctx.lineTo(points[0].x, points[0].y);
        ctx.stroke();
    }

    const reducedPoints = reduceByDistance(points, 20);


    // Daten an Server senden
    fetch("../../php/save_polygon.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },

        body: JSON.stringify({ points: reducedPoints })
    });
});

function pointInPolygon(xp, yp, polygon) {
    // Extrahiere x- und y-Koordinaten aus dem Polygon-Array
    let x = [];
    let y = [];

    for (let i = 0; i < polygon.length; i++) {
        x.push(polygon[i].x);
        y.push(polygon[i].y);
    }

    let n = x.length;
    let inside = false;

    // Testfälle entwerfen und dann prüfen...
    for (let i = 0, j = n - 1; i < n; j = i++) {
        if (((y[i] > yp) !== (y[j] > yp)) && (xp < (x[j] - x[i]) * (yp - y[i]) / (y[j] - y[i] + 0.00001) + x[i])) {
            inside = !inside;
        }
    }

    if (inside) {
        console.log("Punkt ist im Inneren des Polygons");
    } else {
        console.log("Punkt ist nicht im Inneren des Polygons");
    }
    
    // Test
    console.log("Fertig geladen");
    // return inside;
}

function reduceByDistance(points, minDistance = 20){
    const result = [];
    let last = null;

    for(const point of points){
        if(!last){
            result.push(point);
            last = point;
        }else{
            const dx = point.x - last.x;
            const dy = point.y - last.y;
            const dist = Math.sqrt(dx * dx + dy * dy);

            if(dist >= minDistance) {
                result.push(point);
                last = point;
                console.log(`Punkt hinzugefügt: (${point.x}, ${point.y})`);
            }
        }
    }
    // Benutzer Punkt
    return "result", pointInPolygon(300, 300, result);
}