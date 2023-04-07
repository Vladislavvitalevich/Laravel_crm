<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormPeopleRequest extends FormRequest
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
        return [
            'pip' =>                    'required|string|max:255',
            'age' =>                    'required|in:18-24,25-34,35-44,45-54,55-64,65+',
            'count_family' =>           'required|integer',
            'age_children' =>           'required',
            'study_children' =>         'required|in:true,false',
            'different_categories' =>   '',
            'vpo' =>                    'required|in:true,false',
            'gromada' =>                'required|in:Мелітополь,Мирненська,Новоуспенівська,Семенівська,Кирилівська,
                                        Новобогданівська,Приазовська,Новенська,Якимівська,Терпіннівська,Костянтинівська,
                                        Веселівська,Чкаловська,Нововасилівська,Олександрівська,Плодородненська,Інше' ,
            'w_y_live_now' =>           'required|in:Київ,Київська область',
            'have_work' =>              'required|in:true,false',
            'phone' =>                  'required|between:5,13',
            'services' =>               '',
            'volonter' =>               'required|in:true,false',
            'w_y_g_do' =>               'required|min:3|max:1000',
            'h_m_time' =>               'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'pip.required' => 'Заповныть поле "ПІП (Прізвище Ім\'я По батькові)"!',
            'age.required' => 'Вкажіть Ваш вік!',
            'count_family.required' => 'Впишіть числом кількість членів сім\'ї',
            'age_children.required' => 'Цифра, через кому якщо дітей декілька; 0 - якщо дітей немає',
            'study_children.required' => '',
            'different_categories.required' => 'Необхідно обрати категорію(ї).',
            'vpo.required' => '',
            'gromada.required' => '',
            'w_y_live_now.required' => '',
            'have_work.required' => '',
            'phone.required' => 'Телефон формату +3 80 96 000 00 00',
            'services.required' => 'Необхідно обрати сервіс(и).',
            'volonter.required' => '',
            'w_y_g_do.required' => 'Максимальна кількість 1000 символів',
            'h_m_time.required' => 'Укажіть кількість годин цифрою наприклад (5)',
        ];
    }
}
