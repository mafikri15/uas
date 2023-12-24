<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .login-container {
            margin: 100px auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="<?= site_url('auth/login'); ?>" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <button class="login-button" type="submit">Login</button>
        </form>
    </div>
</body>
<?= $this->endSection(); ?>