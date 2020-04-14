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
    }
}

let handleSideMenu = () => {
    if (document.getElementById("burger").classList.contains('navigation-links-set') && window.innerWidth <= 650) {
        document.getElementById('burger').classList.remove('navigation-links-set');
        document.getElementById("burger").classList.add('navigation-links');
        document.documentElement.style.overflowY = 'scroll';
    }

    return;
}



