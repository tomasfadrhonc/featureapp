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

    public function createFeature($data){
        $this->database->table("features")->insert($data);
    }

    public function updateFeature(){

    }

    public function deleteFeature(){

    }

    public function getAllFeatures(){
        return $this->database->table("features")->fetchAll();
    }

    public function getFeature($id){
        return $this->database->table('features')->get($id);
    }
}