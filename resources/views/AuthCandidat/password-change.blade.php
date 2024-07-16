<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MaliConcour - change password</title>

    <!-- Meta -->
    <link rel="shortcut icon" href="{{ asset('accueil/img/mali.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- *************
   ************ CSS Files *************
  ************* -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/bootstrap/bootstrap-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}" />

</head>

<body>

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

        <!-- Auth container starts -->
        <div class="auth-container">

            <div class="d-flex justify-content-center">

                <!-- Form starts -->
                <form action="{{ route('candidat.change') }}" method="POST">
                    @csrf
                    <!-- Logo starts -->
                    <div class="app-brand p-3 my-2 text-center">
                        <a href="{{ route('welcome') }}" class="">
                            <img src="{{ asset('accueil/img/logo1.png') }}" class="" style="width: 50%"
                                alt="Fonction publique" />
                        </a>
                    </div>
                    <!-- Logo ends -->

                    <!-- Authbox starts -->
                    <div class="auth-box">

                        <h4 class="mb-4 text-center">Réinitialiser le mot de passe</h4>
                        <div class="alert alert-info alert-dismissible alert-alt fade show">
                            <strong>Le mot de passe doit contenir :
                                <ul>
                                    <li>Une lettre minuscule</li>
                                    <li>Une lettre majuscule</li>
                                    <li>Un des caractères spéciaux suivants : @, ., -</li>
                                    <li>Un chiffre</li>
                                    <li>10 caractères minimum</li>
                                </ul>
                            </strong>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="newPwd">Nouveau mot de passe<span
                                    class="text-danger">*</span></label>
                            <div class="input-group ">
                                <span class="input-group-text">
                                    <i class="bi bi-unlock"></i>
                                </span>
                                <input type="password" id="npwd" class="form-control" placeholder="Entrez un nouveau mot de passe" name="password">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="confNewPwd">Confirmer le nouveau mot de passe<span
                                    class="text-danger">*</span></label>
                            <div class="input-group ">
                                <span class="input-group-text">
                                    <i class="bi bi-unlock"></i>
                                </span>
                                <input type="password" id="pwd2" class="form-control"
                                    placeholder="Confirmer le nouveau mot de passe" name="password_confirmation">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <p id="pwd2msg" class="fw-semibold mt-2"></p>
                        </div>

                        <div class="d-grid gap-2">
                            <button id="sauv" type="submit" class="btn btn-primary" disabled>
                                Mettre à jour
                            </button>
                        </div>

                    </div>
                    <!-- Authbox ends -->

                </form>
                <!-- Form ends -->

            </div>

        </div>
        <!-- Auth container ends -->

    </div>
    <!-- Page wrapper ends -->

</body>

</html>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var pwd = document.getElementById('npwd');
        var letter = document.getElementById('letter');
        var capital = document.getElementById('capital');
        var number = document.getElementById('number');
        var length = document.getElementById('length');
        var caract = document.getElementById('caract');
        var msg = document.getElementById('message');
        var button = document.getElementById('sauv');
        var pwd2 = document.getElementById('pwd2');

        // Vérification des critères à chaque frappe dans le champ de mot de passe
        pwd.addEventListener('keyup', function() {
            // Validation des minuscules
            var minuscule = /[a-z]/g;
            if (pwd.value.match(minuscule)) {
                letter.classList.remove('invalid');
                letter.classList.add('valid');
            } else {
                letter.classList.remove('valid');
                letter.classList.add('invalid');
            }

            // Validation des caractères spéciaux
            var caractere = /[@.,-]/g;
            if (pwd.value.match(caractere)) {
                caract.classList.remove('invalid');
                caract.classList.add('valid');
            } else {
                caract.classList.remove('valid');
                caract.classList.add('invalid');
            }

            // Validation des majuscules
            var majuscule = /[A-Z]/g;
            if (pwd.value.match(majuscule)) {
                capital.classList.remove('invalid');
                capital.classList.add('valid');
            } else {
                capital.classList.remove('valid');
                capital.classList.add('invalid');
            }

            // Validation des chiffres
            var chiffre = /[0-9]/g;
            if (pwd.value.match(chiffre)) {
                number.classList.remove('invalid');
                number.classList.add('valid');
            } else {
                number.classList.remove('valid');
                number.classList.add('invalid');
            }

            // Validation de la longueur minimale
            if (pwd.value.length >= 10) {
                length.classList.remove('invalid');
                length.classList.add('valid');
            } else {
                length.classList.remove('valid');
                length.classList.add('invalid');
            }

            // Activer le bouton de soumission si tous les critères sont valides
            if (pwd.value.length >= 10 && pwd.value.match(chiffre) && pwd.value.match(caractere) && pwd.value.match(majuscule) && pwd.value.match(minuscule)) {
                button.disabled = false;
                pwd2.disabled = false;
            } else {
                button.disabled = true;
                pwd2.disabled = true;
            }
        });
    });
</script>
