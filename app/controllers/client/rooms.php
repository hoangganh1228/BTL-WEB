<?php
    class Rooms extends Controller
    {
        private $data, $model;

        function __construct()
        {
            $this->model = $this->model('Database');
        }
        function index()
        {
            // $this->isLogin();
            $roomData =  $this->model->select([], "phong AS p JOIN loai_phong AS lp ON p.maloaiphong = lp.maloaiphong", "");
            // echo '<pre>';   
            // print_r($roomData);
            // echo '</pre>';
            $this->view('client/rooms', ['roomData' => $roomData]);
        }

        
    }
?>