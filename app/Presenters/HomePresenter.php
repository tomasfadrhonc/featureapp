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

    }
}
