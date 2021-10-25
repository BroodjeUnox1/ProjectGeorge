<?php

class reserveren {
    
    public $html;
    public $x;

    public function timeList($color) {
        $startTime = "12:00";
        $endTime = "14:00";

        $timeSlot = $startTime;

        // $this->x = $_SESSION['x'];

        // $sql = "SELECT * FROM reservation WHERE date = '$x'";
        // $result = mysqli_query($conn, $sql);

        // if (mysqli_num_rows($result) > 0 ) {
        //     if (mysqli_num_rows($result) < 10) {
        //         $color = 'green';
        //     }
        //     else {
        //         $color = 'red';
        //     }
        //     $color = 'green';
        // }


        while ($timeSlot <= $endTime) { 
            $this->html .= '<option style="color: '. $color .' ;">'. $timeSlot .'</option>';
            $timeSlot = strtotime($timeSlot);
            $timeSlot = date("H:i", strtotime('+30 minutes', $timeSlot));
        }

        print($this->html);
    }
}