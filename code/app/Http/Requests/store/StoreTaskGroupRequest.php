<?php
    namespace App\Http\Requests\store;

    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Support\Facades\Auth;


    class StoreTaskGroupRequest
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
