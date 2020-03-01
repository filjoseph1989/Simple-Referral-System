<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Responsive HTML Email Template</title>
    <meta name="viewport" content="width=device-width">

    <style media="screen">
    #outlook a {
        padding: 0;
    }

    body {
        width: 100% !important;
        background-color: #41849a;
        -webkit-text-size-adjust: none;
        -ms-text-size-adjust: none;
        margin: 0 !important;
        padding: 0 !important;
    }

    .ReadMsgBody {
        width: 100%;
    }

    .ExternalClass {
        width: 100%;
    }

    ol li {
        margin-bottom: 15px;
    }

    img {
        height: auto;
        line-height: 100%;
        outline: none;
        text-decoration: none;
    }

    #backgroundTable {
        height: 100% !important;
        margin: 0;
        padding: 0;
        width: 100% !important;
    }

    p {
        margin: 1em 0;
    }

    h1, h2, h3, h4, h5, h6 {
        color: #222222 !important;
        font-family: Arial, Helvetica, sans-serif;
        line-height: 100% !important;
    }

    table td {
        border-collapse: collapse;
    }

    .yshortcuts, .yshortcuts a, .yshortcuts a:link, .yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span {
        color: black;
        text-decoration: none !important;
        border-bottom: none !important;
        background: none !important;
    }

    .im {
        color: black;
    }

    div[id="tablewrap"] {
        width: 100%;
        max-width: 600px !important;
    }

    table[class="fulltable"], td[class="fulltd"] {
        max-width: 100% !important;
        width: 100% !important;
        height: auto !important;
    }

    @media screen and (max-device-width: 430px), screen and (max-width: 430px) {
        td[class=emailcolsplit] {
            width: 100% !important;
            float: left !important;
            padding-left: 0 !important;
            max-width: 430px !important;
        }

        td[class=emailcolsplit] img {
            margin-bottom: 20px !important;
        }
    }
    </style>
</head>

<body>
    <body style="width:100% !important; margin:0 !important; padding:0 !important; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; background-color:#FFFFFF;">
        <table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" style="height:auto !important; margin:0; padding:0; width:100% !important; background-color:#FFFFFF; color:#222222;">
            <tr>
                <td>
                    <div id="tablewrap" style="width:100% !important; max-width:600px !important; text-align:center !important; margin-top:0 !important; margin-right: auto !important; margin-bottom:0 !important; margin-left: auto !important;">
                        <table id="contenttable" width="600" align="center" cellpadding="0" cellspacing="0" border="0"
                            style="background-color:#FFFFFF; text-align:center !important; margin-top:0 !important; margin-right: auto !important; margin-bottom:0 !important; margin-left: auto !important; border:none; width: 100% !important; max-width:600px !important;">
                            <tr>
                                <td width="100%">
                                    <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="25" width="100%">
                                        <tr>
                                            <td width="100%" bgcolor="#ffffff" style="text-align:left;">
                                                <p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:19px; margin-top:0; margin-bottom:20px; padding:0; font-weight:normal;">
                                                    Dear {{ $name ?? '' }},
                                                </p>
                                                <p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:15px; line-height:19px; margin-top:0; margin-bottom:20px; padding:0; font-weight:normal;">
                                                    You've been invited by {{ $invitor ?? '' }} to joined our system and earn some credits. You can accept it
                                                    <a style="color:#2489B3; font-weight:bold; text-decoration:underline;" href="{{ $invitation_link ?? '#' }}">
                                                        HERE
                                                    </a>! <br><br>
                                                    Consider deleting this message if you don't know the person who invited you.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>

                                    <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" width="100%">
                                        <tr>
                                            <td width="100%" bgcolor="#ffffff" style="text-align:center;">
                                                <a style="font-weight:bold; text-decoration:none;" href="{{ $invitation_link ?? '#' }}">
                                                    <div style="display:block; max-width:100% !important; width:93% !important; height:auto !important;background-color:#2489B3;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px;border-radius:8px;color:#ffffff;font-size:24px;font-family:Arial, Helvetica, sans-serif;">
                                                        Accept
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>

                                    <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="25" width="100%">
                                        <tr>
                                            <td width="100%" bgcolor="#ffffff" style="text-align:left;">
                                                <p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:11px; line-height:14px; margin-top:0; margin-bottom:15px; padding:0; font-weight:normal;">
                                                    Email not displaying correctly? <a style="color:#2489B3; font-weight:bold; text-decoration:underline;" href="#">View it in your browser.</a>
                                                </p>
                                                <p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:11px; line-height:14px; margin-top:0; margin-bottom:15px; padding:0; font-weight:normal;">
                                                    Copyright 2020 Your Company. All Rights Reserved.<br>
                                                    If you no longer wish to receive emails from us, you may <a style="color:#2489B3; font-weight:normal; text-decoration:underline;" href="#">unsubscribe</a>.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</body>
</html>
