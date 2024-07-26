//Les variables pour manipuler l'affichage des informations
const sections = document.querySelectorAll('.hideProgram, .hideCohortes, .hideCoach, .hideLearn');

function showSection(section) {
    sections.forEach(sec => sec.style.display = 'none');
    document.querySelector('.hide' + section).style.display = 'block';
    

}



