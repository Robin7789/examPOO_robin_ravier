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
        $moto = $this->motoManager->findById($id);
        if ($moto) {
            include(__DIR__ . "/../../Templates/moto/details.php");
        } else {
            echo "Moto non trouvée.";
        }
    }

    // Route: /moto/$type
    public function getByType($type)
    {
        $motos = $this->motoManager->findByType($type);
        if (!empty($motos)) {
            include(__DIR__ . "/../../Templates/moto/index.php");
        } else {
            echo "Aucune moto de ce type trouvée.";
        }
    }

    // Route: /moto/add/
    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['image'])) {
                $brand = $_POST['brand'];
                $model = $_POST['model'];
                $type = $_POST['type'];
                $price = floatval($_POST['price']);
                $image = $_POST['image'];

                $moto = new Moto(null, $brand, $model, $type, $price, $image);
                $this->motoManager->add($moto);

                header("Location: /moto");
                exit();
            } else {
                echo "Tous les champs doivent être fournis.";
            }
        }
        include(__DIR__ . "/../../Templates/moto/add.php");
    }

    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        $moto = $this->motoManager->findById($id);
        if (!$moto) {
            echo "Moto non trouvée.";
            return;
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['image'])) {
                $moto->setBrand($_POST['brand']);
                $moto->setModel($_POST['model']);
                $moto->setType($_POST['type']);
                $moto->setPrice(floatval($_POST['price']));
                $moto->setImage($_POST['image']);

                $this->motoManager->edit($moto);

                header("Location: /moto");
                exit();
            } else {
                echo "Tous les champs doivent être fournis.";
            }
        }

        include(__DIR__ . "/../../Templates/moto/edit.php");
    }

    // Route: /moto/delete/$id
    public function delete($id)
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->motoManager->delete($id);
            header("Location: /moto");
            exit();
        }

        $moto = $this->motoManager->findById($id);
        if ($moto) {
            include(__DIR__ . "/../../Templates/moto/delete.php");
        } else {
            echo "Moto non trouvée.";
        }
    }
}
