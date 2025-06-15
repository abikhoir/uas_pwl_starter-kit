<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>News Portal - Welcome</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    /* Reset and base */
    *, *::before, *::after {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      background-color: #EEEEEE;
      color: #222831;
      font-family: 'Inter', sans-serif;
      line-height: 1.5;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    /* Header */
    header {
      background: transparent;
      padding: 24px 0;
    }
    .nav-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 32px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo {
      font-weight: 600;
      font-size: 1.5rem;
      color: #222831;
      user-select: none;
      letter-spacing: 0.05em;
    }
    nav {
      display: flex;
      gap: 16px;
    }
    .btn {
      border: none;
      padding: 10px 24px;
      font-weight: 600;
      font-size: 1rem;
      border-radius: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 2px 6px rgba(0,0,0,0.12);
      user-select: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-width: 100px;
      text-align: center;
    }
    .btn-login {
      background: transparent;
      color: #00ADB5;
      border: 2px solid #00ADB5;
    }
    .btn-login:hover,
    .btn-login:focus {
      background: #00ADB5;
      color: #EEEEEE;
      box-shadow: 0 6px 15px rgba(0,173,181,0.5);
      outline-offset: 3px;
      outline: none;
    }
    .btn-register {
      background: #00ADB5;
      color: #EEEEEE;
      border: 2px solid #00ADB5;
      box-shadow: 0 4px 14px rgba(0,173,181,0.3);
    }
    .btn-register:hover,
    .btn-register:focus {
      background: #018a95;
      border-color: #018a95;
      box-shadow: 0 6px 15px rgba(1,138,149,0.6);
      outline-offset: 3px;
      outline: none;
    }

    /* Main hero content */
    main {
      flex-grow: 1;
      display: grid;
      place-items: center;
      padding: 96px 32px;
      text-align: center;
    }
    .hero-title {
      font-size: 3.2rem;
      font-weight: 600;
      margin-bottom: 16px;
      line-height: 1.2;
      color: #222831;
    }
    .hero-subtitle {
      font-size: 1.125rem;
      font-weight: 400;
      max-width: 520px;
      margin: 0 auto;
      color: #393E46;
      letter-spacing: 0.01em;
      line-height: 1.5;
    }

    /* Responsive */
    @media (max-width: 720px) {
      .hero-title {
        font-size: 2.4rem;
      }
      .hero-subtitle {
        font-size: 1rem;
        max-width: 100%;
        margin-bottom: 36px;
      }
      .btn {
        min-width: 140px;
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="nav-container">
      <a href="#" class="logo" aria-label="News Portal home">NewsPortal</a>
      <nav aria-label="Primary navigation">
        <a href="{{ route('login') }}" class="btn btn-login" role="button" tabindex="0">Login</a>
        <a href="{{ route('register') }}" class="btn btn-register" role="button" tabindex="0">Register</a>
      </nav>
    </div>
  </header>

  <main>
    <h1 class="hero-title">Stay Informed with the Latest News</h1>
    <p class="hero-subtitle">Your trusted source for breaking news, in-depth analysis, and real-time updates from around the world.</p>
  </main>
</body>
</html>