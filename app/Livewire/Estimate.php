<?php

namespace App\Livewire;

use App\Mail\RequestEstimate;
use App\Models\Estimate as ModelsEstimate;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Estimate extends Component
{
    public $estimate_page_number = 1;

    public $name_estimate;

    public $first_name_estimate;


    public $email_estimate;

    public $tel_estimate;


    public $company_estimate;


    public $activity_estimate;

    public $showcase_site = false;


    public $e_commerce = false;


    public $web_app = false;


    public $mobile_app = false;

    public $seo = false;


    public $other = false;


    public $decription_estimate;

    public $promo_code;

    public $promo_code_upper;


    public function estimate()
    {
        $this->promo_code_upper = strtoupper($this->promo_code);


        $this->validate([
            'name_estimate' => 'required',
            'first_name_estimate' => 'required',
            'email_estimate' => 'required_without:tel_estimate|email|nullable',
            'tel_estimate' => 'required_without:email_estimate|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|nullable',
            'company_estimate' => 'string|nullable',
            'activity_estimate' => 'string|nullable',
            'showcase_site' => 'boolean',
            'e_commerce' => 'boolean',
            'web_app' => 'boolean',
            'mobile_app' => 'boolean',
            'seo' => 'boolean',
            'other' => 'boolean',
            'decription_estimate' => 'string|nullable',
            'promo_code_upper' => 'string|nullable|in:SUMMER30',
        ]);

       $estimate_request = ModelsEstimate::create(

            [
                'name' => $this->name_estimate,
                'first_name' => $this->first_name_estimate,
                'email' => $this->email_estimate,
                'tel' => $this->tel_estimate,
                'company' => $this->company_estimate,
                'activity' => $this->activity_estimate,
                'showcase_site' => $this->showcase_site,
                'e_commerce' => $this->e_commerce,
                'web_app' => $this->web_app,
                'mobile_app' => $this->mobile_app,
                'seo' => $this->seo,
                'other' => $this->other,
                'description' => $this->decription_estimate,
                'promo_code' => $this->promo_code_upper
            ]);

            $estimate = ModelsEstimate::findOrFail($estimate_request->id);

            Mail::to('contact@yassinelabhih.com')->send(new RequestEstimate($estimate));


        return  redirect()->route('home')->with('success', 'Votre demande de devis a été envoyé avec succès !');
    }


    public function messages(): array
    {
        return [

            'name_estimate.required' => 'Le champ nom est obligatoire.',
            'first_name_estimate.required' => 'Le champ prénom est obligatoire.',
            'email_estimate.required_without' => 'Au moins un des deux champs mail ou téléphone doit être renseigné.',
            'email_estimate.email' => 'L\'adresse mail renseigné n\'est pas valide.',
            'tel_estimate.required_without' => 'Au moins un des deux champs mail ou téléphone doit être renseigné.',
            'tel_estimate.regex' => 'Le numéro de téléphone renseigné n\'est pas valide.',
            'tel_estimate.min' => 'Le numéro de téléphone doit comporter au moins 10 caractères.',
            'company_estimate.string' => 'Le champ société doit être une chaine de caractères.',
            'activity_estimate.string' => 'Le champ secteur d\'activité doit être une chaine de caractères.',
            'showcase_site.boolean' => 'Le champ site vitrine doit être un boolean.',
            'e_commerce.boolean' => 'Le champ site e-commerce doit être un boolean.',
            'web_app.boolean' => 'Le champ application web doit être un boolean.',
            'mobile_app.boolean' => 'Le champ application mobile doit être un boolean.',
            'seo.boolean' => 'Le champ référencement doit être un boolean.',
            'other.boolean' => 'Le champ autre doit être un boolean.',
            'decription_estimate.string' => 'Le champ description doit être une chaine de caractères.',
            'promo_code_upper.string' => 'Le champ code promo doit être une chaine de caractères.',
            'promo_code_upper.in' => 'Le code promo renseigné n\'est pas valide.'



        ];
    }

    public function render()
    {
        return view('livewire.estimate');
    }
}
