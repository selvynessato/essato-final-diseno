// Determina el número total de scrolls
const totalScrolls = 20;
const video = document.querySelector('.primera-video video');

window.addEventListener('scroll', function() {
    // Calcula la posición del scroll actual
    const scrollPosition = window.scrollY / (document.documentElement.scrollHeight - window.innerHeight);
    
    // Calcula la etapa de la animación
    const stage = Math.floor(scrollPosition * totalScrolls);
    
    if (stage < 10) {
        // Ajusta la animación para aumentar de 5% a 100%
        video.style.animationName = 'scrollScale';
        video.style.animationDuration = '20s'; // 10 scrolls para aumentar
    } else if (stage >= 10 && stage < 20) {
        // Ajusta la animación para disminuir de 100% a 5%
        video.style.animationName = 'scrollScale';
        video.style.animationDuration = '20s'; // 10 scrolls para disminuir
    }
});
