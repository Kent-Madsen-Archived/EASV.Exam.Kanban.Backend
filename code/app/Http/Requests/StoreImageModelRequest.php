<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;


    class StoreImageModelRequest
        extends FormRequest
    {

        public function authorize()
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
