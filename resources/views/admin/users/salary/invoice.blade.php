
<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from thememarch.com/demo/html/ivonne/general-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2022 02:13:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeMarch">
    <!-- Site Title -->
    <title>{{$invoice->user->name . ' - ' . __('home.Invoice')}}</title>
    <link rel="stylesheet" href="{{asset('admin/invoice/css/style.css')}}">
</head>

<body>
<div class="cs-container">
    <div class="cs-invoice cs-style1">
        <div class="cs-invoice_in" id="download_section">
            <div class="cs-invoice_head cs-type1 cs-mb25">
                <div class="cs-invoice_left">
                    <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16"><b class="cs-primary_color">Invoice No:</b> #{{$invoice->id}}</p>
                    <p class="cs-invoice_date cs-primary_color cs-m0"><b class="cs-primary_color">Date: </b> {{$invoice->created_at->format('d.m.Y')}}</p>
                </div>
                <div class="cs-invoice_right cs-text_right">
                    <div class="cs-logo cs-mb5"><img src="{{asset('admin/images/logo-full.png')}}" alt="Logo" width="100px"></div>
                </div>
            </div>
            <div class="cs-invoice_head cs-mb10">
                <div class="cs-invoice_left">
                    <b class="cs-primary_color">Invoice To:</b>
                    <p>{{$invoice->user->name  ?? ''}}
                        <br>{{$invoice->user->address ?? $invoice->user->location}}
                        <br>{{$invoice->user->phone}}

                    </p>
                </div>

            </div>
            <div class="cs-table cs-style1">
                <div class="cs-round_border">

                    <div class="cs-invoice_footer cs-border_top">
                        <div class="cs-left_footer cs-mobile_hide">
                            <p class="cs-mb0"><b class="cs-primary_color">Additional Information:</b></p>
                            <p class="cs-m0">At check in you may need to present the credit <br>card used for payment of this ticket.</p>
                        </div>
                        <div class="cs-right_footer">
                            <table>
                                <tbody>
                                <tr class="cs-border_left">
                                    <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">{{__('salary.salary')}}</td>
                                    <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">{{$invoice->salary. ' ' . __('home.le')}}</td>
                                </tr>
                                <tr class="cs-border_left">
                                    <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">{{__('home.Payment Date')}}</td>
                                    <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">{{$invoice->date}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="cs-note">

                    <div class="cs-note_right">
                        <p class="cs-mb0"><b class="cs-primary_color cs-bold">{{__('home.old payments')}}:</b></p>
                    </div>
                </div><!-- .cs-note -->
                    <div class="cs-table_responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">{{__('user.name')}}</th>
                                <th class="cs-width_4 cs-semi_bold cs-primary_color cs-focus_bg">{{__('home.Payment Date')}}</th>
                                <th class="cs-width_1 cs-semi_bold cs-primary_color cs-focus_bg">{{__('salary.salary')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $invoices = \App\Models\Salary::where('user_id',$invoice->user->id)->get() @endphp
                            @php $count = \App\Models\Salary::where('user_id',$invoice->user->id)->sum('salary') @endphp


                            @forelse($invoices as $row)
                            <tr>
                                <td class="cs-width_3">{{$row->user->name ?? ''}}</td>
                                <td class="cs-width_4">{{$row->date}}</td>
                                <td class="cs-width_1">{{$row->salary. ' ' . __('home.le')}}</td>
                            </tr>
                            @empty
                                <div class="alert alert-danger">
                                    <span class="font-weight-semibold">{{__('home.There is no data')}}</span>.
                                </div>

                            @endforelse

                            </tbody>
                        </table>
                    </div>
                <div class="cs-invoice_footer">
                    <div class="cs-left_footer cs-mobile_hide"></div>
                    <div class="cs-right_footer">
                        <table>
                            <tbody>
                            <tr class="cs-border_none">
                                <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color">{{__('home.Total Amount')}}</td>
                                <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color cs-text_right">{{$count}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="cs-invoice_btns cs-hide_print">
            <a href="javascript:window.print()" class="cs-invoice_btn cs-color1">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="392" cy="184" r="24"/></svg>
                <span>{{__('home.Print')}}</span>
            </a>
            <button id="download_btn" class="cs-invoice_btn cs-color2">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>{{__('home.download')}}</title><path d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288"/></svg>
                <span>{{__('home.download')}}</span>
            </button>
        </div>
    </div>
</div>
<script src="{{asset('admin/invoice/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/invoice/js/jspdf.min.js')}}"></script>
<script src="{{asset('admin/invoice/js/html2canvas.min.js')}}"></script>
<script>
    (function ($) {
        'use strict';

        /*--------------------------------------------------------------
        ## Down Load Button Function
        ----------------------------------------------------------------*/
        $('#download_btn').on('click', function () {
            var downloadSection = $('#download_section');
            var cWidth = downloadSection.width();
            var cHeight = downloadSection.height();
            var topLeftMargin = 40;
            var pdfWidth = cWidth + topLeftMargin * 2;
            var pdfHeight = pdfWidth * 1.5 + topLeftMargin * 2;
            var canvasImageWidth = cWidth;
            var canvasImageHeight = cHeight;
            var totalPDFPages = Math.ceil(cHeight / pdfHeight) - 1;

            html2canvas(downloadSection[0], { allowTaint: true }).then(function (
                canvas
            ) {
                canvas.getContext('2d');
                var imgData = canvas.toDataURL('image/jpeg', 1.0);
                var pdf = new jsPDF('p', 'pt', [pdfWidth, pdfHeight]);
                pdf.addImage(
                    imgData,
                    'JPG',
                    topLeftMargin,
                    topLeftMargin,
                    canvasImageWidth,
                    canvasImageHeight
                );
                for (var i = 1; i <= totalPDFPages; i++) {
                    pdf.addPage(pdfWidth, pdfHeight);
                    pdf.addImage(
                        imgData,
                        'JPG',
                        topLeftMargin,
                        -(pdfHeight * i) + topLeftMargin * 0,
                        canvasImageWidth,
                        canvasImageHeight
                    );
                }
                pdf.save('{{$invoice->user->name ?? ''}}-invoice.pdf');
            });
        });
    })(jQuery); // End of use strict

</script>
</body>
</html>
