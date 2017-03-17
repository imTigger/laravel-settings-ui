<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class LaravelSettingsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('site-name', 'text', [
                'label' => trans('backend.setting.label.website_name'),
                'rules' => ['required', 'max:255']
            ])
            ->add('company-name', 'text', [
                'label' => trans('backend.setting.label.company_name'),
                'rules' => ['required', 'max:255']
            ])
            ->add('email', 'email', [
                'label' => trans('backend.setting.label.email'),
                'rules' => ['required', 'max:255']
            ])
        ;
    }
}
