<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| | Here is where you can register web routes for your application.
These | routes are loaded by the RouteServiceProvider within a group
which | contains the &quot;web&quot; middleware group. Now create
something great! | */

Route::get('/', function () {
    return
        view('welcome');
});

Route::get('send_test_email', function () {
    Mail::raw('Sending emails with Mailgun and Laravel is easy!', function ($message) {
        $message->subject('Mailgun and Laravel are awesome!');
        $message->from('cv@hamzamostafa.me', 'Hamza Mostafa');
        $message->to('hmza.mostafa@gmail.com');
    });
});

Route::get('send_test_email2', function () {
    Mail::raw('Sending emails with Mailgun and Laravel is easy!', function ($message) {
        $message->subject('Mailgun and Laravel are awesome!');
        $message->from('cv@hamzamostafa.me', 'Hamza Mostafa');
        $message->to('hamza_mostafa@zoho.com');
    });
});

Route::get('send_email', function (Request $request) {
    $address = $request->address;
    $name = $request->name;
    $body = $request->body;
    $subject = $request->subject;

    Mail::send('cv', ['body' => $body, 'name' => $name], function ($message) use ($address, $subject) {
        $message->to($address)
            ->from('cv@hamzamostafa.me', 'Hamza Mostafa')
            ->subject($subject)
            // ->attach('https:://hamzamostafa.me/uploads/Hamza-Mostafa-at-zoho.com-----Mobile-010-69-00-00-63.pdf')
            ->bcc('hamza_mostafa@zoho.com');
    });
    // @fixme: add a flash message that the email was sent.
    Redirect::to('/');
});

Route::get('resume', function () {
    $pdf = PDF::loadView('welcome');
    return $pdf->download('Hamza-Mostafa-010-69-00-00-63.pdf');
});

Route::get('save_cv', function () {
    if (!empty($_FILES['data'])) {
        move_uploaded_file($_FILES['data']['tmp_name'], 'uploads' . DIRECTORY_SEPARATOR . 'Hamza-Mostafa-010-69-00-00-63.pdf');
        // $content = file_get_contents($_FILES['data']['Hamza-Mostafa-010-69-00-00-63.pdf']);
    } else {
        throw new Exception("no data");
    }
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
