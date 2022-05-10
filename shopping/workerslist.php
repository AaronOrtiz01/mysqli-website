<?php

function workerslist($worker_id, $worker_name, $worker_email, $service_type, $worker_img, $appointment_date, $service_location, $service_quality, $price, $worker_active){
    if($worker_active == 1){
    $element = '
    <div data-aos="zoom-in-up" class="member">
    <form action="payment.php" method="post">
    <img src=' . $worker_img . ' />
    <div class="member-info">
        <h5> '. $worker_name .' </h5>
        <p><strong> '. $service_type .'</strong></p>
       <p> '. $worker_email .'<p>
       <input type="submit" class="btn btn btn-success" name="price" value= '. $price .' />
       </div>
</div>
</div>
</div>
    </form>
</div>
    ';
    echo $element;
}
}
