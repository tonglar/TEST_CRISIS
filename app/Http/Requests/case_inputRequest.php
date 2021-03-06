<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class case_inputRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $sender_case = $this->request->get('sender_case');
        if($sender_case!=2) {
            return [
                'name' => 'required|min:2|max:255',
                'victim_tel' => 'required|numeric|digits:10',
                'sub_problem' => 'required|numeric'
            ];
        }elseif ($sender_case==2){
            return [
                'sender' => 'required|min:2|max:255',
                'agent_tel' => 'required|numeric|digits:10',
                'sub_problem' => 'required|numeric'
            ];
        }
    }
    public function  messages()
    {
        return[
            'name.required' => 'ท่านยังไม่ได้ระบุชื่อ',
            'victim_tel.required'  => 'ท่านยังไม่ได้ระบุเบอร์มือถือ',
            'victim_tel.numeric'   => 'เบอร์โทรศัพท์ผิดพลาด',
            'victim_tel.digits'    => 'ระบุเบอร์โทรศัพท์มือถือ 10 หลัก',
            'sender.required' => 'ท่านยังไม่ได้ระบุชื่อผู้แจ้งแทน',
            'agent_tel.required'  => 'ท่านยังไม่ได้ระบุเบอร์มือถือผู้แจ้งแทน',
            'agent_tel.numeric'   => 'เบอร์โทรศัพท์ผู้แจ้งแทนผิดพลาด',
            'agent_tel.digits'    => 'ระบุเบอร์โทรศัพท์มือถือ 10 หลัก',
            'sub_problem.required'    => 'ท่านยังไม่ได้เลือกประเภทปัญหา',
        ];
       // return parent::messages(); // TODO: Change the autogenerated stub
    }
}
