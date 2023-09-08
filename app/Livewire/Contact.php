<?php

namespace App\Livewire;

use App\Mail\SendMessage;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{

    public $name;
    public $first_name;
    public $email;
    public $tel;
    public $subject;
    public $message;

    public function sendMessage()
    {

        $this->validate([
            'name' => 'required|string',
            'first_name' => 'required|string',
            'email' => 'required_without:tel|email|nullable',
            'tel' => 'required_without:email|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|nullable',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);

        /*

        Mail::send('emails.send_message', [
            'name' => $this->name,
            'first_name' => $this->first_name,
            'email' => $this->email,
            'tel' => $this->tel,
            'subject' => $this->subject,
            'text' => $this->message ],
            function ($message) {
                    $message->from($this->email);
                    $message->to('contact@yassinelabhih.com', 'Portfolio')
                    ->subject($this->subject);
    });

    */





        $new_message = Message::create(
            $this->only(['name', 'first_name', 'email', 'tel', 'subject', 'message'])
        );

        $message = Message::findOrFail($new_message->id);


        Mail::to('contact@yassinelabhih.com')->send(new SendMessage($message));

        return  redirect()->route('home')->with('success', 'Votre message a été envoyé avec succès !');
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le champ nom est obligatoire.',
            'name.string' => 'Le champ nom doit être une chaine de caractères.',
            'first_name.required' => 'Le champ prénom est obligatoire.',
            'first_name.string' => 'Le champ prénom doit être une chaine de caractères.',
            'email.required_without' => 'Au moins un des deux champs mail ou téléphone doit être renseigné.',
            'email.email' => 'L\'adresse mail renseigné n\'est pas valide.',
            'tel.required_without' => 'Au moins un des deux champs mail ou téléphone doit être renseigné.',
            'tel.regex' => 'Le numéro de téléphone renseigné n\'est pas valide.',
            'tel.min' => 'Le numéro de téléphone doit comporter au moins 10 caractères.',
            'subject.required' => 'Le champ sujet est obligatoire.',
            'subject.string' => 'Le champ sujet doit être une chaine de caractères.',
            'message.required' => 'Le champ message est obligatoire.',
            'message.string' => 'Le champ message doit être une chaine de caractères.',
        ];
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
