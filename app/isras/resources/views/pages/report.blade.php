@extends('layouts.pdf')

@section('custom-css')
    <style>
        .header,
        .footer {
            width: 100%;
            text-align: center;
            /* position: fixed; */
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
@endsection

@section('content')
    <div id="pdf" class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="header" id="header">
            <div style="position: relative; background-color: #2D882D; width: 100%; font-size: 20pt; text-align: left; padding: 5px; color: white">
                <b>Sustainability Report</b>
            </div>
            <div style="width: 100%; position: relative; background-color: #29609E; padding: 5px; color: white">
                <table class="d">
                    <tr>
                        <td style="text-align: left" valign="top">
                            <font>Company suka suki</font>
                        </td>
                        <td style="text-align: left" valign="top">
                            <font>Submitted by : </font><br>
                            <font>Date : </font>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="body" style="margin-top: 100px;">
            <table class="d" cellpadding="5">
                <tr>
                    <td style="text-align: justify">
                        <font>
                            <span class="text-muted">The Islamic Social Responsibility Assessment System (I-SRAS) </span>is developed to provide an assesment system for Islamic-based organizations as a self-check tool of their social
                            responsibility-related programmes, activities and initiatives. This tool aims to ensure that all social responsibility practices undertaken are prioritized and in conformance
                            with the Islamic laws (Shariah)
                        </font>
                    </td> 
                    <td style="text-align: left" valign = "top">
                        <table class="d">
                            <tr valign="middle" style="text-align: justify">
                                <td>
                                    <font><b>Overall Capacity for sustainability<b></font>
                                </td>
                                <td>
                                    <font color="#2D882D" size="16pt"><b>80</b></font>
                                </td>
                            </tr>
                        </table>
                        <table class="d">
                            <tr style="background-color: #29609E; color: white;">
                                <th style="text-align: left; padding-left: 10px;">Category</th>
                                <th>Score</th>
                            </tr>
                            @for ($i=0; $i<sizeof($Arr_category); $i++)
                                @if ($i != (sizeof($Arr_category)-1))
                                    <tr>
                                        <td style="text-align: left; padding-left: 10px;" class="border">{{ucfirst(strtolower($Arr_category[$i]->name))}}</td>
                                        <td class="border">33</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td style="text-align: left; padding-left: 10px;">{{ucfirst(strtolower($Arr_category[$i]->name))}}</td>
                                        <td>33</td>
                                    </tr>
                                @endif
                            @endfor
                        </table>
                    </td>
                </tr>
            </table>

            <!-- bar chart -->
            {{-- <div>{!! $chart->container() !!}</div> --}}
            {{-- {!! $chart->script() !!} --}}
            <table class="d" cellpadding="5">
                <tr>
                    <td>
                        <div id="chart"></div>
                    </td>
                </tr>
            </table>
            
            <table class="d" cellpadding="5">
                <tr valign="top">
                    @for ($i=0; $i<sizeof($Arr_category); $i = $i + 2)
                        <td>
                            <table width="100%">
                                <tr>
                                    <th colspan="2" style="color: #2D882D; text-align: left; padding-left: 10px; font-size: 14pt;" class="border">{{ucfirst(strtolower($Arr_category[$i]->name))}}</th>
                                    <th style="color: #2D882D; font-size: 10pt;"  valign="bottom" class="border">Score</th>
                                </tr>
                                @for ($x=0; $x<sizeof($arr_key_area[$i]); $x++)
                                    @if ($x!=(sizeof($arr_key_area[$i])-1))
                                        <tr>
                                            <td width="2%" valign="top" class="border">{{$x+1}}</td>
                                            <td style="text-align: left;" class="border">{{ucwords(strtolower($arr_key_area[$i][$x]))}}</td>
                                            <td width="5%" class="border">2</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td width="2%" valign="top">{{$x+1}}</td>
                                            <td style="text-align: left;">{{ucwords(strtolower($arr_key_area[$i][$x]))}}</td>
                                            <td width="5%">2</td>
                                        </tr>
                                    @endif
                                @endfor
                                <tr>
                                    <th colspan="2" style="color: #2D882D; text-align: left; padding-left: 10px; padding-top: 10px; font-size: 14pt;">{{ucfirst(strtolower($Arr_category[$i + 1]->name))}}</th>
                                    <th style="color: #2D882D; font-size: 10pt;" valign="bottom">Score</th>
                                </tr>
                                @for ($x=0; $x<sizeof($arr_key_area[$i + 1]); $x++)
                                    @if ($x!=(sizeof($arr_key_area[$i + 1])-1))
                                        <tr>
                                            <td width="2%" valign="top" class="border">{{$x+1}}</td>
                                            <td style="text-align: left;" class="border">{{ucwords(strtolower($arr_key_area[$i + 1][$x]))}}</td>
                                            <td width="5%" class="border">2</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td width="2%" valign="top">{{$x+1}}</td>
                                            <td style="text-align: left;">{{ucwords(strtolower($arr_key_area[$i + 1][$x]))}}</td>
                                            <td width="5%">2</td>
                                        </tr>
                                    @endif
                                @endfor
                            </table>
                        </td>
                    @endfor
                </tr>
            </table>
        </div>

        <div class="footer">
            {{-- Page <span class="pagenum"></span> --}}
            <p style="font-size: 8pt;">For more information about I-SRAS Program Sustainability Assessment Tool and sustainability planning, visit <a href="#">www.isras.com.my</a></p>
        </div>
        </div>
    </div>

    <div id="exception" class="row">
        <div class="col-md-offset-4 col-md-4">
            <a href="#" id="downloadPDF" class="btn btn-primary">Print</a>
        </div>
    </div>
@endsection

@section('custom-js')
    {!! Lava::render('BarChart', 'BarChart', 'chart') !!}

     <script>
        $(docuq ssss                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ment).ready(function() {
            var panel = document.getElementById("pdf").innerHTML;
            var printWindow = window.open("", "", "");
            
            setTimeout(function () {
                printWindow.print();
            }, 500);
        });
    </script>
@endsection
