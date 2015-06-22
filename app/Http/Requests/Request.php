<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    public function response(array $errors)
    {
        if (count($errors)) {
            return \Response::json(['state' => false, 'errors' => $errors]);
        }

    }
}
