<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="id" xml:lang="id">
<head>
    <title>{{ $_mf['setting']['get']('title') ?? 'So Klin Korean Series' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;
    charset=UTF-8">
</head>
    <body style="
    font-family: -apple-system, BlinkMacSystemFont,
        'Segoe UI', Roboto, Helvetica, Arial, sans-serif,
        'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
    box-sizing: border-box;
    background-color: #f7f7f7;
    color: #74787e;
    height: 100%;
    hyphens: auto;
    line-height: 1.4;
    margin: 0;
    -moz-hyphens: auto;
    -ms-word-break: break-all;
    width: 100% !important;
    -webkit-hyphens: auto;
    -webkit-text-size-adjust: none;
    word-break: break-word;">
        <!-- code bagian header, atau include -->
        @include ('frontend::email.header')
        <tr>
            <td class="body" style="box-sizing: border-box;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            width: 100%;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 100%;
            -webkit-box-shadow: 0 5px 8px 0 rgba(0,0,0,.03), 0 3px 10px 0 rgba(0,0,0,.03);
            box-shadow: 0 0 10px 0 rgba(0,0,0,.04), 0 0 25px 0 rgba(0,0,0,.03);">
                <table class="inner"
                aria-label="main table email"
                style="border-collapse: collapse;
                box-sizing: border-box;
                background-color: #ffffff;
                margin: 0 auto;
                padding: 0;
                width: 570px;
                -premailer-cellpadding: 0;
                -premailer-cellspacing: 0;
                -premailer-width: 570px;">
                    <th>
                        <td class="content-cell" style="box-sizing: border-box;
                        padding: 35px;">
                            <table class="inner"
                            aria-label="tujuan email"
                            style="border-collapse: collapse;
                            box-sizing: border-box;
                            background-color: #ffffff;
                            margin: 0 auto;
                            padding: 0;
                            width: 570px;
                            -premailer-cellpadding: 0;
                            -premailer-cellspacing: 0;
                            -premailer-width: 570px;">
                                <tbody>
                                    <th>
                                        <td class="content-cell" style="box-sizing: border-box;
                                        padding: 35px;">
                                        <h1 style="font-size: 23px;
                                        line-height: 1.5em;
                                        margin: 10px 0 30px;
                                        color: #666666;">So Klin Korean Series</h1>

                                        <p style="font-size: 14px;
                                        line-height: 1.5em;
                                        margin: 20px 0;">
                                            Kepada Yth. Bapak/Ibu Sudara
                                             {{ optional($user->microsite)->name }},
                                              anda baru saja mempebarui data
                                        </p>

                                        <p style="font-size: 14px;
                                        line-height: 1.5em;
                                        margin: 20px 0;">Berikut data anda :</p>

                                        <table aria-label="list kode unik"
                                        style="border-collapse: collapse;
                                        width: 100%;
                                        font-size: 13px;
                                        text-align: left;
                                        margin: 20px 0;">
                                            <tbody>
                                                <tr>
                                                    <th style="padding: 10px 12px;
                                                    border: 1px solid #aaaaaa;
                                                    border-right: none;
                                                    border-left: none;
                                                    vertical-align: top;
                                                    width: 60px;"> Kode Unik</th>
                                                    <td style="padding: 10px 12px;
                                                    border: 1px solid #aaaaaa;
                                                    border-right: none;
                                                    border-left: none;
                                                    vertical-align: top;">
                                                    {{ $user->microsite
                                                        ->receipt_photo
                                                        ->transactionNumber
                                                        ->transaction_number ?? '-' }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="padding: 10px 12px;
                                                    border: 1px solid #aaaaaa;
                                                    border-right: none;
                                                    border-left: none;
                                                    vertical-align: top;
                                                    width: 60px;">Name</th>
                                                    <td style="padding: 10px 12px;
                                                    border: 1px solid #aaaaaa;
                                                    border-right: none;
                                                    border-left: none;
                                                    vertical-align: top;">
                                                     {{ optional($user->microsite)->name }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="padding: 10px 12px;
                                                    border: 1px solid #aaaaaa;
                                                    border-right: none;
                                                    border-left: none;
                                                    vertical-align: top;
                                                    width: 60px;">Email</th>
                                                    <td style="padding: 10px 12px;
                                                    border: 1px solid #aaaaaa;
                                                    border-right: none;
                                                    border-left: none;
                                                    vertical-align: top;">
                                                    {{ optional($user->microsite)->email }}
                                                </td>
                                                </tr>
                                                <tr>
                                                    <th style="padding: 10px 12px;
                                                    border: 1px solid #aaaaaa;
                                                    border-right: none;
                                                    border-left: none;
                                                    vertical-align: top;
                                                    width: 60px;">Phone</th>
                                                    <td style="padding: 10px 12px;
                                                    border: 1px solid #aaaaaa;
                                                    border-right: none;
                                                    border-left: none;
                                                    vertical-align: top;">
                                                    {{ optional($user->microsite)->phone }}
                                                </td>
                                                </tr>
                                                <tr>
                                                    <th style="
                                                        padding: 10px 12px;
                                                        border: 1px solid #aaaaaa;
                                                        border-right: none;
                                                        border-left: none;
                                                        vertical-align: top;
                                                        width: 60px;">
                                                        Address
                                                    </th>
                                                    <td style="
                                                    padding: 10px 12px;
                                                    border: 1px solid #aaaaaa;
                                                    border-right: none;
                                                    border-left: none;
                                                    vertical-align: top;">
                                                    {{ optional($user->microsite)->address }}
                                                </td>
                                                </tr>
                                                <tr>
                                                    <th style="
                                                        padding: 10px 12px;
                                                        border: 1px solid #aaaaaa;
                                                        border-right: none;
                                                        border-left: none;
                                                        vertical-align: top;
                                                        width: 60px;">
                                                        Nomor KTP
                                                    </th>
                                                    <td style="
                                                    padding: 10px 12px;
                                                    border: 1px solid #aaaaaa;
                                                    border-right: none;
                                                    border-left: none;
                                                    vertical-align: top;">
                                                    {{ optional($user->microsite)->ktp_no }}
                                                </td>
                                                </tr>

                                                <tr>
                                                    <th style="
                                                        padding: 10px 12px;
                                                        border: 1px solid #aaaaaa;
                                                        border-right: none;
                                                        border-left: none;
                                                        vertical-align: top;
                                                        width: 60px;">
                                                        Photo KTP
                                                    </th>
                                                    @if(!empty($user->microsite->url_ktp))
                                                        <td style="
                                                        padding: 10px 12px;
                                                        border: 1px solid #aaaaaa;
                                                        border-right: none;
                                                        border-left: none;
                                                        vertical-align: top;">
                                                        <img class="img-fluid mt-3"
                                                        src="{{ $user->microsite->url_ktp['m']  }}" alt="Foto KTP">
                                                    </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <th style="
                                                        padding: 10px 12px;
                                                        border: 1px solid #aaaaaa;
                                                        border-right: none;
                                                        border-left: none;
                                                        vertical-align: top;width: 60px;">
                                                        Photo Struck
                                                    </th>
                                                    @if(!empty($user->microsite->receipt_photo->file_name))
                                                        <td style="
                                                        padding: 10px 12px;
                                                        border: 1px solid #aaaaaa;
                                                        border-right: none;
                                                        border-left: none;
                                                        vertical-align: top;">
                                                            <img class="img-fluid mt-3"
                                                        src="{{ $user->microsite->receipt_photo->url_struct['m'] }}"
                                                            alt="Foto KTP"></td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                        &nbsp;
                                        <p style="font-size: 14px;
                                        line-height: 1.5em;
                                        margin: 20px 0;">
                                            Terima kasih atas partisipasi Anda
                                        </p>
                                        <p style="font-size: 14px;
                                        line-height: 1.5em;
                                        margin: 20px 0;">
                                            {{ $_mf['setting']['get']('title') ?? 'So Klin Korean Series' }}
                                        </p>
                                        </td>
                                    </th>
                                </tbody>
                            </table>
                        </td>
                    </th>
                </table>
            </td>
        </tr>
        <!-- code bagian footer, atau include -->
        @include ('frontend::email.footer')
    </body>
</html>
