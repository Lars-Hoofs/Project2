const cursorDot = document.querySelector("[data-cursor-dot]");
const cursorOutline = document.querySelector("[data-cursor-outline]");

window.addEventListener("mousemove", function (e) { 
    const posX = e.clientX;
    const posY = e.clientY;

    if (cursorDot) {
        cursorDot.style.left = `${posX}px`;
        cursorDot.style.top = `${posY}px`;
    }
    
    if (cursorOutline) {
        cursorOutline.style.left = `${posX}px`;
        cursorOutline.style.top = `${posY}px`;
    }
});
