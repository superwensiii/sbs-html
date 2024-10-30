<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            background: linear-gradient(90deg, rgba(221, 221, 221, 1) 2%, rgba(18, 18, 18, 1) 32%, rgba(0, 0, 0, 1) 81%);
        }

        /* Particles container */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
            top: 0;
            left: 0;
        }

        /* Login container */
        .login-container {
            position: relative;
            z-index: 2;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background: transparent;
        }
    </style>
</head>
<body>
    <!-- Particles Background -->
    <div id="particles-js"></div>

    <script type="text/javascript" src="js/particles.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <!-- Login Form Container -->
    <div class="login-container">
        <div class="card login-card">
            <div class="card-body">
                <h5 class="card-title text-center text-white">Login</h5>
                <form action="index.html" method="post">
                    <div class="form-group text-white">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group text-white">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-gray">Login</button>
                </form>
                <p class="text-center mt-3 text-white">
                    Don't have an account? <a href="register.html">Sign up</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Particles.js Script -->
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
