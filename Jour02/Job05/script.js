// Créez un fichier style.css. Définissez la taille minimal de votre body à
// 4096px. Ajoutez un footer en position fixed en bas de votre fenêtre. De la
// même façon qu’une barre de chargement, la couleur du footer doit évoluer
// en fonction du pourcentage de scrolling.


let footer = document.getElementsByTagName("footer")[0];



document.addEventListener('scroll', scrollercolor);






function scrollercolor() {
    lastKnownScrollPosition = window.scrollY;
    scrollerPositionPercent = lastKnownScrollPosition / 3175 * 360;
    console.log(scrollerPositionPercent);
    footer.style.backgroundColor = "hsl(" + scrollerPositionPercent + ",100%,50%)"
}