<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fff5f5 0%, #ffe6e6 100%);
            min-height: 100vh;
            color: #2d1a1a;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: linear-gradient(135deg, #8B0000 0%, #cc0000 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(139, 0, 0, 0.3);
            text-align: center;
        }

        header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }

        header p {
            font-size: 1.1em;
            opacity: 0.9;
        }

        .alert {
            background: #8B0000;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 500;
            border-left: 5px solid #ffcc00;
        }

        /* Botones generales */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1em;
        }

        .btn-primary {
            background: #8B0000;
            color: white;
            box-shadow: 0 2px 5px rgba(139, 0, 0, 0.3);
        }

        .btn-primary:hover {
            background: #cc0000;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139, 0, 0, 0.4);
        }

        .btn-secondary {
            background: #555;
            color: white;
        }

        .btn-secondary:hover {
            background: #777;
            transform: translateY(-2px);
        }

        .btn-danger {
            background: #8B0000;
            color: white;
        }

        .btn-danger:hover {
            background: #ff0000;
            transform: translateY(-2px);
        }

        /* Tarjetas de libros */
        .libros-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .libro-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border-left: 5px solid #8B0000;
        }

        .libro-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(139, 0, 0, 0.2);
        }

        .libro-content {
            padding: 20px;
        }

        .libro-titulo {
            font-size: 1.4em;
            font-weight: bold;
            color: #8B0000;
            margin-bottom: 12px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 8px;
        }

        .libro-autor {
            color: #555;
            margin-bottom: 10px;
            font-size: 1em;
        }

        .libro-autor strong {
            color: #8B0000;
        }

        .libro-paginas {
            color: #777;
            margin-bottom: 15px;
            font-size: 0.9em;
        }

        .libro-paginas strong {
            color: #8B0000;
        }

        .libro-fecha {
            color: #999;
            font-size: 0.8em;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #f0f0f0;
        }

        .libro-acciones {
            margin-top: 15px;
            text-align: right;
            font-size: 0.9em;
        }

        .libro-acciones a {
            text-decoration: none;
            font-weight: 600;
        }

        .btn-ver {
            color: #4CAF50;
        }

        .btn-ver:hover {
            text-decoration: underline;
        }

        .btn-editar {
            color: #ffc107;
        }

        .btn-editar:hover {
            text-decoration: underline;
        }

        .btn-eliminar {
            background: none;
            border: none;
            color: #f44336;
            font-weight: 600;
            cursor: pointer;
            font-size: 0.9em;
            padding: 0;
            font-family: inherit;
        }

        .btn-eliminar:hover {
            text-decoration: underline;
        }

        /* Formularios */
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        .form-container h2 {
            color: #8B0000;
            margin-bottom: 25px;
            text-align: center;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #8B0000;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #8B0000;
            box-shadow: 0 0 5px rgba(139, 0, 0, 0.3);
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #8B0000;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button[type="submit"]:hover {
            background: #cc0000;
            transform: translateY(-2px);
        }

        /* Página de detalle */
        .libro-detalle {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .libro-header {
            background: linear-gradient(135deg, #8B0000 0%, #cc0000 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .libro-header h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .libro-body {
            padding: 30px;
        }

        .info-item {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .info-label {
            font-weight: bold;
            color: #8B0000;
            font-size: 0.9em;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 1.2em;
            color: #333;
        }

        /* Botones de navegación */
        .nav-buttons {
            margin-top: 30px;
            text-align: center;
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Mensaje vacío */
        .empty-message {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .empty-message p {
            color: #999;
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            header h1 {
                font-size: 1.8em;
            }
            
            .libros-grid {
                grid-template-columns: 1fr;
            }
            
            .form-container {
                padding: 20px;
                margin: 15px;
            }
            
            .nav-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .nav-buttons .btn,
            .nav-buttons form {
                width: 100%;
                max-width: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Biblioteca Virtual</h1>
            <p>Sistema de gestión de libros</p>
        </header>
        
        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif
        
        @yield('content')
    </div>
</body>
</html>