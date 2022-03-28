<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAudioRequest extends FormRequest
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
        return [
            'judul' => 'required',
            'artis' => 'required',
            'durasi' => 'required',
            'album' => 'required',
            'cover' => 'required|image',
            'lirik' => 'required',
            'audio' => 'required|file',
        ];
    }
}
