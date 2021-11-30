<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\BearingsModel;
use App\Models\BoardModel;
use App\Models\SkateboardModel;
use App\Models\TrucksModel;
use App\Models\WheelsModel;

/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{

    public function index()
    {
        return $this->html(
            [
                'meno' => 'študent'
            ]);
    }

    public function contact()
    {
        return $this->html(
            []
        );
    }

    public function skateboards()
    {
        return $this->html(SkateboardModel::getAll());
    }

    public function boards()
    {
        return $this->html(BoardModel::getAll());
    }

    public function trucks()
    {
        return $this->html(TrucksModel::getAll());
    }

    public function wheels()
    {
        return $this->html(WheelsModel::getAll());
    }

    public function bearings()
    {
        return $this->html(BearingsModel::getAll());
    }
}