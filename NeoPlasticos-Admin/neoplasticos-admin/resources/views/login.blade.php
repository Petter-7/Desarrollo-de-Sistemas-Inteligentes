
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceso | NeoPlásticos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f8fb;
        }

        .login-card {
            max-width: 420px;
            border: none;
            border-radius: 14px;
        }

        .brand {
            color: #0a2f4f;
        }

        .brand span {
            color: #00a8c6;
        }

        .btn-primary {
            background: #0f5f87;
            border-color: #0f5f87;
        }
    </style>
</head>

<body>

<main class="container d-flex align-items-center justify-content-center min-vh-100">

    <div class="card shadow login-card w-100">
        <div class="card-body p-4 p-md-5">

            <h2 class="text-center fw-bold brand mb-2">
                Neo<span>Plásticos</span>
            </h2>

            <h1 class="h4 text-center mb-4">Iniciar sesión</h1>

            <form onsubmit="event.preventDefault(); alert('Inicio de sesión de demostración.');">

                <div class="mb-3">
                    <label for="usuario" class="form-label">
                        Usuario o correo
                    </label>

                    <input type="text" class="form-control"
                        id="usuario" name="usuario"
                        placeholder="Ingresa tu usuario" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        Contraseña
                    </label>

                    <input type="password" class="form-control"
                        id="password" name="password"
                        placeholder="Ingresa tu contraseña" required>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox"
                        id="recordar" name="recordar">

                    <label class="form-check-label" for="recordar">
                        Recordarme
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Entrar
                </button>

            </form>

            <div class="text-center mt-4">
                <a href="{{ route('inicio') }}" class="text-decoration-none">
                    Volver al inicio
                </a>
            </div>

            <p class="text-center text-muted small mt-4 mb-0">
                Sistema administrativo NeoPlásticos
            </p>

        </div>
    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
