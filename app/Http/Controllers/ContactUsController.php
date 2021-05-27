<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use Postmark\PostmarkClient;

class ContactUsController extends Controller
{
    public function view(Request $request)
    {
        return view('pages.contact-us');
    }

    public function mail(ContactUsRequest $request)
    {
        $client = new PostmarkClient(config('services.contact.key'));
        $fromEmail = "contact@homeclass.lk";
        $toEmail = "contact@homeclass.lk";
        $subject = $request->email;
        $htmlBody = $request->message;
        $textBody = $request->name;
        $tag = "contact-us";
        $trackOpens = true;
        $trackLinks = "None";
        $messageStream = "outbound";

        $sendResult = $client->sendEmail(
            $fromEmail,
            $toEmail,
            $subject,
            $htmlBody,
            $textBody,
            $tag,
            $trackOpens,
            NULL, // Reply To
            NULL, // CC
            NULL, // BCC
            NULL, // Header array
            NULL, // Attachment array
            $trackLinks,
            NULL, // Metadata array
            $messageStream
        );

        return redirect()
            ->back()
            ->with('success', 'Your message was successfully sent');
    }
}
