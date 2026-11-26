
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NeoPlásticos | Soluciones industriales</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --neo-dark: #0a2f4f;
            --neo-blue: #0f5f87;
            --neo-cyan: #00a8c6;
            --neo-light: #f4f8fb;
        }

        body {
            color: #253746;
        }

        .navbar {
            background: white;
        }

        .navbar-brand {
            color: var(--neo-dark);
        }

        .btn-primary {
            background-color: var(--neo-blue);
            border-color: var(--neo-blue);
        }

        .btn-primary:hover {
            background-color: var(--neo-dark);
            border-color: var(--neo-dark);
        }

        .hero {
            background: linear-gradient(135deg, #071a29, #0f5f87);
        }

        .hero h1 span {
            color: var(--neo-cyan);
        }

        .service-card {
            border: 0;
            box-shadow: 0 4px 18px rgba(10, 47, 79, .08);
            transition: transform .2s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .section-light {
            background: var(--neo-light);
        }

        footer {
            background: #071a29;
        }
    </style>
</head>

<body>

    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg border-bottom sticky-top">
        <div class="container">

            <a class="navbar-brand fw-bold fs-4" href="{{ route('inicio') }}">
                Neo<span style="color: #00a8c6;">Plásticos</span>
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">

                <ul class="navbar-nav me-auto ms-lg-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('inicio') }}">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Soluciones</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>

                <a class="btn btn-outline-primary me-2"
                    href="{{ route('login') }}">
                    Iniciar sesión
                </a>

                <a class="btn btn-primary"
                    href="{{ route('panel') }}">
                    Ir al panel
                </a>

            </div>
        </div>
    </nav>

    <!-- Encabezado principal -->
    <header class="hero text-white py-5">
        <div class="container py-5 text-center">

            <h1 class="display-4 fw-bold">
                Soluciones industriales en <span>plásticos</span>
            </h1>

            <p class="lead col-lg-8 mx-auto mt-3">
                En NeoPlásticos desarrollamos soluciones de empaque
                y protección industrial adaptadas a las necesidades
                de cada empresa.
            </p>

            <a href="#servicios" class="btn btn-info btn-lg mt-3 text-white">
                Conocer nuestras soluciones
            </a>

        </div>
    </header>

    <!-- Servicios -->
    <section id="servicios" class="py-5">
        <div class="container">

            <h2 class="text-center fw-bold mb-2">
                Nuestras soluciones
            </h2>

            <p class="text-center text-muted mb-5">
                Productos orientados a las necesidades de la industria.
            </p>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body p-4">
                            <h3 class="h5 card-title fw-bold">
                                Bolsas de polietileno
                            </h3>

                            <p class="card-text">
                                Soluciones de empaque para almacenamiento,
                                protección y manejo de productos industriales.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body p-4">
                            <h3 class="h5 card-title fw-bold">
                                Empaques VCI
                            </h3>

                            <p class="card-text">
                                Materiales especializados para ayudar a
                                proteger componentes metálicos contra la corrosión.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body p-4">
                            <h3 class="h5 card-title fw-bold">
                                Soluciones a medida
                            </h3>

                            <p class="card-text">
                                Alternativas de empaque de acuerdo con los
                                requerimientos y características de cada cliente.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="section-light py-5">
        <div class="container" style="max-width: 600px;">

            <h2 class="text-center fw-bold mb-3">
                Contacta con nosotros
            </h2>

            <p class="text-center text-muted mb-4">
                Cuéntanos qué solución industrial necesitas.
            </p>

            <form>

                <div class="mb-3">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input class="form-control" id="nombre"
                        type="text" placeholder="Tu nombre">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="correo">Correo electrónico</label>
                    <input class="form-control" id="correo"
                        type="email" placeholder="correo@empresa.com">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="mensaje">Mensaje</label>
                    <textarea class="form-control" id="mensaje"
                        rows="4" placeholder="Describe lo que necesitas"></textarea>
                </div>

                <button class="btn btn-primary w-100" type="button">
                    Enviar solicitud
                </button>

            </form>

            <p class="text-muted small mt-3 text-center">
                Formulario de demostración del proyecto académico.
            </p>

        </div>
    </section>

    <!-- Pie de página -->
    <footer class="text-white-50 text-center py-4">
        <div class="container">
            <strong class="text-white">NeoPlásticos</strong>
            <p class="mb-0 mt-2">
                Soluciones de empaque y protección industrial.
            </p>
            <small>&copy; 2026 NeoPlásticos. Todos los derechos reservados.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
