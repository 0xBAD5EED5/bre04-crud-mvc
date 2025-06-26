<?php

require_once "managers/AbstractManager.php";
require_once "models/User.php";

class UserManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    // 1. Récupérer tous les utilisateurs
    public function findAll(): array
	{
    	$stmt = $this->db->query("SELECT * FROM users");
    	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	$users = [];

    	foreach ($rows as $row) {
        	$user = new User(
            	$row['email'],
            	$row['first_name'],
            	$row['last_name'],
        	);
        	$user->setId($row['id']);
        	$users[] = $user;
    	}
    	return $users;
	}


    // 2. Récupérer UN utilisateur par id
	public function findOne(int $id): ?User
	{
    	$sql = "SELECT * FROM users WHERE id = :id";
    	$params = [':id' => $id];

    	$stmt = $this->db->prepare($sql);
    	$stmt->execute($params);

    	$row = $stmt->fetch(PDO::FETCH_ASSOC);

    	if ($row) {
    		$user = new User(
        		$row['email'],
        		$row['first_name'],
        		$row['last_name']
    		);
    		$user->setId($row['id']);
    		return $user;
		}
		return null;
	}


    // 3. Insérer un nouvel utilisateur
	public function create(User $user): bool
	{
    	$sql = "INSERT INTO users (email, first_name, last_name) VALUES (:email, :first_name, :last_name)";
    
    	$params = [
        	':email'      => $user->getEmail(),
        	':first_name' => $user->getFirstName(),
        	':last_name'  => $user->getLastName()
    	];

    	$stmt = $this->db->prepare($sql);
    	return $stmt->execute($params);
	}


    // 4. Modifier un utilisateur existant
	public function update(User $user): bool {
	    $sql = "UPDATE users SET email = :email, first_name = :first_name, last_name = :last_name WHERE id = :id";
	    $params = [
	        ':email' => $user->getEmail(),
	        ':first_name' => $user->getFirstName(),
	        ':last_name' => $user->getLastName(),
	        ':id' => $user->getId()
	    ];
	
	    $stmt = $this->db->prepare($sql);
	    return $stmt->execute($params);
	}

    // 5. Supprimer un utilisateur
	public function delete(int $id): bool
	{
    	$sql = "DELETE FROM users WHERE id = :id";
    	$params = [':id' => $id];

    	$stmt = $this->db->prepare($sql);
    	return $stmt->execute($params);
	}

}
