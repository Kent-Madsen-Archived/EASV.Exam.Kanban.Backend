<?php
    namespace App\Http\Requests\access;

    use Illuminate\Foundation\Http\FormRequest;


    class AccessProjectRequest
        extends FormRequest
    {

        public function authorize(): bool
        {
            return false;
        }


        public function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>
