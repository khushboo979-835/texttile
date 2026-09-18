<?php
include '../common/config.php';
include 'includes/db.php';

$message = "";

if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password'] ?? '');
    
    // Validation
    if (empty($name) || empty($email) || empty($password)) {
        $message = "<div class='alert alert-danger'>All fields are required!</div>";
    } else if (strlen($name) < 3) {
        $message = "<div class='alert alert-danger'>Name must be at least 3 characters!</div>";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "<div class='alert alert-danger'>Invalid email format!</div>";
    } else if (strlen($password) < 6) {
        $message = "<div class='alert alert-danger'>Password must be at least 6 characters!</div>";
    } else if ($password !== $confirm_password) {
        $message = "<div class='alert alert-danger'>Passwords do not match!</div>";
    } else {
        // Check if email already exists using prepared statement
        $check_stmt = $conn->prepare("SELECT id FROM register WHERE email = ?");
        $check_stmt->bind_param("s", $email);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();
        
        if ($check_result->num_rows > 0) {
            $message = "<div class='alert alert-danger'>Email already exists!</div>";
        } else {
            // Hash password and insert new user
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $role = 'admin'; // Default role
            
            $insert_stmt = $conn->prepare("INSERT INTO register (name, email, password, role) VALUES (?, ?, ?, ?)");
            $insert_stmt->bind_param("ssss", $name, $email, $hashed_password, $role);
            
            if ($insert_stmt->execute()) {
                $message = "<div class='alert alert-success'>Registration successful! <a href='login.php'>Login here</a></div>";
            } else {
                $message = "<div class='alert alert-danger'>Error: Unable to register. Please try again. " . $conn->error . "</div>";
            }
            $insert_stmt->close();
        }
        $check_stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration | A&T Tensile Techworks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../assets/images/background/1.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }
        .register-card h2 {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: var(--secondary-color);
        }
    </style>
</head>
<body>

<div class="register-card">
    <h2>Admin Register</h2>
    <?php echo $message; ?>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" id="name" required placeholder="Enter your full name" minlength="3">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" id="email" required placeholder="Enter your email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <input type="password" name="password" class="form-control" id="password" required placeholder="Enter password (min 6 chars)" minlength="6">
                <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('password', 'eye1')"><i class="bi bi-eye" id="eye1"></i></button>
            </div>
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <div class="input-group">
                <input type="password" name="confirm_password" class="form-control" id="confirm_password" required placeholder="Confirm password" minlength="6">
                <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('confirm_password', 'eye2')"><i class="bi bi-eye" id="eye2"></i></button>
            </div>
        </div>
        <button type="submit" name="register" class="btn btn-primary mt-2">Register</button>
        <div class="text-center mt-3 small">
            <span>Already have an account? </span><a href="login.php" class="text-decoration-none">Login here</a>
        </div>
    </form>
</div>

<script>
function togglePassword(inputId, iconId) {
    const input = document.getElementById(inputId);
    const icon = document.getElementById(iconId);
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("bi-eye");
        icon.classList.add("bi-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("bi-eye-slash");
        icon.classList.add("bi-eye");
    }
}
</script>

</body>
</html>
