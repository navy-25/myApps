<!doctype html>
<html lang="en">
    <head>
        {{-- Required meta tags --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Bootstrap CSS --}}
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        {{-- font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
        {{-- end font --}}

        <title>Hello, world!</title>

        {{-- includes css --}}
        @include('includes.css-custom')
        {{-- end includes css --}}
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-12 px-0">
                    <div class="form-login" style="height: 100vh !important;overflow:auto">
                        <div class="header-login p-2"></div>
                        <div class="body-login p-2 ps-5 pe-5">
                            <div class="header-content mb-4">
                                <h1 class="header-text">
                                    Welcome back <br>
                                    <div class="text-apps">
                                        to MyApps
                                    </div>
                                </h1>
                                <p class="sub-header">Sign in to your account below.</p>
                            </div>
                            <div class="body-content mt-5">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="footer-login p-2"></div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-12 banner-login">
                </div>
            </div>
        </div>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
