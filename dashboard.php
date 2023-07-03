<?php
// Check if the user is logged in. If not, redirect to the login page
// Add your authentication logic here

// Example code to check if the user is logged in
$isLoggedIn = true; // Assuming the user is logged in

if (!$isLoggedIn) {
  header("Location: login.php"); // Redirect to the login page
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      background-color: #007bff;
    }
    .sidebar .list-group-item {
      color: #fff;
      background-color: transparent;
      border: none;
    }
    .sidebar .list-group-item.active {
      background-color: #0056b3;
    }
    .content {
      background-color: #fff;
    }
    .profile-form {
      margin-top: 20px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
    }
    .profile-form .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }
    .profile-form .form-group label {
      flex: 1;
      margin-right: 10px;
    }
    .profile-form .form-group input {
      flex: 2;
    }
  </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-lg-2 sidebar">
        <div class="list-group mt-3">
          <a href="#" class="list-group-item list-group-item-action active" onclick="showProfileForm()">
            Profile
          </a>
          
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-lg-10 content">
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">My Profile</a>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="login.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="container mt-5">
          <h1>Edit Profile</h1>
          <!-- Profile Form -->
          <div class="row justify-content-end">
            <div class="col-lg-6">
              <div class="profile-form">
                <h2>Profile</h2>
                <form>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your new email">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your new username">
                  </div>
                  <div class="form-group">
                    <label for="password">Current Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your current password">
                  </div>
                  <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your new password">
                  </div>
                  <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your new password">
                  </div>
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function showProfileForm() {
      document.querySelector('.profile-form').style.display = 'block';
    }
  </script>
</body>
</html>
