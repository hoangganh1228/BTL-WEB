<?php
    class Admin extends Controller
    {
        private $data, $model;

        function __construct()
        {
            $this->model = $this->model('Database');
        }
        function index()
        {
            $infoBooking = $this->model->select([], 'dat_phong', "WHERE trangthaitt = 'Thành công'"); 
            echo '<pre>';   
            print_r($infoBooking);
            echo '</pre>'; 
            // $this->isLogin();
            $this->view('admin/room_booking_management', []);
        }

        
    }
?>