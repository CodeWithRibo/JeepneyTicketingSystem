document.addEventListener("DOMContentLoaded", function () {
  //TODO when click the hamburger icon, the mobile menu will appear
  const mobileDeviceHeader = document.getElementById("mobile-menu");
  const mobileDeviceIcon = document.getElementById("hamburger-menu");

  mobileDeviceIcon.addEventListener("click", (item) => {
    item.preventDefault();
    mobileDeviceHeader.classList.toggle("hidden");
  });

  // 
  // const terminals = document.getElementById("lugar_terminal");
  
  // terminals.addEventListener('click', (e) => {
  //   alert('You need to login');
  //   window.location.href ="../Login/login.php";
  // });

});
