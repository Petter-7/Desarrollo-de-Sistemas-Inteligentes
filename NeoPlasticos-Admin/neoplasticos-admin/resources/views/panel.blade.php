
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel administrativo | NeoPlásticos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f8fb;
        }

        .navbar {
            background: #0a2f4f;
        }

        .sidebar {
            background: white;
            min-height: calc(100vh - 56px);
        }

        .sidebar .nav-link {
            color: #253746;
        }

        .sidebar .nav-link.active {
            background: #e5f4f8;
            color: #0f5f87;
            font-weight: bold;
        }

        .stat-card {
            border: none;
            border-radius: 12px;
        }

        .stat-number {
            color: #0f5f87;
        }
    </style>
</head>

<body>

<!-- Barra superior -->
<nav class="navbar navbar-dark">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="{{ route('inicio') }}">
            NeoPlásticos | Administración
        </a>

        <div class="dropdown">
            <button class="btn btn-outline-light dropdown-toggle"
                data-bs-toggle="dropdown">
                Administrador
            </button>

            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="{{ route('inicio') }}">
                        Página principal
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="{{ route('login') }}">
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- Menú lateral -->
        <aside class="col-md-3 col-lg-2 sidebar border-end p-3">

            <h6 class="text-muted mb-3">MENÚ PRINCIPAL</h6>

            <ul class="nav flex-column gap-2">

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('panel') }}">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Clientes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Cotizaciones
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Reportes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Configuración
                    </a>
                </li>

            </ul>

        </aside>

        <!-- Contenido principal -->
        <main class="col-md-9 col-lg-10 p-4">

            <h1 class="h3 fw-bold mb-1">Resumen administrativo</h1>

            <p class="text-muted mb-4">
                Bienvenido al sistema de gestión de NeoPlásticos.
            </p>

            <!-- Indicadores dinámicos -->
            <div class="row g-3 mb-4">

                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card shadow-sm">
                        <div class="card-body">
                            <p class="text-muted mb-1">Clientes</p>
                            <div class="fs-3 fw-bold stat-number">
                                {{ number_format($clientes) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card shadow-sm">
                        <div class="card-body">
                            <p class="text-muted mb-1">Ventas</p>
                            <div class="fs-3 fw-bold stat-number">
                                ${{ number_format($ventas, 2) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card shadow-sm">
                        <div class="card-body">
                            <p class="text-muted mb-1">Cotizaciones pendientes</p>
                            <div class="fs-3 fw-bold stat-number">
                                {{ number_format($cotizaciones) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card stat-card shadow-sm">
                        <div class="card-body">
                            <p class="text-muted mb-1">Incidencias</p>
                            <div class="fs-3 fw-bold text-danger">
                                {{ number_format($incidencias) }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Registros de demostración -->
            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white py-3">
                    <strong>Últimos registros</strong>
                </div>

                <div class="table-responsive">

                    <table class="table table-hover mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Estado</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ana López</td>
                                <td>ana@correo.com</td>
                                <td><span class="badge text-bg-success">Activo</span></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Luis Pérez</td>
                                <td>luis@correo.com</td>
                                <td><span class="badge text-bg-warning">Pendiente</span></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>María Ruiz</td>
                                <td>maria@correo.com</td>
                                <td><span class="badge text-bg-secondary">Inactivo</span></td>
                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>

            <p class="text-muted small mt-3">
                Datos ilustrativos para el proyecto académico.
            </p>

        </main>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
