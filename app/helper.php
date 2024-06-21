<?php

//imp function

use App\Models\Slot;

if(!function_exists('getslottime')){
    function getslottime($data)
    {
        if($data=='1')
        {
            return "08:00 am - 01:00 pm";
        }
        elseif($data=='2')
        {
            return "03:00 pm - 8:00 am";
        }

    }
}

// echo "<br><br><br><br><br><br><br><br><br>".date('Y-m-d');
// $slot=Slot::where([['date','=',"l"]])->get();


// echo "<script> window.addEventListener('beforeclose', function(event) {
//     // Cancel the event
//     event.preventDefault();
//     // Chrome requires returnValue to be set
//     event.returnValue = '';
//     // Show confirmation dialog
//     // var confirmationMessage = 'Are you sure you want to leave?';
//     // (event || window.event).returnValue = confirmationMessage;
//     // return confirmationMessage;
//     return alert('ggugu');
//   });</script>";



