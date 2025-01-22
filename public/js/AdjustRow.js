document.addEventListener("DOMContentLoaded", function () { 
  () => {
    const textarea = document.getElementById("message");
    if (window.innerWidth <= 500) { //!base on viewport pixel
      textarea.rows = 5;
    } else {
      textarea.rows = 8;
    }
  }
adjustTextAreaRows();
//adjust rows in the window resize
window.addEventListener("resize", adjustTextAreaRows);
});