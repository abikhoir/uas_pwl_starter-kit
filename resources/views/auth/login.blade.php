<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NewsPortal - Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; }
    body {
      margin: 0;
      background: #EEEEEE;
      font-family: 'Inter', sans-serif;
      color: #222831;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 24px;
    }
    a { color: #00ADB5; text-decoration: none; font-weight: 600; transition: color 0.3s ease; }
    a:hover, a:focus { color: #018a95; outline: none; }
    button, input { font-family: inherit; font-size: 1rem; }
    .login-container {
      background: #FFFFFF;
      max-width: 400px;
      width: 100%;
      border-radius: 20px;
      padding: 48px 32px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
      box-sizing: border-box;
    }
    h1 {
      font-weight: 600;
      font-size: 2.5rem;
      margin-bottom: 24px;
      color: #222831;
      user-select: none;
      text-align: center;
    }
    form { display: flex; flex-direction: column; gap: 24px; }
    label { font-weight: 600; color: #393E46; margin-bottom: 8px; display: block; }
    input[type="email"], input[type="password"] {
      padding: 14px 16px;
      border: 2px solid #393E46;
      border-radius: 20px;
      transition: border-color 0.3s ease;
      width: 100%;
      color: #222831;
    }
    input[type="email"]::placeholder, input[type="password"]::placeholder { color: #8a8f96; }
    input[type="email"]:focus, input[type="password"]:focus {
      border-color: #00ADB5;
      outline: none;
      box-shadow: 0 0 8px rgba(0, 173, 181, 0.4);
    }
    .checkbox-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: 400;
      color: #222831cc;
      font-size: 0.9rem;
      user-select: none;
    }
    .checkbox-row input[type="checkbox"] {
      margin-right: 8px;
      cursor: pointer;
      width: 18px;
      height: 18px;
      accent-color: #00ADB5;
    }
    .forgot-password {
      font-weight: 600;
      color: #00ADB5;
      cursor: pointer;
      user-select: text;
    }
    button[type="submit"] {
      background: linear-gradient(135deg, #00ADB5 0%, #018a95 100%);
      border: none;
      color: #EEEEEE;
      font-weight: 700;
      padding: 14px 0;
      border-radius: 20px;
      cursor: pointer;
      transition: box-shadow 0.3s ease, transform 0.2s ease;
      user-select: none;
      box-shadow: 0 6px 20px rgba(0, 173, 181, 0.4);
      width: 100%;
    }
    button[type="submit"]:hover, button[type="submit"]:focus {
      box-shadow: 0 10px 28px rgba(1,138,149,0.7);
      transform: translateY(-2px);
      outline: none;
    }
    .btn-google {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      border-radius: 20px;
      border: 2px solid #393E46;
      color: #393E46;
      background: #fff;
      font-weight: 700;
      cursor: pointer;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      padding: 12px 16px;
      width: 100%;
      user-select: none;
      box-shadow: 0 0 8px rgba(0,0,0,0.05);
    }
    .btn-google:hover, .btn-google:focus {
      background-color: #f0f0f0;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      outline: none;
    }
    .btn-google svg {
      width: 20px;
      height: 20px;
      flex-shrink: 0;
    }
    @media (max-width: 440px) {
      .login-container { padding: 36px 24px; }
      h1 { font-size: 2rem; }
      button[type="submit"], .btn-google { font-size: 0.95rem; padding: 12px 0; }
    }
  </style>
</head>
<body>
  <main>
    <section class="login-container" aria-label="Login form">
      <h1>Login to NewsPortal</h1>
      @if (session('status'))
        <div style="color: #00ADB5; text-align:center; margin-bottom:18px; font-weight:600;">{{ session('status') }}</div>
      @endif
      <form method="POST" action="{{ route('login') }}" novalidate>
        @csrf
        <div>
          <label for="email">Email address</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="you@example.com"
            required
            autocomplete="email"
            aria-describedby="email-note"
            value="{{ old('email') }}"
            autofocus
          />
          @error('email')
            <div style="color:#e53935; font-size:0.95rem; margin-top:4px;">{{ $message }}</div>
          @enderror
        </div>
        <div>
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            required
            autocomplete="current-password"
          />
          @error('password')
            <div style="color:#e53935; font-size:0.95rem; margin-top:4px;">{{ $message }}</div>
          @enderror
        </div>
        <div class="checkbox-row">
          <label style="margin-bottom:0; font-weight:400;">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
            Remember me
          </label>
          <a href="{{ route('password.request') }}" class="forgot-password" tabindex="0">Forgot password?</a>
        </div>
        <button type="submit" aria-label="Login to your account">Login</button>
      </form>
      <form method="GET" action="{{ route('auth.google.redirect') }}" style="margin-top:18px;">
        <button type="submit" class="btn-google" aria-label="Login with Google">
          <svg role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 533.5 544.3">
            <path fill="#4285F4" d="M533.5 278.4c0-18.4-1.5-36-4.3-53.4H272v100.9h146.7c-6.3 33.8-25.6 62.4-54.6 81.5v67h88.2c51.6-47.5 81.6-117.5 81.6-196z"/>
            <path fill="#34A853" d="M272 544.3c73.6 0 135.5-24.4 180.6-66.4l-88.2-67c-24.6 16.5-56 26.2-92.4 26.2-70.9 0-131.1-47.9-152.7-112.2h-89.5v70.5c45.7 90 138.6 148 242.2 148z"/>
            <path fill="#FBBC05" d="M119.3 324.4c-7.2-21.6-7.2-44.8 0-66.4v-70.5h-89.5c-37.2 73.3-37.2 160.9 0 234.2l89.5-70.5z"/>
            <path fill="#EA4335" d="M272 210.3c39.4 0 74.8 13.5 102.5 40.1l76.9-76.9c-48-44.7-110.3-71.9-179.3-71.9-103.6 0-196.5 58-242.2 148l89.5 70.5c21.6-64.4 81.8-112.2 152.6-112.2z"/>
          </svg>
          Login with Google
        </button>
      </form>
    </section>
  </main>
</body>
</html>


