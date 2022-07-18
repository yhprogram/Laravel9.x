<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * ユーザーがこの要求を行うことを許可されているかどうかを確認します。
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        // どのユーザーのアクセスを許可するのか
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * リクエストに適用される検証ルールを取得します。
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tweet' => 'required|max:140'
        ];
    }

    public function tweet(): string
    {
        return $this->input('tweet');
    }
}
