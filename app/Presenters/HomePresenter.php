<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\FeatureFacade;
use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{

    public function __construct(
        private FeatureFacade $features,
    )
    {

    }

    public function renderDefault(){
        $this->template->featuresCount = $this->features->getFeaturesCount();
        $this->template->features5LastFeatures = $this->features->getLast5Features();
    }
}
