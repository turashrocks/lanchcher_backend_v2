<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Userseat;

class UpdateUserseatRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //return Userseat::$rules;
        return [
            "user_id"=> 'required',
            "user_pc_uuid"=> 'required',
            "user_pc_name"=> 'required',
            "installation_date"=> 'required',
            "status"=> 'required'
        ];
    }
}
