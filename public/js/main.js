//alle Links der Sidenavigation
var allAdminPanels = document.querySelectorAll('#adminPanels > ul > li > a.nav-link');




function highlightCategory() {
  for (var i = 0; i < allAdminPanels.length; i++) {
    if(category == allAdminPanels[i].href.split("=")[1]) {
      allAdminPanels[i].classList.add("active");
    }
  }
}
