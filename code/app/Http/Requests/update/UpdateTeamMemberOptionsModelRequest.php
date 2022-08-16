<?php
    namespace App\Http\Requests\update;

    use Illuminate\Foundation\Http\FormRequest;


    class UpdateTeamMemberOptionsModelRequest
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
