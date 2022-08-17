<?php
    namespace App\Http\Requests\update;

    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Support\Facades\Auth;


    class UpdateTaskGroupRequest
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
