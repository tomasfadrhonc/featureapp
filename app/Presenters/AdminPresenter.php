<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\FeatureFacade;
use Nette;


final class AdminPresenter extends Nette\Application\UI\Presenter
{

    public function __construct(
        private FeatureFacade $features,
    )
    {

    }

    public function renderDefault(){
        $this->template->features = $this->features->getAllFeatures();
    }

    public function handleDeleteFeature($id){
        $count = $this->features->deleteFeature($id);
    }
}
