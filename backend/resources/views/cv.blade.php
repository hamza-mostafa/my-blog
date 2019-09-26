{{-- @component('mail::message') --}}
<p>Dear {{ $name }},
</p>
<p>
    Thank you for having the time to check my website and email the CV.
    I'm looking forward to meeting you.
</p>

<table class="action" align="center" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <a href="http://hamzamostafa.me/uploads/Hamza-Mostafa-at-zoho.com-----Mobile-010-69-00-00-63.pdf"
                                       class="button button-{{ $color ?? 'green' }}" target="_blank"> Open pdf</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<p>Please find the body of the message you sent to yourself</p>

<table class="panel" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td class="panel-content">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="panel-item">
                        {{ $body }}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
{{-- @component('mail::panel') --}}
{{-- {{ $body }} --}}
{{-- @endcomponent --}}
<br>
<br>
<br>
Thanks and have a wonderful day,<br>
Hamza Mostafa
{{-- @endcomponent --}}
