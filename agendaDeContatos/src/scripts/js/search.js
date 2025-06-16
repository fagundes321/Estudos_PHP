var search = document.getElementById('pesquisar');

// quando eu apertar a tecla Enter irá ativar a função searchData e ira pesquisar
search.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        searchData();
    }
})

function searchData(event) {
    event.preventDefault();
    var search = document.getElementById('pesquisar');
    window.location = 'index.php?search=' + encodeURIComponent(search.value);
}

