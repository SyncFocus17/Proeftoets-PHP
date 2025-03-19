<?php

class Zangeres extends BaseController
{
    private $zangeresModel;

    public function __construct()
    {
        $this->zangeresModel = $this->model('ZangeresModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Overzicht Zangeressen:',
            'zangeressen' => $this->zangeresModel->getZangeresData()
        ];

        $this->view('zangeres/index', $data);
    }
}