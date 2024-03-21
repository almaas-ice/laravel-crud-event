<?php

namespace App\Validators;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class EventValidator
{
    public function validate(Request $request)
    {
        $rules = [
            'name' => 'required',
            'date' => 'required|date_format:Y-m-d',
            'time' => 'required',
            'description' => 'required',
        ];

        $validator = validator($request->all(), $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}
