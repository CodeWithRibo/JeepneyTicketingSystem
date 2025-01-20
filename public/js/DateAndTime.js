document.addEventListener("DOMContentLoaded", function () { 

 //Date and Time Accurate base on the user's timezone
 const dateAndTime = document.getElementById("DateAndTime");
 const now = new Date();
 const year = now.getFullYear();
 const month = String(now.getMonth() + 1).padStart(2, "0");
 const day = String(now.getDate()).padStart(2, "0");
 const hours = String(now.getHours()).padStart(2, "0");
 const minutes = String(now.getMinutes()).padStart(2, "0");
 const localDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;
 dateAndTime.value = localDateTime;

});