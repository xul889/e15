<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;
use App\Mail\HelloEmail;
use App\Models\SentLog;
class EmailController extends Controller
{
    //
    public function index()
    {
        //get emails belonged to the user from database 
        $emails = auth()->user()->emails;
        //return view with emails
        return view('emails.index', compact('emails'));
    }
    public function show($id)
    {
        //get email from database
        $email = Email::find($id);
        //return view with email
        return view('emails.show', compact('email'));   
    }   
    //create email
    public function create()
    {
        //return view
        return view('emails.create');
    }
    //store email
    public function store(Request $request)
    {
        $user = $request->user();
        //validate data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
       //create email and  the relationship with the user
        $email = $user->emails()->create($request->all());
        //save email to database
        $email->save();

        //redirect to email index with success message
        return redirect('/')->with('message', 'Email created successfully');
    }
    //edit email
    public function edit($id)
    {
        //get email from database
        $email = Email::find($id);
        //return view with email
        return view('emails.edit', ['title' => $email->title, 'content' => $email->content, 'id' => $email->id]);
    }
    //update email
    public function update(Request $request, $id)
    {
        //validate data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        //get email from database
        $email = Email::find($id);
         //update updated_at
        $email->updated_at = now();
         //update email
        $email->update($request->all());
        //redirect to email detail page with success message
        return redirect('/emails/'.$id)->with('message', 'Email updated successfully');
    }
    //delete confirmation page
    public function delete($id)
    {
        //get email from database
        $email = Email::find($id);
        //return view with email
        return view('emails.delete', compact('email'));
    }

    //delete email
    public function destroy($id)
    {
        //get email from database
        $email = Email::find($id);
        //detach relationship with user
        $email->users()->detach();
        //delete email
        $email->delete();
        //remove logs related to this email
        SentLog::where('email_id', $id)->delete();
        //redirect to email index page
        return redirect('/');
    }
    //before sending email, input recipient email
    public function send($id)
    {
        //get email from database
        $email = Email::find($id);
        //return view with email
        return view('emails.send',['email' => $email,'id'=>$id]);
    }
    //send email
    public function sendEmail(Request $request, $id)
    {
        //get email from database
        $email = Email::find($id);  
        //get recipient email
        $recipient = $request->email;
        //send email
        Mail::to($recipient)->queue(new HelloEmail($email->title, $email->content));

        //create sent log
        $sentlog = new SentLog();
        $sentlog->email_id = $email->id;
        $sentlog->user_id = auth()->user()->id;
        $sentlog->sent_at = now();
        $sentlog->save();
        
        //redirect to email index page with success message
        return redirect('/')->with(['message' => 'Email sent successfully']);
    }
    //sendlog 
    public function sentlog()
    {
        //get logs for current user
        $logs = SentLog::where('user_id', auth()->id())->get();
        //reorganize logs to show email title and sent time
        $logs = $logs->map(function($log) {
            return [
                'title' =>  Email::find($log->email_id)->title,
                'sent_at' => $log->sent_at
            ];
        });



        //return view with sent logs
        return view('sentlogs.index', compact('logs'));
    }

}