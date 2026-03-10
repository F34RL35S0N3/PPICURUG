<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background: url('https://images.unsplash.com/photo-1495616811223-4d98c6e9c869?w=1200&h=800&fit=crop') center/cover no-repeat fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        /* Dark overlay */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: -1;
        }

        #app {
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        /* Glassmorphism Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 50px 40px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            width: 100%;
            max-width: 450px;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .glass-card h1,
        .glass-card h2,
        .glass-card h3,
        .glass-card h4,
        .glass-card h5,
        .glass-card h6 {
            color: #ffffff;
            font-weight: 600;
            margin-bottom: 10px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .glass-card p {
            color: rgba(255, 255, 255, 0.9);
        }

        .glass-card label {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            margin-bottom: 8px;
        }

        .glass-card .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        .glass-card .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .glass-card .form-control:focus {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.5);
            color: #ffffff;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
        }

        .glass-card .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            color: #ffffff;
            width: 100%;
            margin-top: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .glass-card .btn-primary:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }

        .glass-card a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .glass-card a:hover {
            color: #e0e0e0;
            text-decoration: underline;
        }

        .glass-card .divider {
            color: rgba(255, 255, 255, 0.5);
            margin: 25px 0;
            text-align: center;
            position: relative;
        }

        .glass-card .divider::before,
        .glass-card .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 45%;
            height: 1px;
            background: rgba(255, 255, 255, 0.3);
        }

        .glass-card .divider::before {
            left: 0;
        }

        .glass-card .divider::after {
            right: 0;
        }

        .glass-card .form-check-input {
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .glass-card .form-check-input:checked {
            background-color: #667eea;
            border-color: #667eea;
        }

        .glass-card .text-danger {
            color: #ff6b6b !important;
        }

        .glass-card .small-text {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .glass-card {
                padding: 40px 25px;
                max-width: 100%;
            }

            .glass-card h1,
            .glass-card h2,
            .glass-card h3 {
                font-size: 24px;
            }
        }
    </style>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
</head>
<body>
    <div id="app">
        <div class="glass-card">
            {{ $slot }}
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
