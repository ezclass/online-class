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
        $client = new PostmarkClient("02d32a27-2eaf-458e-b5bd-138b17dde576");
        $fromEmail = "welcome@homeclass.lk";
        $toEmail = "welcome@homeclass.lk";
        $subject = "Hello from Postmark";
        $htmlBody = "<strong>Hello</strong> dear Postmark user.";
        $textBody = "Hello dear Postmark user.";
        $tag = "example-email-tag";
        $trackOpens = true;
        $trackLinks = "None";
        $messageStream = "outbound";

        // Send an email:
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

        if ($sendResult->errorcode == 0) {
            return redirect()->back()
                ->with('success', 'Quection sent');
        }
        return redirect()->back()
            ->with('danger', 'not send');
    }
}
