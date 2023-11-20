// effet d’apparition des titres //
const titles = document.querySelectorAll('.animation-title');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // ajout de la classe animes pour faire apparaitre le titre'//
            entry.target.classList.add('animes'); 
        }
    });
});
// On observe chaque titre
titles.forEach(title => {
    observer.observe(title);
});

// effet de parallaxe sur la vidéo et le titre du header//
const video = document.querySelector('#back-video'); //Selectionne l'élément avec la classe "fond-video" et l'attribut à la variable video //
const title = document.querySelector('.animation-title'); // Selectionne l'élément avec la classe

window.addEventListener('scroll', function() {
    const scrollPosition = window.pageYOffset;
    video.style.transform = `translate3d(0, ${scrollPosition * 0.2}px, 0)`;
    title.style.transform = `translate3d(0, ${scrollPosition * -0.5}px, 0)`;
});

// Carrousel  //
const swiper = new Swiper('.swiper', { // élément qui servira de conteneur pour le carsousel //
    effect: 'coverflow',    // effet de transition utilisé pour le carrousel //
    grabCursor: true,   
    centeredSlides: true,  // centre la diapositive active dans la vue du corrousel//
    slidesPerView: 'auto', //permet au carrousel d'ajuster dynamiquement le nombre de diapositives visibles en fonction de l'espace disponible //
    coverflowEffect: {
        rotate: 50,  // angle de rotation des diapositives//
        stretch: 5,  // Effet d'étirement appliqué aux diapositive//
        depth: 100,  // La profondeur de la disposition en 3 dimensions //
        modifier: 1, // Coefficient qui affecte la sensibilité de l'effet //
        slideShadows: false, // permet de désactiver les ombres sur les diapositives//
    },
    initialSlide: 1, // Permet une spécificité de la diapositive afficher en tant que diapositives initial //
  });


// effet de parallaxe sur les nuages //
const bigCloud = document.querySelector('.big-cloud'); // selectionne l'élement de la classe " big-cloud"  et l'attribut à la variable bigCloud //
const smallCloud = document.querySelector('.small-cloud'); // séléctionne l'élément de la classe "small-cloud" et l'attribut à la variable smallCloud//

window.addEventListener('scroll', function() { // évenement d'écoute
    const scrollPosition = window.pageYOffset;
    bigCloud.style.transform = `translate3d(${scrollPosition * -0.3}px, 0, 0)`;
    smallCloud.style.transform = `translate3d(${scrollPosition * -0.3}px, 0, 0)`;
});