<?php

namespace Src\Manager;

use Entity\Moto;
use Exception;
use PDO;

class MotoManager extends DatabaseManager
{
    // Constructeur sans paramètres
    public function __construct()
    {
        parent::__construct();
    }

    // Méthode pour récupérer toutes les motos
    public function findAll(): array
    {
        $query = $this->getConnection()->prepare("SELECT * FROM moto");
        $query->execute();

        $motos = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $moto = new Moto(
                $row['id'],
                $row['brand'],
                $row['model'],
                $row['type'],
                $row['price'],
                $row['image']
            );
            $motos[] = $moto;
        }
        return $motos;
    }

    // Méthode pour récupérer une moto par son ID
    public function findById(int $id): ?Moto
    {
        $query = $this->getConnection()->prepare("SELECT * FROM moto WHERE id = :id");
        $query->execute([':id' => $id]);

        $row = $query->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }

        return new Moto(
            $row['id'],
            $row['brand'],
            $row['model'],
            $row['type'],
            $row['price'],
            $row['image']
        );
    }

    // Méthode pour récupérer les motos par leur type
    public function findByType(string $type): array
    {
        $query = $this->getConnection()->prepare("SELECT * FROM moto WHERE type = :type");
        $query->execute([':type' => $type]);

        $motos = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $moto = new Moto(
                $row['id'],
                $row['brand'],
                $row['model'],
                $row['type'],
                $row['price'],
                $row['image']
            );
            $motos[] = $moto;
        }
        return $motos;
    }

    // Méthode pour ajouter une moto
    public function add(Moto $moto): void
    {
        $query = $this->getConnection()->prepare("INSERT INTO moto (brand, model, type, price, image) VALUES (:brand, :model, :type, :price, :image)");
        $query->execute([
            ':brand' => $moto->getBrand(),
            ':model' => $moto->getModel(),
            ':type' => $moto->getType(),
            ':price' => $moto->getPrice(),
            ':image' => $moto->getImage()
        ]);
    }

    // Méthode pour mettre à jour une moto
    public function edit(Moto $moto): void
    {
        $query = $this->getConnection()->prepare("UPDATE moto SET brand = :brand, model = :model, type = :type, price = :price, image = :image WHERE id = :id");
        $query->execute([
            ':id' => $moto->getId(),
            ':brand' => $moto->getBrand(),
            ':model' => $moto->getModel(),
            ':type' => $moto->getType(),
            ':price' => $moto->getPrice(),
            ':image' => $moto->getImage()
        ]);
    }

    // Méthode pour supprimer une moto par son ID
    public function delete(int $id): void
    {
        $query = $this->getConnection()->prepare("DELETE FROM moto WHERE id = :id");
        $query->execute([':id' => $id]);
    }
}
