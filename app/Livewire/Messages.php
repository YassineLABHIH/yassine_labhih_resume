<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\WithPagination;
use Livewire\Component;

class Messages extends Component
{
    use WithPagination;
    public $selected_message = [];

    public function massDestroy()
    {

        foreach ($this->selected_message as $id) {
            $message = Message::find($id);
            $message->delete();
        }

        return redirect()->route('message.index')->with('success', 'Les '.count($this->selected_message).' messages sélectionnés on était supprimés avec succès !');
    }

    public function render()
    {
        $messages = Message::orderByDesc('created_at')->paginate(15);
        return view('livewire.messages', compact('messages'));
    }
}
