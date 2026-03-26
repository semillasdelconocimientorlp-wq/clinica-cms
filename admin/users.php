<?php
// Database connection
$host = 'localhost';
$db = 'clinica';
$user = 'root';
$pass = '';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// CRUD operations

// Create
function createUser($name, $email) {
    global $mysqli;
    $stmt = $mysqli->prepare('INSERT INTO users (name, email) VALUES (?, ?)');
    $stmt->bind_param('ss', $name, $email);
    return $stmt->execute();
}

// Read
function getUsers() {
    global $mysqli;
    $result = $mysqli->query('SELECT * FROM users');
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Update
function updateUser($id, $name, $email) {
    global $mysqli;
    $stmt = $mysqli->prepare('UPDATE users SET name = ?, email = ? WHERE id = ?');
    $stmt->bind_param('ssi', $name, $email, $id);
    return $stmt->execute();
}

// Delete
function deleteUser($id) {
    global $mysqli;
    $stmt = $mysqli->prepare('DELETE FROM users WHERE id = ?');
    $stmt->bind_param('i', $id);
    return $stmt->execute();
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'create':
                createUser($_POST['name'], $_POST['email']);
                break;
            case 'update':
                updateUser($_POST['id'], $_POST['name'], $_POST['email']);
                break;
            case 'delete':
                deleteUser($_POST['id']);
                break;
        }
    }
}
?>