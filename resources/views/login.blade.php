<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    
    .login-container {
      background-color: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    .logo-container {
      text-align: center;
      margin-bottom: 30px;
    }

    .logo {
      width: 100px;
      height: auto;
    }

    h1 {
      text-align: center;
      color: #333;
      font-size: 24px;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #333;
      font-weight: 500;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
      transition: border-color 0.3s ease;
      box-sizing: border-box;
    }

    .form-group input:focus {
      border-color: #ff4444;
      outline: none;
    }

    .remember-forgot {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      font-size: 14px;
    }

    .remember-me {
      display: flex;
      align-items: center;
    }

    .remember-me input {
      margin-right: 8px;
    }

    .forgot-password {
      color: #ff4444;
      text-decoration: none;
    }

    .forgot-password:hover {
      text-decoration: underline;
    }

    .login-button {
      width: 100%;
      padding: 12px;
      background-color: #ff4444;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-button:hover {
      background-color: #cc0000;
    }

    .divider {
      text-align: center;
      margin: 20px 0;
      position: relative;
    }

    .divider::before,
    .divider::after {
      content: "";
      position: absolute;
      top: 50%;
      width: 45%;
      height: 1px;
      background-color: #ddd;
    }

    .divider::before {
      left: 0;
    }

    .divider::after {
      right: 0;
    }

    .social-login {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .social-button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 5px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: opacity 0.3s ease;
    }

    .google-btn {
      background-color: #db4437;
      color: white;
    }

    .facebook-btn {
      background-color: #3b5998;
      color: white;
    }

    .social-button:hover {
      opacity: 0.9;
    }

    .signup-link {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }

    .signup-link a {
      color: #ff4444;
      text-decoration: none;
      font-weight: 600;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .login-container {
        width: 90%;
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="logo-container">
      <img src="https://seeklogo.com/images/R/rocket-chicken-indonesia-logo-A8DACBABE3-seeklogo.com.png" alt="Logo" class="logo">
    </div>
    
    <h1>Login</h1>
    
    <form>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" required>
      </div>

      <div class="remember-forgot">
        <div class="remember-me">
          <input type="checkbox" id="remember">
          <label for="remember">Remember me</label>
        </div>
        <a href="#" class="forgot-password">Forgot password?</a>
      </div>

      <button type="submit" class="login-button">Login</button>
    </form>

    <div class="divider">or</div>

    <div class="social-login">
      <button class="social-button google-btn">Continue with Google</button>
      <button class="social-button facebook-btn">Continue with Facebook</button>
    </div>

    <div class="signup-link">
      Don't have an account? <a href="#">Sign up</a>
    </div>
  </div>
</body>
</html>