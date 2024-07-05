<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<script>alert('Username and password are required');</script>";
    } else {
        $stmt_adm = $koneksi->prepare("SELECT id_admin FROM admin WHERE username = ? AND password = ?  AND id_level = 1");
        $stmt_adm->bind_param("ss", $username, $password);
        $stmt_adm->execute();
        $stmt_adm->store_result();

        if ($stmt_adm->num_rows == 1) {
            $_SESSION['username'] = $username;
            header("location: ../ukk/src/admin/index.php");
            exit();
        }

        $stmt_plgn = $koneksi->prepare("SELECT id_pelanggan FROM pelanggan WHERE username = ? AND password = ?");
        $stmt_plgn->bind_param("ss", $username, $password);
        $stmt_plgn->execute();
        $stmt_plgn->store_result();

        if ($stmt_plgn->num_rows == 1) {
            $_SESSION['username'] = $username;
            header("location: ../ukk/src/pelanggan/index.php");
            exit();
        }

        $stmt_bnk = $koneksi->prepare("SELECT id_admin FROM admin WHERE username = ? AND password = ? AND id_level = 2");
        $stmt_bnk->bind_param("ss", $username, $password);
        $stmt_bnk->execute();
        $stmt_bnk->store_result();

        if ($stmt_bnk->num_rows == 1) {
            $_SESSION['username'] = $username;
            header("location: ../ukk/src/bank/index.php");
            exit();
        }

        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
			href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
			rel="stylesheet" />
    <script>
        
    </script>

    <title>Log In</title>
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-center bg-no-repeat" style="background-image:url('img/5.jpg')">
  <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
    <div class="text-white">
      <div class="mb-8 flex flex-col items-center">
        <h1 class="mb-2 text-5xl font-bold">Login</h1>
        <span class="text-gray-300">Enter Login Details</span>
      </div>
      <form action="#" method="post">
        <div class="mb-4 text-lg">
          <input name="username" class="rounded-3xl border-none bg-gray-500  bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="text" name="name" placeholder="Username" />
        </div>

        <div class="mb-4 text-lg">
          <input name="password" class="rounded-3xl border-none bg-gray-500 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="Password" name="name" placeholder="Password" />
        </div>
        <div class="mt-8 flex justify-center text-lg text-black">
          <button type="submit" value="login" class="rounded-3xl bg-gray-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Login</button>
        </div>
        <div class="mt-2 flex justify-center text-lg text-black">
          <button type="button" value="cancel" class="rounded-3xl bg-gray-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600" onclick="window.location.href = 'index.html';">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
<script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</html>