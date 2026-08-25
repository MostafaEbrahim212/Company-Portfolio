<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreContactRequest;
use App\Models\Message;

class ContactController extends Controller {
    public function store(StoreContactRequest $request) {
        Message::create($request->validated());
        if ($request->ajax()) {
            return response()->json(['success' => 'Your message has been sent successfully.']);
        }
        return back()->with('success', 'Your message has been sent successfully.');
    }
}