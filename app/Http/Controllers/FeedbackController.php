<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function index()
    {
        $feedbacks  = Feedback::all();
        return view('admin.feedbacks.index', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'message'   => 'required',
        ]);

        Feedback::create($data);
        session()->flash('msg', 'Your Mesage has been Sent');
        return redirect()->back();
    }

    public function show(Feedback $feedback)
    {
        return view('admin.feedbacks.details', compact('feedback'));
    }
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        session()->flash('msg', 'Your Feedback has been deleted');
        return redirect('/admin/feedbacks');
    }
}
