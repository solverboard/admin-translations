<?php namespace Brackets\AdminTranslations\Http\Requests\Admin\Translation;

use Illuminate\Foundation\Http\FormRequest;
use Gate;

class UpdateTranslation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.translation.edit', [$this->translation]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'text.*' => 'string|nullable',
        ];
    }
}