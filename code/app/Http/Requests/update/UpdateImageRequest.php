<?php
    namespace App\Http\Requests\update;

    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Support\Facades\Auth;


    class UpdateImageRequest
        extends FormRequest
    {

        public function authorize(): bool
        {
            return Auth::check();
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
