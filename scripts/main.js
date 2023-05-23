const elemsBtns = document.querySelectorAll(".fixed-action-btn");
const floatingBtn = M.FloatingActionButton.init(elemsBtns,{
    direction: "left",
    hoverEnabled: false
})


//Navbar da tela Menu.php
const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
const instancesDropdown = M.Dropdown.init(elemsDropdown, {
coverTrigger: false

});

//Direção do Menu.php no Mobile
elemsSidenav = document.querySelectorAll(".sidenav");
const instancesSidenav = M.Sidenav.init(elemsSidenav,{
    edge: "left"
});





