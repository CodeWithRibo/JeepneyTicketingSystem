document.addEventListener("DOMContentLoaded", function () {
  //TODO when click the hamburger icon, the mobile menu will appear
  const mobileDeviceHeader = document.getElementById("mobile-menu");
  const mobileDeviceIcon = document.getElementById("hamburger-menu");

  mobileDeviceIcon.addEventListener("click", (item) => {
    item.preventDefault();
    mobileDeviceHeader.classList.toggle("hidden");
  });

  // Adjust textarea row in small size
  function adjustTextAreaRows() {
    const textarea = document.getElementById("message");

    if (window.innerWidth <= 500) { //!base on viewport pixel
      textarea.rows = 5;
    } else {
      textarea.rows = 8;
    }
  }
//load the adjustRow
  adjustTextAreaRows();

  //adjust rows in the window resize
  window.addEventListener("resize", adjustTextAreaRows);
 

});
