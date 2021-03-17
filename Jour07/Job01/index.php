<!-- Bootstrap est un framework “front” et met à disposition de nombreuses
classes CSS et composants prédéfinis. A l’aide de ses classes et
composants, reproduisez la page qui suit.
Cette page, évidemment, se doit d'être responsive et gérer correctement
les redimensionnements. -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LPTF</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Units</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Skill</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <div class="container-fluid p-3 mb-2" style="background-color:#d9d7dd">
        <h1 class="display-3 text-center">La Plateforme_</h1>


        <div class="row">
            <div class="col-sm-2">
                <div class="card" style="width: 18rem;">
                    <img src="paipilon.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Un Papillon</h5>
                        <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailes. Ne pas ingerer.</p>
                        <a href="#" class="btn btn-primary">Commander votre propre papillon</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 bg-light">
                <div class="jumbotron my-5">
                    <h1 class="display-4">Bonjour, monde!</h1>
                    <p class="lead">Il existe plusieurs visions du terme:</br></br>
                        le monde est la matière, l'espace et les phénomenes qui nous sont accessibles par les sens, l'expérience ou la raison.</br></br>
                        Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</p>
                    <hr class="my-4">
                    <p>Le sens étendu désigne l'univers dans son ensemble.</p>
                    <button type="button" class="btn btn-primary btn-lg btn-danger">Rebooter le Monde</button>
                    <div class="spinner-border text-info" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                    <div class="float-end my-5">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination ms-5*11">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="col-sm-2">

                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Limbes</li>
                    <li class="list-group-item">Luxure</li>
                    <li class="list-group-item">Gourmandise</li>
                    <li class="list-group-item">Avarice</li>
                    <li class="list-group-item">Colère</li>
                    <li class="list-group-item">Heresie</li>
                    <li class="list-group-item">Violence</li>
                    <li class="list-group-item">Ruse et Tromperie</li>
                    <li class="list-group-item">Trahison</li>
                    <li class="list-group-item">Internet Explorer</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-1"> </div>
            <div class="col-sm-10">
                <div class="flex-column">
                    <div class="d-flex flex-row">
                        <div class="col-sm1"></div>
                        <div class="col-sm-10 text-end mt-5" style="height: 30px;">
                            <p class="fs-5"><b>Installation de Al 9000</b></p>
                        </div>
                        <div class="col-sm1"></div>
                    </div>
                    <div class="d-flex flex-row justify-content-center">
                        <div class="col-sm-1 text-end pb-4"><button type="button" style="background-color:#d9d7dd;border: none"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                    <path fill-rule="evenodd" d="M7.78 12.53a.75.75 0 01-1.06 0L2.47 8.28a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 1.06L4.81 7h7.44a.75.75 0 010 1.5H4.81l2.97 2.97a.75.75 0 010 1.06z"></path>
                                </svg>|</button></div>
                        <div class="progress col-sm-8 mt-1" style="height: 20px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                        </div>
                        <div class="col-sm-1"><button type="button" style="background-color:#d9d7dd ; border:none">|<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                    <path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path>
                                </svg></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"> </div>
        </div>
        <div class="d-flex flex-row">
            <div class="col-sm-1"> </div>
            <div class="col-sm-4">
                <p class="fs-5"><b>Recevez votre copie gratuite d'internet 2!</b></p>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Login" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Mot de Passe" aria-label="Mot de Passe" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>

                <label for="basic-url" class="form-label">URL des internet 2 et 2.1 Beta</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">DogeCoin</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    <span class="input-group-text">.00</span>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">https://l33t.lptf/dkwb/berlusconimkt/</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">

                </div>
            </div>
            <div class="col-sm-3"> </div>
            <div class="col-sm-2">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-2"> </div>
        </div>
    </div>
</body>

</html>