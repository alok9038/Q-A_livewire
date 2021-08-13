<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    @livewireStyles
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @include('sweetalert::alert')

    @livewire('navbar')


    @yield('content')

    <footer>
        <div class="container-fluid bg-white p-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h5>About us</h5>
                        <p class="small text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ratione perspiciatis saepe corrupti libero, velit minus necessitatibus esse molestias exercitationem accusantium autem ipsa ut nobis similique ex veniam consequatur ducimus?</p>
                    </div>
                    <div class="col">
                        <h5>Contact Us</h5>
                        <p class="ms-3"><a href="" class="text-decoration-none text-muted"><i class="fab fa-facebook"></i> Facebook</a></p>
                        <p class="ms-3"><a href="" class="text-decoration-none text-muted"><i class="fab fa-linkedin"></i> Linkedin</a></p>
                        <p class="ms-3"><a href="" class="text-decoration-none text-muted"><i class="fab fa-github"></i> Github</a></p>
                        <p class="ms-3"><a href="" class="text-decoration-none text-muted"><i class="fab fa-instagram"></i> Instagram</a></p>
                    </div>
                    <div class="col">
                        <h5>Usefull Links</h5>
                        <p><a href="" class="text-decoration-none text-muted">Home</a></p>
                        <p><a href="" class="text-decoration-none text-muted">Contact</a></p>
                        <p><a href="" class="text-decoration-none text-muted">Service</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
