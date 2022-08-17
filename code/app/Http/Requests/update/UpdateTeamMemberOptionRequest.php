<?php
    namespace App\Http\Requests\update;

    use Illuminate\Foundation\Http\FormRequest;


    class UpdateTeamMemberOptionRequest
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
