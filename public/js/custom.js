var mini = true;
var menu = document.getElementById("mySidebar");

document.getElementById("btnmenu").addEventListener("click", function() {
    menu.classList.toggle("sidebarOpen");

    var logo = document.getElementById('logo');
    logo.style.display = 'block';

    var logo_w = document.getElementById('logo_w');
    logo_w.style.display = 'none';


});

let changeIcon = function(icon) {
  icon.classList.toggle('bxs-chevron-left');
    // var logo = document.getElementById('logo');
    // logo.style.display = 'none';

    var logo_w = document.getElementById('logo_w');
    logo_w.style.display = 'none';

}

// Modal del Index
var modalIndex = document.getElementById("myModalIndex");
var btnIndex = document.getElementById("btnModalIndex");
var span = document.getElementsByClassName("close")[0];

// btnIndex.addEventListener('click', function(e) {
//     e.preventDefault();
//     modalIndex.style.display = "block";
// });

// span.onclick = function() {
//     modalIndex.style.display = "none";
// }

window.onclick = function(event) {
  if (event.target == modal) {
    modalIndex.style.display = "none";
  }
}

//DROPDAOWN

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    // $("#myDropdown").show();
}
  
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      // var dropdowns = document.getElementsByClassName("dropdown-content");
      // var i;
      // for (i = 0; i < dropdowns.length; i++) {
      //   var openDropdown = dropdowns[i];
      //   if (openDropdown.classList.contains('show')) {
      //     openDropdown.classList.remove('show');
      //   }
      // }
    }
  }


function toggleSidebar() {
    if (mini) {
        console.log("opening sidebar");
        document.getElementById("mySidebar").style.width = "250px";
        // document.getElementById("main").style.marginLeft = "250px";
        // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        this.mini = false;
    } else {
        console.log("closing sidebar");
        document.getElementById("mySidebar").style.width = "68px";
        // document.getElementById("main").style.marginLeft = "68px";
        // document.body.style.backgroundColor = "white";
        this.mini = true;
    }
}

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }




