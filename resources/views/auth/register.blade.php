<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NewsPortal - Register</title>
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
    .register-container {
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
    input[type="text"], input[type="email"], input[type="password"] {
      padding: 14px 16px;
      border: 2px solid #393E46;
      border-radius: 20px;
      transition: border-color 0.3s ease;
      width: 100%;
      color: #222831;
    }
    input::placeholder { color: #8a8f96; }
    input:focus {
      border-color: #00ADB5;
      outline: none;
      box-shadow: 0 0 8px rgba(0, 173, 181, 0.4);
    }
    .already-registered {
      font-size: 0.9rem;
      text-align: center;
      color: #393E46cc;
      user-select: none;
    }
    .already-registered a {
      font-weight: 600;
      color: #00ADB5;
      text-decoration: none;
      cursor: pointer;
    }
    .already-registered a:hover, .already-registered a:focus {
      color: #018a95;
      outline: none;
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
    @media (max-width: 440px) {
      .register-container { padding: 36px 24px; }
      h1 { font-size: 2rem; }
      button[type="submit"] { font-size: 0.95rem; padding: 12px 0; }
    }
  </style>
</head>
<body>
  <main>
    <section class="register-container" aria-label="Register form">
      <h1>Create Account</h1>
      <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf
        <div>
          <label for="name">Full Name</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Your full name"
            required
            autocomplete="name"
            value="{{ old('name') }}"
            autofocus
          />
          @error('name')
            <div style="color:#e53935; font-size:0.95rem; margin-top:4px;">{{ $message }}</div>
          @enderror
        </div>
        <div>
          <label for="email">Email address</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="you@example.com"
            required
            autocomplete="email"
            value="{{ old('email') }}"
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
            placeholder="Create a password"
            required
            autocomplete="new-password"
          />
          @error('password')
            <div style="color:#e53935; font-size:0.95rem; margin-top:4px;">{{ $message }}</div>
          @enderror
        </div>
        <div>
          <label for="password_confirmation">Confirm Password</label>
          <input
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            placeholder="Confirm your password"
            required
            autocomplete="new-password"
          />
          @error('password_confirmation')
            <div style="color:#e53935; font-size:0.95rem; margin-top:4px;">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" aria-label="Register an account">Register</button>
      </form>
      <p class="already-registered">
        Already registered? <a href="{{ route('login') }}">Login here</a>
      </p>
    </section>
  </main>
</body>
</html>
