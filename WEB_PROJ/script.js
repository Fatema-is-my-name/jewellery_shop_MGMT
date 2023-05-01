let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   profile.classList.remove('active');
}

let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   profile.classList.remove('active');
   navbar.classList.remove('active');
}


function printDiv() {
   var divContents = document.getElementById("res").innerHTML;
   var printWindow = window.open('', '', 'height=400,width=800');
   printWindow.document.write('<html><head><title>Report</title>');
   printWindow.document.write('</head><body>');
   printWindow.document.write(divContents);
   printWindow.document.write('</body></html>');
   printWindow.document.close();
   printWindow.print();
 }
 