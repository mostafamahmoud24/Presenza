const handleSideMenuToggle = () => {
    if (document.getElementById("burger").classList.contains('navigation-links')) {
        document.getElementById("burger").classList.remove('navigation-links');
        document.getElementById("burger").classList.add('navigation-links-set');
        document.documentElement.style.overflowY = 'hidden';
    }
    else if (document.getElementById("burger").classList.contains('navigation-links-set')) {
        document.getElementById('burger').classList.remove('navigation-links-set');
        document.getElementById("burger").classList.add('navigation-links');
        document.documentElement.style.overflowY = 'scroll';

        // document.addEventListener("click", function (event) {

        //     if (event.target.closest('.navigation-links-set')) return;

        //     document.getElementById('burger').classList.remove('navigation-links-set');
        //     document.getElementById("burger").classList.add('navigation-links');
        // });
    }
}