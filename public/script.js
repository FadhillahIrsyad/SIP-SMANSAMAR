// sidebar

function openSidebar() {
    var sidebar = document.getElementById("sidebar");
    var close = document.getElementById("close-button");
    sidebar.classList.add("active");
    close.classList.add("show")
}

function closeSidebar() {
    var sidebar = document.getElementById("sidebar");
    var close = document.getElementById("close-button");
    sidebar.classList.remove("active");
    close.classList.remove("show")
}
  