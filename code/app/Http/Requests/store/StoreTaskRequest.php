<?php
    namespace App\Http\Requests\store;

    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Support\Facades\Auth;


    class StoreTaskRequest
        extends FormRequest
    {

        public function authorize(): bool
        {
            return !is_null( $this->bearerToken() );
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
