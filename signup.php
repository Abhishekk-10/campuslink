<?php

require_once 'config/config.php';

$success = "";
$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $university = $_POST['university'];
    $experience = $_POST['experience'];

    
    $sql = "INSERT INTO users (email, password, university, experience)
            VALUES ('$email', '$password', '$university', '$experience')";

    if ($conn->query($sql) === TRUE) {
     
        header("Location: Login.php");  
        exit();
    } else {
        $error = "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusLink - Create Account</title>
    <link rel="stylesheet" href="style/signup.css">
</head>
<body>
    <div class="container">
        <!-- Background Elements -->
        <div class="bg-overlay"></div>
        <div class="decorative-element top-left"></div>
        <div class="decorative-element bottom-right"></div>
        <div class="line-element left"></div>
        <div class="line-element right"></div>
        
        <!-- Main Content -->
        <div class="content">
            <!-- Header -->
            <div class="header">
                <h1 class="main-title">CampusLink</h1>
                <p class="subtitle">Surround yourself with passion, purpose & people who make a difference</p>
            </div>
            
            <!-- Registration Card -->
            <div class="registration-card">
                <div class="card-header">
                    <h2 class="card-title">Join CampusLink</h2>
                    <p class="card-description">Stay connected with your campus like never before</p>
                </div>

                <!-- Show success/error message -->
                <?php if ($success): ?>
                    <div class="success-msg"><?php echo $success; ?></div>
                <?php elseif ($error): ?>
                    <div class="error-msg"><?php echo $error; ?></div>
                <?php endif; ?>
                
                <!-- Form -->
                <form action="" method="POST" class="registration-form" id="registrationForm">
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <!-- University and Experience -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="university">University/Organization</label>
                            <input type="text" id="university" name="university" required>
                        </div>
                        <div class="form-group">
                            <label for="experience">Experience Level</label>
                            <select id="experience" name="experience" required>
                                <option value="">Select your experience level</option>
                                <option value="beginner">Beginner (0-1 years)</option>
                                <option value="intermediate">Intermediate (2-3 years)</option>
                                <option value="advanced">Advanced (4-5 years)</option>
                                <option value="expert">Expert (5+ years)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="submit-btn">Create My Account</button>
                </form>

                <!-- Login Link -->
                <div class="login-link">
                    <p>Already have an account? <a href="#" class="link">Sign in here</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="script/signup.js"></script>
</body>
</html>
