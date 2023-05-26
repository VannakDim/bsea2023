const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').forEach(link => {
    if(activePage !=='/' && link.href.includes(`${activePage}`)){
    link.classList.add('active');
    // console.log(link);
  }
})
// console.log(activePage);