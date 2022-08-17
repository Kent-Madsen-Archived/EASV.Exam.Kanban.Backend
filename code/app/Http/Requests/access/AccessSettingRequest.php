<?php
    namespace App\Http\Requests\access;

    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Support\Facades\Auth;


    class AccessSettingRequest
        extends FormRequest
    {

        public function authorize(): bool
        {
            return !is_null( $this->bearerToken() );
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
