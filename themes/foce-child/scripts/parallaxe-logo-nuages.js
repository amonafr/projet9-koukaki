
const grandNuage=document.querySelector('.grandNuage');
const petitNuage=document.querySelector('.petitNuage');
const place=document.getElementById('place');
const story=document.querySelector('.story');


const nuageStartPosition = place.offsetTop + story.offsetTop+ grandNuage.offsetTop;
let translation;
let scrollProgress;

// Fonction pour déplacer les nuages vers la gauche au scroll

function handleScroll() {
  const windowHeight = window.innerHeight;
  const scrollY = window.scrollY;

  // Vérifier si le nuage est dans la zone visible
  if (scrollY + windowHeight >= nuageStartPosition && scrollY <= nuageStartPosition + 500) {
    const maxTranslation = 300;
    // Calcul de la progression du scroll par rapport au nuage
    scrollProgress = (scrollY + windowHeight - nuageStartPosition) / windowHeight;

    // Calcul de la translation en fct de la progression du scroll Limiter la translation à 300px maximum vers la gauche
    translation = Math.round(Math.min(scrollProgress * maxTranslation, maxTranslation));
    console.log("translation:" + translation);
    // Appliquer la transformation aux deux nuages
    grandNuage.style.transform = `translateX(${-translation}px)`;
    petitNuage.style.transform = `translateX(${-translation}px)`;

  }
}

// inistialisation de bibliothèque scrollr utilisee pour la parallaxe du logo

var s = skrollr.init();

// Ajouter un event listener pour le scroll
window.addEventListener('scroll', handleScroll);
