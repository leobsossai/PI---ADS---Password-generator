function startAnimation() {
    var importButton = document.querySelector(".import-button");
    importButton.classList.add("animate");
    setTimeout(function() {
        importButton.classList.remove("animate");
    }, 1000);
}
