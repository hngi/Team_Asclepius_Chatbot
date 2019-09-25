<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Support\Facades\Validator;

trait HasError {

    public  function getErrorMessage($input, $rules) {
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return ([
                'status' => 401,
                'message' => $validator->errors()
            ]);
        }
    }

}
