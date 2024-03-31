<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gestion de concour</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" />
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
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <!-- Logo starts -->
                    <a href="{{ URL('/') }}" class="auth-logo mt-5 mb-3">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="Bootstrap Gallery" />
                    </a>
                    <!-- Logo ends -->

                    <!-- Authbox starts -->
                    <div class="auth-box">
                        <h4 class="mb-4">Creer un compte</h4>

                        <div class="mb-3">
                            <label class="form-label" for="name">Nom <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Entrez votre nom" autofocus />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Entrez votre email" required />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">Mot de passe <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" id="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Entrez votre Mot de passe" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <div class="form-text text-info">
                                Votre mot de passe doit comporter entre 8 et 20 caractères.
                            </div>
                        </div>
                       {{--  <div class="row mb-3">
                            <label class="form-label" for="password-confirm">Confirmez le mot de passe <span
                                class="text-danger">*</span></label>

                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div> --}}

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                S'inscrire
                            </button>
                            <a href="{{ route('login') }}" class="btn btn-outline-dark">Vous avez déjà un compte? Se
                                connecter</a>
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
