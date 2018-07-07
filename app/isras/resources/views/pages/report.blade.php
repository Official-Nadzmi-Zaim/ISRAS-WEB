<!DOCTYPE html>
<html>
    <head>
        <style>
            .header,
            .footer {
                width: 100%;
                text-align: center;
                position: fixed;
            }
            .header {
                top: 0px;
            }
            .footer {
                bottom: 0px;
            }
            .pagenum:before {
                content: counter(page);
            }

            table {
                border-collapse: collapse;
                border: 1px;
            } 

            th,td {
                text-align: center;
            }

            table.d {
                table-layout: fixed;
                width: 100%;    
            }

            .border {
                border-bottom: 1px solid #ccc;
            }
        </style>
    </head>

    <body>
        <div class="header">
            {{-- Page <span class="pagenum"></span> --}}
            <div style="float: left">
                SUSTAINABILITY REPORT : UiTM Shah Alam</div><div style="float: right">{{date("F d, Y")}}
            </div>
        </div>
        <div style="margin-top: 20px;">
            <table class="d" cellpadding="5">
                <tr valign="top">
                    @for ($i=0; $i<sizeof($Arr_category); $i = $i + 2)
                        <td>
                            <table width="100%">
                                <tr>
                                    <th colspan="2" style="text-align: left; padding-left: 10px; font-size: 14pt;">
                                        {{ucfirst(strtolower($Arr_category[$i]->name))}}
                                    </th>
                                    <th style="font-size: 10pt;"  valign="bottom">Score</th>
                                </tr>
                                @for ($x=0; $x<sizeof($arr_key_area[$i]); $x++)
                                    <tr>
                                        <td width="2%" valign="top" class="border">{{$x+1}}</td>
                                        <td style="text-align: left;" class="border">{{ucwords(strtolower($arr_key_area[$i][$x]))}}</td>
                                        <td width="5%" class="border">2</td>
                                    </tr>
                                @endfor
                                <tr>
                                    <th colspan="2" style="text-align: left; padding-left: 10px; padding-top: 10px; font-size: 14pt;">
                                        {{ucfirst(strtolower($Arr_category[$i + 1]->name))}}
                                    </th>
                                    <th style="font-size: 10pt;" valign="bottom">Score</th>
                                </tr>
                                @for ($x=0; $x<sizeof($arr_key_area[$i + 1]); $x++)
                                    <tr>
                                        <td width="2%" valign="top" class="border">{{$x+1}}</td>
                                        <td style="text-align: left;" class="border">{{ucwords(strtolower($arr_key_area[$i + 1][$x]))}}</td>
                                        <td width="5%" class="border">2</td>
                                    </tr>
                                @endfor
                            </table>
                        </td>
                    @endfor
                </tr>
            </table>
        </div>
        <div class="footer">
            {{-- Page <span class="pagenum"></span> --}}
            <p style="font-size: 8pt;">
                For more information about I-SRAS Program Sustainability Assessment Tool and sustainability planning, visit <a href="#">www.isras.com.my</a>
            </p>
        </div>
    </body>
</html>
