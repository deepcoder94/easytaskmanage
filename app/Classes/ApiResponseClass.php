<?php

namespace App\Classes;

class ApiResponseClass
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public static function sendResponse($result , $message ,$pageTitle){
        $response=[
            'success' => true,
            'data'    => $result,
            'title' => $pageTitle
        ];
        if(!empty($message)){
            $response['message'] =$message;
        }
        return $response;
    }
}
