<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos fims</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/movies.js" defer></script>
</head>
<body>
    <div class="w-50 mx-auto py-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Titre du film</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="time" class="form-label">Durée</label>
                        <input type="text" class="form-control" id="time">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Directeur</label>
                <input type="text" class="form-control" id="director">
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="image" class="form-label">Affiche</label>
                        <input type="text" class="form-control" id="image">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="trailer" class="form-label">Bande annonce</label>
                        <input type="text" class="form-control" id="trailer">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Enregistrer</button>            
        </form>
        
    </div>
        
    <table class="table pt-5 w-50 mx-auto">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Affiche</th>
                <th scope="col">Titre</th>
                <th scope="col">Date</th>
                <th scope="col">Détails</th>
            </tr>
        </thead>
        <tbody>
        </tbody>    
    </table>
</body>
</html>