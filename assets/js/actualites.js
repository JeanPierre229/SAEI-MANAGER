function derouler(button) {
    const row = button.closest('.row');
    const nextRow = row.nextElementSibling;
    if (nextRow && nextRow.classList.contains('cacher')) {
        if (nextRow.style.display === "none" || nextRow.style.display === "") {
            nextRow.style.display = "block";
        } else {
            nextRow.style.display = "none";
        }
    }
}

// Initialement cacher toutes les sections avec la classe 'cacher'
document.querySelectorAll('.cacher').forEach(element => {
    element.style.display = 'none';
});