<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Register - SB Admin</title>
    <link href="/myportfolio/css/styles.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
            crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Créer un compte</h3>
                            </div>
                            <div class="card-body">
                                <form action="/myportfolio/users/create" method="POST">
                                    <div class="row mb-3">
                                        <div class="col-mb-3">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text"
                                                       placeholder="Enter ton nom" name="nom"/>
                                                <label for="inputFirstName">Nom</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="date" id="inputEmail" type="date"
                                               placeholder=""/>
                                        <label for="inputEmail">Date de naissance</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email" id="inputEmail" type="email"
                                               placeholder=""/>
                                        <label for="inputEmail">Email</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPassword" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{12,}$" type="password"
                                                       name="password"
                                                       placeholder="Créer un MDP"/>
                                                <label for="inputPassword">Mot de passe</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPasswordConfirm" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{12,}$" type="password"
                                                       placeholder="Confirmer"/>
                                                <label for="inputPasswordConfirm">Confirmer</label>
                                            </div>
                                            <label>le mot de passe doit contenir 12 caracteres des lettres et des chiffres</label>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-block">Créer
                                                un compte
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="/myportfolio/js/scripts.js"></script>
</body>
</html>
