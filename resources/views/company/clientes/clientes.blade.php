<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Font Awesome -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
        />
        <!-- MDB -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.css"
            rel="stylesheet"
        />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <header>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg bg-body fixed-top">
              <div class="container-fluid">
                <button
                  data-mdb-collapse-init
                  class="navbar-toggler"
                  type="button"
                  data-mdb-target="#navbarExample01"
                  aria-controls="navbarExample01"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" aria-current="page" href="{{ route('company.home') }}">Principal</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Proyectos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('company.client') }}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Salir</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </nav>
            <!-- Navbar -->
          
            <!-- Background image -->
            <div
              class="p-5 text-center bg-image"
              style="
                background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
                height: 400px;
                margin-top: 58px;
              "
            >
              <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <div class="text-white">
                    <h1 class="mb-3">VideoClub</h1>
                    <h4 class="mb-3">La mejor experiencia</h4>
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button"
                    >BLOG</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <!-- Background image -->

        </header>

        <main>

            <div class="container py-5">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
                    <form method="POST" action="/company/client/add">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        @csrf
                        <div class="row mb-4">
                            <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="name" name="name" class="form-control" />
                                <label class="form-label" for="name">Nombre</label>
                            </div>
                            </div>
                            <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="dni" name="dni" class="form-control" />
                                <label class="form-label" for="dni">DNI</label>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="email" name="email" class="form-control" />
                                <label class="form-label" for="email">Correo Electrónico</label>
                            </div>
                            </div>
                            <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="phone" name="phone" class="form-control" />
                                <label class="form-label" for="phone">Telefono</label>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text"  id="address" name="address" class="form-control" />
                                <label class="form-label" for="address">Dirección</label>
                            </div>
                            </div>
                        </div>
                        <button  type="submit" class="btn btn-primary btn-block mb-4">+ Cliente</button>
                    </form>
                </div>
            </div>

            <div class="container py-5">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                          <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Position</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                <div class="d-flex align-items-center">
                                    <img
                                        src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                        alt=""
                                        style="width: 45px; height: 45px"
                                        class="rounded-circle"
                                        />
                                    <div class="ms-3">
                                    <p class="fw-bold mb-1">John Doe</p>
                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                    </div>
                                </div>
                                </td>
                                <td>
                                <p class="fw-normal mb-1">Software engineer</p>
                                <p class="text-muted mb-0">IT department</p>
                                </td>
                                <td>
                                <span class="badge badge-success rounded-pill d-inline">Active</span>
                                </td>
                                <td>Senior</td>
                                <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                    Edit
                                </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <div class="d-flex align-items-center">
                                    <img                                
                                        src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                        class="rounded-circle"
                                        alt=""
                                        style="width: 45px; height: 45px"
                                        />
                                    <div class="ms-3">
                                    <p class="fw-bold mb-1">Alex Ray</p>
                                    <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                    </div>
                                </div>
                                </td>
                                <td>
                                <p class="fw-normal mb-1">Consultant</p>
                                <p class="text-muted mb-0">Finance</p>
                                </td>
                                <td>
                                <span class="badge badge-primary rounded-pill d-inline"
                                        >Onboarding</span
                                    >
                                </td>
                                <td>Junior</td>
                                <td>
                                <button
                                        type="button"
                                        class="btn btn-link btn-rounded btn-sm fw-bold"
                                        data-mdb-ripple-color="dark"
                                        >
                                    Edit
                                </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <div class="d-flex align-items-center">
                                    <img
                                        src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                        class="rounded-circle"
                                        alt=""
                                        style="width: 45px; height: 45px"
                                        />
                                    <div class="ms-3">
                                    <p class="fw-bold mb-1">Kate Hunington</p>
                                    <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                    </div>
                                </div>
                                </td>
                                <td>
                                <p class="fw-normal mb-1">Designer</p>
                                <p class="text-muted mb-0">UI/UX</p>
                                </td>
                                <td>
                                <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                                </td>
                                <td>Senior</td>
                                <td>
                                <button
                                        type="button"
                                        class="btn btn-link btn-rounded btn-sm fw-bold"
                                        data-mdb-ripple-color="dark"
                                        >
                                    Edit
                                </button>
                                </td>
                            </tr>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <img
                                            src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                            class="rounded-circle"
                                            alt=""
                                            style="width: 45px; height: 45px"
                                            />
                                        <div class="ms-3">
                                        <p class="fw-bold mb-1">{{ $client->name }}</p>
                                        <p class="text-muted mb-0">{{ $client->email }}</p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <p class="fw-normal mb-1">Developer</p>
                                    <p class="text-muted mb-0">Node| Python| Java| .Net</p>
                                    </td>
                                    <td>
                                    <span class="badge badge-warning rounded-pill d-inline">{{ $client->phone }}</span>
                                    </td>
                                    <td>Junior</td>
                                    <td>
                                    <button
                                            type="button"
                                            class="btn btn-link btn-rounded btn-sm fw-bold"
                                            data-mdb-ripple-color="dark"
                                            >
                                        Edit
                                    </button>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </main>

        <!-- MDB -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.umd.min.js"
        ></script>
    </body>
    
</html>