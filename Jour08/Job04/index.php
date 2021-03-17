<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <header>
        <nav>
            <div class="row">
                <div class="col s3 center-align">
                    <div><a href="index.php">Accueil</a></div>
                </div>
                <div class="col s3 center-align">
                    <div><a href="index.php">Connexion</a></div>
                </div>
                <div class="col s3 center-align">
                    <div><a href="index.php">Inscription</a></div>
                </div>
                <div class="col s3 center-align">
                    <div><a href="index.php">Rechercher</a></div>
                </div>

            </div>




        </nav>
    </header>
    <section class="container">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <p>Civilité:</p>

                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>MR</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span>MME</span>
                            </label>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="PRENOM" id="first_name" type="text" class="validate">
                        <label for="first_name">Prénom</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="NOM" id="last_name" type="text" class="validate">
                        <label for="last_name">Nom</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="3 rue, 2000 PARIS" id="Adresse" type="text" class="validate">
                        <label for="Adresse">Adresse</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="exemple@laplate.fr" id="Email" type="email" class="validate">
                        <label for="Email">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="******" id="first_name" type="text" class="validate">
                        <label for="password">Mot de passe</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="cpassword" type="password" class="validate">
                        <label for="cpassword">Nom</label>
                    </div>
                </div>



                <p>Hobbies: </p>
                <div class="row">
                    <div class="col s3 center-align">
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" />
                                <span>Sport</span>
                            </label>
                        </p>
                    </div>
                    <div class="col s3 center-align">
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" />
                                <span>Lecture</span>
                            </label>
                        </p>
                    </div>

                    <div class="col s3 center-align">
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" />
                                <span>Informatique</span>
                            </label>
                        </p>
                    </div>

                    <div class="col s3 center-align">
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" />
                                <span>Voyage</span>
                            </label>
                        </p>
                    </div>
                </div>

            </form>
        </div>
        <div class="row">
            <div class="col s12 center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </section>
    <footer class="lighten-2">
        <nav>
            <div class="row">
                <div class="col s3 center-align">
                    <a href="index.php">Accueil</a>
                </div>
                <div class="col s3 center-align">
                    <a href="index.php">Connexion</a>
                </div>
                <div class="col s3 center-align">
                    <a href="index.php">Inscription</a>
                </div>
                <div class="col s3 center-align ">
                    <a href="index.php">Rechercher</a>
                </div>
            </div>
        </nav>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>