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
            'title' => 'Top 5 rijkste Zangeressen ter wereld:',
            'zangeressen' => $this->zangeresModel->getZangeresData()
        ];

        $this->view('zangeres/index', $data);
    }
}