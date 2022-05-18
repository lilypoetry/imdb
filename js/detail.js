/**
 * Ajouter un nouveau film
 */

// Récuperation de la valeur du paramètre d'URL "id"
const idFilm = queryParam('id');

fetch(`http://api.test/movie.php?id=${idFilm}`)
    .then(response => response.json())
    .then(index => 
        {
            // Cacher le spinner
            const loader = document.querySelector('.spinner-article');
            loader.classList.add('d-none');
            
            const row = document.querySelector('.row');

            const detailMovie = `<div class="col-4">
                    <img src="${index.image}" alt="photo du film" class="w-100">
                </div>
                <div class="col-4">
                    <h1 class="fw-bold fs-1">${index.title}</h1>
                    <h2 class="fw-bold fs-2">${index.description}</h2>
                    <p class="fw-bold fs-2">${index.date}</p>
                    <p class="fw-bold fs-2">${index.time}</p>
                    <p class="fw-bold fs-2">${index.director}</p>
                    <p class="fw-bold fs-2">${index.trailer}</p>
                    <p>
                        Titre du film : 
                        <a href="details.php?id=${index.title}">
                            ${index.title}
                        </a>
                    </p>
                </div>`;

            row.innerHTML = detailMovie;   
            console.log(detailMovie);     
        })
    .catch(error =>
        {
            errorAlert(error.message, '.alert-danger');
        });