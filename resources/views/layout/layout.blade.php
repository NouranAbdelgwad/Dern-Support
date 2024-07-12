<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Layout')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/assets/images/icon.png') }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('/assets/images/logo-no-background.png') }}" alt="logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/problems">Knowledge base</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/software_request">Request support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                </ul>
                <span>
                    <a href="navbar-text" href="#">
                        <img src="https://t4.ftcdn.net/jpg/03/83/25/83/360_F_383258331_D8imaEMl8Q3lf7EKU2Pi78Cn0R7KkW9o.jpg"
                            alt="" class="profile-img">
                    </a>
                </span>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-body-tertiary p-4 mt-3 container-fluid">
        <div class="container">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('/assets/images/logo-no-background.png') }}" alt="logo" class="logo-footer">
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <h6><b>Our services</b></h6><br />
                    <ul class=" list ">
                        <li>On-site computer repair and support for business customers</li>
                        <li>In-office and courier-based computer repair services for individual customers</li>
                        <li>Diagnosis and repair of hardware and software issues</li>
                        <li><a href="" class="link-style">Knowledge base</a> </li>
                        <li><a href="" class="link-style">Software Support</a></li>
                        <li><a href="" class="link-style">Hardware Support</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <h6><b>Our value</b></h6><br />
                    <ul class=" list list-unstyled">
                        <li>Dern-Support is a small IT technical support company that provides computer repair services
                            to businesses and individual customers. The company offers on-site support for business
                            customers, while individuals can either drop off their computers at one of the company's
                            offices or arrange for them to be delivered by a courier.</li>
                    </ul>
                </div>
                <div class="col-4">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-geo-alt m-2" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <h6 class="d-inline"><b>Our branches</b></h6>
                    </div>
                    <ul class=" list m-3">
                        <li>
                            <a href="https://www.google.com/maps?q=123+Main+Street,+Anytown+USA+12345" target="_blank"
                                rel="noopener noreferrer">
                                Cairo
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps?q=123+Main+Street,+Anytown+USA+12345" target="_blank"
                                rel="noopener noreferrer">
                                Giza
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps?q=123+Main+Street,+Anytown+USA+12345" target="_blank"
                                rel="noopener noreferrer">
                                Alexandria
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps?q=123+Main+Street,+Anytown+USA+12345" target="_blank"
                                rel="noopener noreferrer">
                                El-Gharbia
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps?q=123+Main+Street,+Anytown+USA+12345" target="_blank"
                                rel="noopener noreferrer">
                                El-Mansoura
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr />
            <p class=" text-center"> &copy; All rights reserved for Nouran Abdelgwad • 2024</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
