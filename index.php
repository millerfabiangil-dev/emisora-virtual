<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Emisora La Máxima</title>
  <style>
    /* Fuente y estilos base */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: #111; /* negro de fondo */
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      overflow: hidden;
    }

    header img {
      width: 250px; /* portada más pequeña */
      max-width: 90%;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.5);
      margin-bottom: 20px;
      animation: fadeInDown 1s ease;
    }

    header h1 {
      font-size: 2.8rem;
      margin-bottom: 15px;
      color: #FFD700; /* amarillo */
      animation: fadeInDown 1.2s ease;
    }

    main p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      max-width: 600px;
      line-height: 1.6;
      animation: fadeIn 1.2s ease;
      color: #eee;
    }

    /* Botones */
    .btn {
      display: inline-block;
      margin: 10px;
      padding: 12px 25px;
      border-radius: 30px;
      background: #FFD700;
      color: #000;
      text-decoration: none;
      font-weight: bold;
      font-size: 1rem;
      box-shadow: 0 5px 15px rgba(0,0,0,0.4);
      transition: all 0.3s ease;
    }

    .btn:hover {
      background: #000;
      color: #FFD700;
      transform: scale(1.1);
    }

    /* Animaciones */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }

  </style>
</head>
<body>
  <header>
    <!-- Imagen de portada -->
    <img src="img/logo-maxima.jpeg" alt="Portada de la emisora">
    <h1>🎶 Bienvenido a Emisora La Máxima 🎶</h1>
  </header>

  <main>
    <p>Tu emisora virtual favorita.  
    Regístrate o inicia sesión para ser parte de nuestra comunidad de oyentes 🎧</p>
    
    <!-- Botón de registro -->
    <a href="registro.php" class="btn">👉 Regístrate</a>
    
    <!-- Botón de login -->
    <a href="login.php" class="btn">🔑 Iniciar Sesión</a>
  </main>
</body>
</html>