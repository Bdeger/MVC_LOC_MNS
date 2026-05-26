<?php 
// Models/userManager.php


//  $stmt = "la requête prête à être exécutée"

// Sans ? → DOIT retourner un array, jamais null
// public function findByEmail(string $email): array

// // Avec ? → retourne un array OU null
// public function findByEmail(string $email): ?array

require_once __DIR__.'/Manager.php';
class UserManager extends Manager {
    public function findByEmail(string $email): ?array{
        $stmt = $this -> pdo -> prepare("
        SELECT u.email, u.mot_de_passe, r.nom
        FROM utilisateur u
        INNER JOIN role r ON u.id_role = r.id_role
        WHERE u.email = ?");
        $stmt -> execute([$email]);
        return $stmt->fetch(); //on retourn une seule ligne avec fetch()
    }
}






?>