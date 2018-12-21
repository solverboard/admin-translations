<?php namespace Brackets\AdminTranslations\Http\Requests\Admin\Translation;

use Brackets\Translatable\TranslatableFormRequest;
use Illuminate\Support\Facades\Gate;

class ImportTranslation extends TranslatableFormRequest
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
    public function translatableRules($locale)
    {
        return [
            'importLanguage' => 'string|required',
            'onlyMissing' => 'boolean|required',
            'fileImport' => 'required|application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ];
    }
}