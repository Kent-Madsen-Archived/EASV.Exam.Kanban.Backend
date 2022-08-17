<?php
    namespace App\Http\Requests\store;

    use Illuminate\Foundation\Http\FormRequest;


    class StoreTeamMemberOptionRequest
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
