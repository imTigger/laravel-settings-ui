<?php
namespace Imtigger\LaravelSettingsUI;

use Illuminate\Routing\Controller as BaseController;
use App\Forms\LaravelSettingsForm;
use Illuminate\Support\Facades\Config;
use Kris\LaravelFormBuilder\FormBuilder;
use \Illuminate\Support\Facades\Input;
use \anlutro\LaravelSettings\Facade as Setting;

class Controller extends BaseController
{
    public static function routes()
    {
        \Route::get('/', ['as' => 'laravel-settings-ui', 'uses' => '\\Imtigger\\LaravelSettingsUI\\Controller@get']);
        \Route::post('/', ['as' => 'laravel-settings-ui.post', 'uses' => '\\Imtigger\\LaravelSettingsUI\\Controller@post']);
    }

    public function get(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create($this->getForm(), [
            'method' => 'post'
        ]);

        foreach ($form->getFields() as $field) {
            $fieldName = $field->getName();
            $fieldLabel = $field->getOption('label');

            $field->setValue(Setting::get($fieldName));
        };

        return view("laravel-settings-ui::settings", ['form' => $form]);
    }

    public function post(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create($this->getForm(), [
            'method' => 'post'
        ]);

        if (! $form->isValid()) {
            return redirect()->back()
                ->withErrors($form->getErrors())
                ->withInput();
        } else {
            $inputs = Input::only($form->getAllAttributes());

            foreach ($inputs As $key => $value) {
                if (empty($key)) continue;
                Setting::set($key, $value);
            }

            Setting::save();

            return redirect()->route("laravel-settings-ui")->with('status', trans('laravel-settings-ui::settings.message.saved'));
        }
    }

    private function getForm() {
        return Config::get("laravel-settings-ui.form", 'App\Forms\LaravelSettingsForm');
    }
}
