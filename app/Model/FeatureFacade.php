<?php
namespace App\Model;

use Nette;

final class FeatureFacade
{

    public function __construct(
        private Nette\Database\Explorer $database,
    )
    {

    }

    public function createFeature(){

    }

    public function updateFeature(){

    }

    public function deleteFeature(){

    }

    public function getAllFeatures(){
        return $this->database->table("features")->fetchAll();
    }
}