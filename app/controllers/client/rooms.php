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
            $roomData = $this->model->select([], 'phong', '');
            // echo '<pre>';   
            // print_r($roomData);
            // echo '</pre>';
            $this->view('client/rooms', ['roomData' => $roomData]);
        }

        
    }
?>