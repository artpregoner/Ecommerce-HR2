<?php

namespace App\Http\Controllers;

use App\Models\TicketReply;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketReplyController extends Controller
{
    public function store(Request $request, $ticketId)
    {
        $ticket = Ticket::findOrFail($ticketId);

        $ticket->replies()->create([
            'user_id' => Auth::id(),
            'reply' => $request->input('reply'),
        ]);

        return redirect()->back()->with('success', 'Reply sent successfully!');
    }

}
//ito ata ang tama, pero hindi ko muna babaguhin.
//'user_id' => Auth::id(),
//use Illuminate\Support\Facades\Auth;