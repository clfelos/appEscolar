<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'AppEscolar') }} - Organize sua Vida Escolar</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=nunito:400,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts and Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .hero-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #0d6efd;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand text-primary" href="{{ url('/') }}">
                <i class="bi bi-journal-check me-2"></i>{{ config('app.name', 'AppEscolar') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Recursos</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary ms-lg-3">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Entrar</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="btn btn-primary ms-lg-3">Cadastrar-se</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4 text-dark">Sua agenda escolar completa em um só lugar.</h1>
                    <p class="lead mb-5 text-secondary">Organize seus horários, receba avisos importantes e nunca mais perca um compromisso escolar. Feito para alunos e professores.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 me-md-2">Começar Agora</a>
                        <a href="#features" class="btn btn-outline-secondary btn-lg px-4">Saiba Mais</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="https://img.freepik.com/free-vector/hand-drawn-school-calendar-template_23-2149021644.jpg?t=st=1740232464~exp=1740236064~hmac=55355a6d3f237f379059f0f63e6e873995893122c83c928e833486c05041065a&w=740" alt="Agenda Escolar" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Tudo o que você precisa</h2>
                <p class="text-secondary">Recursos pensados para facilitar sua rotina acadêmica</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-calendar3"></i>
                        </div>
                        <h3 class="h4 fw-bold">Agenda de Estudos</h3>
                        <p class="text-secondary">Organize suas tarefas, provas e trabalhos por prioridade e data de entrega.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-megaphone"></i>
                        </div>
                        <h3 class="h4 fw-bold">Avisos em Tempo Real</h3>
                        <p class="text-secondary">Receba notificações instantâneas sobre mudanças de horários ou comunicados da escola.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h3 class="h4 fw-bold">Horário de Aulas</h3>
                        <p class="text-secondary">Tenha seu quadro de horários sempre à mão, organizado por dia e disciplina.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container">
            <h2 class="fw-bold mb-4">Pronto para transformar sua organização?</h2>
            <p class="lead mb-4">Junte-se a centenas de alunos que já simplificaram sua rotina escolar.</p>
            <a href="{{ route('register') }}" class="btn btn-light btn-lg px-5">Criar minha conta gratuita</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-light">
        <div class="container text-center">
            <p class="text-secondary mb-0">&copy; {{ date('Y') }} {{ config('app.name', 'AppEscolar') }}. Todos os direitos reservados.</p>
            <div class="mt-2">
                <a href="#" class="text-decoration-none text-secondary mx-2">Privacidade</a>
                <a href="#" class="text-decoration-none text-secondary mx-2">Termos de Uso</a>
                <a href="#" class="text-decoration-none text-secondary mx-2">Contato</a>
            </div>
        </div>
    </footer>
</body>
</html>
