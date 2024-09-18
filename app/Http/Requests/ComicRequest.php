<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:50',
            'description' => 'required|min:10',
            'thumb' => 'required|max:255',
            'price' => 'required|min:0|max:10',
            'series' => 'required|min:3|max:100',
            'sale_date' => 'required',
            'type' => 'required|min:3|max:50',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere di minimo :min caratteri',
            'title.max' => 'Il titolo deve essere di massimo :max caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve essere di minimo :min caratteri',
            'thumb.required' => 'La url dell\'immagine è obbligatoria',
            'thumb.max' => 'La url dell\'immagine deve essere di massimo :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.min' => 'Il prezzo deve essere di minimo :min caratteri',
            'price.max' => 'Il prezzo deve essere di massimo :max caratteri',
            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'La serie deve essere di minimo :min caratteri',
            'series.max' => 'La serie deve essere di massimo :max caratteri',
            'sale_date.required' => 'La data di vendita è obbligatoria',
            'type.required' => 'Il tipo è obbligatorio',
            'type.min' => 'Il tipo deve essere di minimo :min caratteri',
            'type.max' => 'Il tipo deve essere di massimo :max caratteri'
        ];
    }
}
