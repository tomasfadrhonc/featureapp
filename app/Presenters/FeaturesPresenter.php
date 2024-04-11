<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\FeatureFacade;
use Nette;


final class FeaturesPresenter extends Nette\Application\UI\Presenter
{

    public function __construct(
        private FeatureFacade $features,
    )
    {

    }

    public function renderDefault(){
        $this->template->features = $this->features->getAllFeatures();
    }

    public function renderShow($id){
        $feature = $this->features->getFeature($id);

        if(!$feature){
            $this->error('Feature not found');
        }

        $this->template->feature = $feature;
    }

    public function renderCreate(){

    }

    public function createComponentFeatureCreateForm() {
        $form = new Nette\Application\UI\Form();

        $form->addText('title', 'Title:')->setRequired();
        $form->addTextArea('content', 'Content:')->setRequired();

        $form->addSubmit('send', 'Create new feature');
        $form->onSuccess[] = $this->featureCreateFormSucceeded(...);

        return $form;
    }

    private function featureCreateFormSucceeded(array $data){
        $feature = $this->features->createFeature($data);
    }
}
