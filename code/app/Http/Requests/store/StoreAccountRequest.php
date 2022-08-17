<?php
    namespace App\Http\Requests\store;

    use Illuminate\Foundation\Http\FormRequest;


    class StoreAccountRequest
        extends FormRequest
    {

        public function authorize(): bool
        {
            return true;
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
