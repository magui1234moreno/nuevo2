

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portafolio</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Íconos Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <link 
  rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
>


  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #FFB6C1;
      scroll-behavior: smooth;
    }
    header {
      margin-bottom: 2rem;
    }
    .hero img {
      border-radius: 10px;
      max-width: 100%;
      height: auto;
    }
    section {
      padding: 80px 0;
    }
    footer {
      background: #fff;
      padding: 20px 0;
      margin-top: 50px;
    }
     /* Botón flotante de WhatsApp */
    /* Botón flotante de WhatsApp */
.whatsapp-float {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #25d366;
  color: white;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  text-align: center;
  font-size: 30px;
  box-shadow: 2px 2px 3px #999;
  z-index: 100;
}

.whatsapp-float i {
  margin-top: 15px;
}

.whatsapp-float:hover {
  background-color: #1ebe5d;
}

  </style>
</head>
<body>

  <!-- Navbar -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">Magdalena M.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="#inicio">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="#proyectos">Proyectos</a></li>
            <li class="nav-item"><a class="nav-link" href="#sobreMi">Sobre mí</a></li>
            <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- SECCIÓN INICIO -->
  <section id="inicio" class="container hero mt-5 pt-5">
    <div class="row align-items-center">
      <div class="col-md-5 text-center">
        <img src="eer.jpg" alt="Magdalena Moreno Merino" class="img-fluid shadow">
      </div>
      <div class="col-md-7 mt-4 mt-md-0">
        <h1 class="text-uppercase fw-bold">Magdalena Moreno Merino</h1>
        <h2 class="text-muted">Desarrolladora de aplicaciones web y móviles</h2>
        <p class="mt-3">
          Apasionada por crear soluciones digitales eficientes, innovadoras y centradas en la experiencia del usuario.
          Siempre aprendiendo y mejorando mis habilidades en desarrollo web y móvil.
        </p>
      </div>
    </div>
  </section>

  <!-- SECCIÓN PROYECTOS -->
  <section id="proyectos" class="container">
    <h2 class="text-center mb-4">Mis Proyectos</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <img src="dental.webp" class="card-img-top img-fluid" alt="Proyecto dental">
          <div class="card-body">
            <h5 class="card-title">Página web de un consultorio dental</h5>
            <p class="card-text">Sitio para agendar citas en línea fácilmente y verificar información sin desplazarse.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <img src="flor.webp" class="card-img-top img-fluid" alt="Proyecto florería">
          <div class="card-body">
            <h5 class="card-title">Página web de una florería</h5>
            <p class="card-text">Permite realizar pedidos en línea de manera rápida y práctica.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN SOBRE MÍ -->
  <section id="sobreMi" class="container">
    <h2 class="text-center mb-4">Sobre mí</h2>
    <div class="row align-items-center">
      <div class="col-md-4 text-center mb-3">
        <img src="23e.jpg" alt="Magdalena Moreno Merino" class="img-fluid rounded-circle shadow">
      </div>
      <div class="col-md-8">
        <p>
          ¡Hola! Soy <strong>Magdalena Moreno Merino</strong>, desarrolladora de aplicaciones web y móviles.
          Me apasiona la tecnología y la innovación, y me motiva crear soluciones digitales que mejoren 
          la experiencia de las personas.
        </p>
        <p>
          Tengo experiencia en <strong>HTML, CSS, JavaScript y Bootstrap</strong>, además de bases de datos y 
          programación en Python. Siempre estoy aprendiendo y explorando nuevas herramientas.
        </p>
        <h4 class="mt-4">Mis habilidades</h4>
        <ul class="list-group">
          <li class="list-group-item">💻 Desarrollo web: HTML, CSS, JavaScript, Bootstrap</li>
          <li class="list-group-item">📱 Aplicaciones móviles</li>
          <li class="list-group-item">🛠️ Bases de datos y Python</li>
          <li class="list-group-item">🤝 Trabajo en equipo y comunicación</li>
          <li class="list-group-item">🎨 Creatividad y diseño UX/UI</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- SECCIÓN CONTACTO -->
  <section id="contacto" class="container">
    <h2 class="text-center mb-4">Contáctame</h2>
    <div class="row align-items-center mb-4">
      <div class="col-md-4 text-center mb-3">
        <img src="56r.jpg" class="img-thumbnail img-fluid" alt="Magdalena Moreno Merino">
      </div>
      <div class="col-md-8">
        <h3>Información de Contacto</h3>
        <p><i class="bi bi-telephone-fill"></i> <strong>Teléfono:</strong> 953 156 35 88</p>
        <p><i class="bi bi-envelope-fill"></i> <strong>Correo:</strong> elenamorenocorreo7@gmail.com</p>
        <p><i class="bi bi-geo-alt-fill"></i> <strong>Ubicación:</strong> Oaxaca, México</p>
      </div>
    </div>
    <a
    href="https://wa.me/529531563588?text=Hola,%20quiero%20más%20información"
    class="whatsapp-float"
    target="_blank"
    title="Chatea con nosotros por WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>


  <!-- Footer -->
  <footer class="text-center text-muted">
    &copy; 2025 Magdalena Moreno Merino. Todos los derechos reservados.
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
