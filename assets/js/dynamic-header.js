if (document.querySelector(".dynamH-container")){

const navbar = document.querySelector(".dynamH-container");
const scrollWatcher = document.createElement("div");

if(document.getElementsByClassName('bhero-backgroundImage').length){
    navbar.classList.remove('scrolled')
    scrollWatcher.setAttribute('data-scroll-watcher', '');

    navbar.before(scrollWatcher);
    
    const navObserver = new IntersectionObserver( (data) => {
        navbar.classList.toggle('scrolled', !data[0].isIntersecting)
    });
    
    navObserver.observe(scrollWatcher);
} else {
    navbar.style.transition = '0s'
    navbar.classList.add('scrolled')
}

}
