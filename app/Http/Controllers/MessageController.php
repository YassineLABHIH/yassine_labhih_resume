<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.messages.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $message = Message::findOrFail($id);

        $message->is_read = true;

        $message->save();

        return view('admin.messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();

        return redirect()->route('message.index')->with('success', 'Le message de ' . $message->name . ' ' . $message->first_name . ' à été supprimé avec succés');
    }


    public function massDestroy(Request $request)
    {
        foreach ($request->selected_message as $id) {
            $message = Message::find($id);
            $message->delete();
        }


        return redirect()->route('message.index')->with('success', 'Les messages ont été supprimé avec succés');
    }
}
