<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function SendNotification()
    {
        $enrollmentData = [
            'body'=> '' ,
            'enrollmentText'=> '' ,
            'url'=> '' ,
            'thankyou'=> '' ,
        ];
    }
}
