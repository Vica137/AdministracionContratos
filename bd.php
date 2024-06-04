<?php


        $user="vica137";
        $pass="0litas.";
        $host="localhost";
        $db="administracionContratos";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Array de usuarios y contraseñas en texto plano
    $users = [
        ['username' => 'admin', 'password' => 'hola123'],
        ['username' => 'Ana', 'password' => 'Ana123']
    ];

    foreach ($users as $user) {
        $hashedPassword = password_hash($user['password'], PASSWORD_BCRYPT);
        $sql = "UPDATE users SET password = :password WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['password' => $hashedPassword, 'username' => $user['username']]);
    }

    echo "Contraseñas actualizadas correctamente.";
} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
?>
