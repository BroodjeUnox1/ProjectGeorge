<?php

class reserveren {
    
    public $html;

    public function timeList() {
        $startTime = "12:00";
        $endTime = "14:00";

        $timeSlot = $startTime;

        while ($timeSlot <= $endTime) { 
            // checkReservations($timeSlot);

            $this->html .= '<option style="color: green;">'. $timeSlot .'</option>';
            $timeSlot = strtotime($timeSlot);
            $timeSlot = date("H:i", strtotime('+30 minutes', $timeSlot));
        }

        print($this->html);
    }

    // public function peopleList() {
    //    // List automatically generated based on space avalable in selected timeslot

    // }


}