{{-- resources/views/emails/en/welcome.blade.php --}}
{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('emails.welcome.subject') }}</title>
</head>
<body>
    <h1>{{ trans('emails.welcome.greeting', ['name' => $user->name]) }}</h1>
    
    <p>{{ trans('emails.welcome.intro') }}</p>
    
    <p>{{ trans('emails.welcome.instructions') }}</p>
    
    <ul>
        <li>{{ trans('emails.welcome.step1') }}</li>
        <li>{{ trans('emails.welcome.step2') }}</li>
        <li>{{ trans('emails.welcome.step3') }}</li>
    </ul>
    
    <p>{{ trans('emails.welcome.closing') }}</p>
    
    <p>{{ trans('emails.welcome.signature') }}</p>
    
    <hr>
    <small>{{ trans('emails.welcome.footer') }}</small>
</body>
</html> --}}



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ trans('emails.welcome.subject') }}</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color:#f7f9fc;">

    <table align="center" width="600" cellpadding="0" cellspacing="0" 
           style="background-color:#ffffff; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); overflow:hidden;">
        <tr>
            <td align="center" style="background-color:#4CAF50; padding:20px;">
                <h1 style="color:#ffffff; margin:0;">{{ trans('emails.welcome.subject') }}</h1>
            </td>
        </tr>
        
        <tr>
            <td style="padding:30px; color:#333333; font-size:16px; line-height:1.6;">
                
                <p style="font-size:18px; font-weight:bold; color:#4CAF50; margin-top:0;">
                    {{ trans('emails.welcome.greeting', ['name' => $user->name]) }}
                </p>
                
                <p>{{ trans('emails.welcome.intro') }}</p>
                
                <p>{{ trans('emails.welcome.instructions') }}</p>
                
                <ul style="padding-left:20px; margin:20px 0;">
                    <li style="margin-bottom:8px;">✅ {{ trans('emails.welcome.step1') }}</li>
                    <li style="margin-bottom:8px;">🚀 {{ trans('emails.welcome.step2') }}</li>
                    <li style="margin-bottom:8px;">🎯 {{ trans('emails.welcome.step3') }}</li>
                </ul>
                
                <p style="margin-top:20px; font-weight:bold; color:#4CAF50;">
                    {{ trans('emails.welcome.closing') }}
                </p>
                
                <p>{{ trans('emails.welcome.signature') }}</p>
                
                <div style="text-align:center; margin:30px 0;">
                    <a href="{{ url('/') }}" 
                       style="background-color:#4CAF50; color:#ffffff; text-decoration:none; padding:12px 24px; border-radius:5px; display:inline-block; font-weight:bold;">
                        {{ trans('emails.welcome.button', [], 'fr') ?? 'Commencer' }}
                    </a>
                </div>
            </td>
        </tr>
        
        <tr>
            <td align="center" style="background-color:#f0f0f0; padding:15px; font-size:12px; color:#666;">
                <small>{{ trans('emails.welcome.footer') }}</small>
            </td>
        </tr>
    </table>

</body>
</html>