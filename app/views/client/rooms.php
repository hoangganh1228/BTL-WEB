<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - Phòng </title>
    <?php require 'configs/bootstrap.php';?>
</head>

<body class="bg-light">

    <?php $this->view('client/layouts/header', []);?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Phòng</h2>
        <div class="h-line bg-dark"></div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 px-4 mb-lg-0 mb-md-0 mb-3">
                <?php
                    $path = _WEB_HOST.'/public/img/rooms';
                    foreach($roomData as $room) {
                        $roomPriceFormat = formatNumber($room['gia']);
                        if($room['trangthai'] == 'Trống') {
                            echo <<<data
                                <div class="card mb-4 border-0 shadow" >
                                    <div class="row g-0 p-3 align-items-center">
                                        <div class="col-md-5 mb-lg-0 mb-3">
                                            <img src="$path$room[anh]" class="img-fluid rounded">
                                        </div>
                                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                            <h5 class="mb-3">Số phòng: $room[sophong]</h5>

                                            <div class="guests ">
                                                <h6 class="mb-1">Guests</h6>
                                                <span class="badge bg-light text-dark text-wrap ">
                                                    Tầng: $room[sotang] 
                                                </span>
                                                <span class="badge bg-light text-dark text-wrap ">
                                                    Số lượng: $room[soluongkhach] 
                                                </span><span class="badge bg-light text-dark text-wrap ">
                                                    Trạng thái: $room[trangthai] 
                                                </span>
                                        </div>
                                        </div>
                                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                            <h6 class="mb-4">$roomPriceFormat VND mỗi đêm</h6>
                                                <a href="confirm_bookings?sophong=$room[sophong]" class="btn btn-sm w-100 mt-2 btn-outline-dark">More details</a>
                                        </div>
                                    </div>
                                </div>
                            data;
                        }

                    }   

                
                ?>
            </div>

        </div>
    </div>







</body>

</html>