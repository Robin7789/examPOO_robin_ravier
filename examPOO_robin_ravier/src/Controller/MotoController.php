<?php

namespace Src\Controller;

use Src\Manager\MotoManager;
use Entity\Moto;

class MotoController
{
    private $motoManager;

    public function __construct(MotoManager $motoManager)
    {
        $this->motoManager = $motoManager;
    }

    // Route: /moto
    public function getAll()
    {
        $motos = $this->motoManager->findAll();

        include(__DIR__ . "/../../Templates/moto/index.php");
    }

    // Route: /moto/$id
    public function getById($id)
    {
        // Implémentation manquante
    }

    // Route: /moto/$type
    public function getByType($type)
    {
        // Implémentation manquante
    }

    // Route: /moto/add/
    public function add()
    {
        // Code correct
    }

    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        // Code correct
    }

    // Route: /moto/delete/$id
    public function delete($id)
    {
        // Implémentation manquante
    }
}
