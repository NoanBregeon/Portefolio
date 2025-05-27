<?php
class ProjectController {
    private static function connectDB() {
        $host = 'localhost';
        $dbname = 'portfolio';
        $username = 'root';
        $password = '';
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    public static function listProjects() {
        $pdo = self::connectDB();
        $stmt = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retourne les projets
    }

    public static function addProject() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pdo = self::connectDB();
            $title = htmlspecialchars($_POST['title']);
            $description = htmlspecialchars($_POST['description']);
            $technologies = htmlspecialchars($_POST['technologies']);
            $github_link = htmlspecialchars($_POST['github_link']);

            $stmt = $pdo->prepare("INSERT INTO projects (title, description, technologies, github_link) VALUES (?, ?, ?, ?)");
            $stmt->execute([$title, $description, $technologies, $github_link]);

            header('Location: index.php?page=projet');
            exit;
        }
    }
}
?>