// hover:text-yellow-500
document.addEventListener("DOMContentLoaded", function() {
        
                 //TODO when click the hamburger icon, the mobile menu will appear
    const mobileDeviceHeader = document.getElementById("mobile-menu");
    const mobileDeviceIcon = document.getElementById("hamburger-menu");
  
       mobileDeviceIcon.addEventListener("click", (item) => {
            item.preventDefault();
            mobileDeviceHeader.classList.toggle("hidden");
    });   
});