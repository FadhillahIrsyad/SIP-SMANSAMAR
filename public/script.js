// sidebar

function openSidebar() {

    // Def var using element with id sidebar & close-button. 
    var sidebar = document.getElementById("sidebar"); // ref(sidebar.blade.php:5)
    var close = document.getElementById("close-button"); // ref(sidebar.blade.php:2)

    // Add class to element
    sidebar.classList.add("active");
    close.classList.add("show")
}

function closeSidebar() {

    // Def var using element with id sidebar & close-button.  
    var sidebar = document.getElementById("sidebar"); // ref(sidebar.blade.php:5)
    var close = document.getElementById("close-button"); // ref(sidebar.blade.php:2)
    
    // Remove class from element
    sidebar.classList.remove("active");
    close.classList.remove("show")
}
  
document.addEventListener('click', function handleClickOutsideBox(event) {
    // 👇️ the element the user clicked
    console.log('user clicked: ', event.target);
  
    const container = document.getElementById('user-menu');
  
    // Check if the user clicked on the user-img element or one of its child elements
    const userImg = document.getElementById('user-img');
    if (container && !container.contains(event.target) && !userImg.contains(event.target)) {
      container.classList.remove('show');
    }
  });
  
  // Add a separate event listener for the user-img element
document.getElementById('user-img').addEventListener('click', function handleUserImgClick(event) {
    // Prevent the event from propagating further up the DOM tree
    event.stopPropagation();
  
    // Show the user-menu element
    const container = document.getElementById('user-menu');
    container.classList.add('show');
});