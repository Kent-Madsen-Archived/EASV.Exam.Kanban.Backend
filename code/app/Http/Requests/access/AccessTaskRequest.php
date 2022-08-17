<?php
    namespace App\Http\Requests\access;

    use Illuminate\Foundation\Http\FormRequest;


    class AccessTaskRequest
        extends FormRequest
    {

        public function authorize(): bool
        {
            return false;
        }


        public function rules()
        {
            return
            [
                //
            ];
        }
    }
?>
