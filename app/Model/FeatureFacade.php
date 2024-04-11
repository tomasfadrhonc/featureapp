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

    public function deleteFeature($id){
        $count = $this->database->table("features")->where('id', $id)->delete();
    }

    public function getAllFeatures(){
        return $this->database->table("features")->fetchAll();
    }

    public function getFeature($id){
        return $this->database->table('features')->get($id);
    }

    public function getFeaturesCount(){
        return $this->database->table("features")->count();
    }

    public function getLast5Features(){
        return $this->database->table("features")->order('created_at DESC')->limit(5);
    }
}