    <!DOCTYPE html>
    <html lang="en">

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
                    <form action="{{ route('candidat.login') }}" method="post">
                        @csrf
                        <!-- Logo starts -->
                        <div class="app-brand p-3 my-2 text-center">
                            <a href="" class="">
                                <img src="{{ asset('accueil/img/logo1.png') }}" class="" style="width: 50%" alt="Bootstrap Gallery" />
                            </a>
                        </div>
                        <!-- Logo ends -->

                        <!-- Authbox starts -->
                        <div class="auth-box">
                            <h4 class="mb-4">Bienvenue à nouveau</h4>

                            <div class="mb-3">
                                <label class="form-label" for="email">Email <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                    <input type="email" id="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Entrez votre email" value="{{ old('email') }}" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-2">
                                <label class="form-label" for="password">Mot de passe <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                    <input type="password" id="password" name="password" class="form-control"
                                        placeholder="Entrez votre mot de passe" />
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>

                            {{-- <div class="d-flex justify-content-end mb-3">
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié?') }}
                </a>
                @endif
              </div> --}}

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Se connecter</button>
                                {{-- <a href="{{ route('register') }}" class="btn btn-outline-dark"
                  >Non enregistré ? S'inscrire</a
                > --}}
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
