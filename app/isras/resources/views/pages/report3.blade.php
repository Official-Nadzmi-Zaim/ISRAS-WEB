@extends('layouts.pdf')

@section('custom-css')
    <style>
        td, th {
            width: 50%;
            /* border: 1px solid black; */
        }

        /* bg */
        .bg-blue {
            background-color: blue;
        }
        .bg-green {
            background-color: green;
        }

        /* text */
        /* txt style */
        .txt-bold {
            font-weight: bold;
        }
        /* txt color */
        .txt-white {
            color: white;
        }
        .txt-blue {
            color: blue;
        }
    </style>
@endsection

@section('content')
    <div class="content"> <!-- content -->
        <table>
            <tr class="bg-green txt-white txt-bold"> <!-- header -->
                <th colspan="6"><h2>SUSTAINABILITY REPORT</h2></th>
            </tr>
            <tr class="bg-blue txt-white">
                <td class="txt-bold" colspan="4">
                    <h2>UiTM Shah Alam</h2>
                    <h4>
                        Islamic Social Responsibility Assessment System
                        <br />
                        (I-SRAS)
                    </h4>
                </td>
                <td colspan="2">
                    <h5>
                        Submitted By: some@email.address<br />
                        Date: 11-11-1111
                    </h5>
                </td>
            </tr>
            <tr> <!-- intros -->
                <td rowspan="6" colspan="3"> <!-- intro -->
                    <p>
                        bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla<br />
                        bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla<br />
                        bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla<br />
                        bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla<br />
                        bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                    </p>
                </td>
                <th colspan="2"> <!-- domain scores -->
                    <h3>Overall Capacity for Sustainability:</h3>
                </th>
                <th><h2>4.0</h2></th>
            </tr>
            <tr>
                <th class="bg-blue txt-white" colspan="2">Domain</th>
                <th class="bg-blue txt-white">Domain Score</th>
            </tr>
            <tr>
                <td colspan="2">Community</td>
                <th>1.0</th>
            </tr>
            <tr>
                <td colspan="2">Workplace</td>
                <th>1.0</th>
            </tr>
            <tr>
                <td colspan="2">Environmental</td>
                <th>1.0</th>
            </tr>
            <tr>
                <td colspan="2">Marketplace</td>
                <th>1.0</th>
            </tr>

            <tr> <!-- data viz -->
                <td colspan="6"><div id="chart"></div></td>
            </tr>

            <!-- tables -->
            <tr> <!-- 1st row -->
                <th class="txt-blue" colspan="2"><h4>Community</h4></th>
                <th class="txt-blue"><h4>Score</h4></th>

                <th class="txt-blue" colspan="2"><h4>Workplace</h4></th>
                <th class="txt-blue"><h4>Score</h4></th>
            </tr>
            <tr>
                <th>1</th>
                <td>Social Development</td>
                <th>1.0</th>
                
                <th>1</th>
                <td>Training and Education</td>
                <th>1.0</th>
            </tr>
            <tr>
                <th>2</th>
                <td>Education and Awareness</td>
                <th>1.0</th>
                
                <th>2</th>
                <td>Occupational Safety and Health Administration (OSHA)</td>
                <th>1.0</th>
            </tr>
            <tr>
                <th>3</th>
                <td>Economic Development</td>
                <th>1.0</th>

                <th>3</th>
                <td>Equittable Opportunity</td>
                <th>1.0</th>
            </tr>
            <tr>
                <th>4</th>
                <td>Health</td>
                <th>1.0</th>
                
                <th>4</th>
                <td>Employment</td>
                <th>1.0</th>
            </tr>
            <tr>
                <td colspan="3"></td>
                
                <th>5</th>
                <td>Awards and Recognition</td>
                <th>1.0</th>
            </tr>
            <tr>
                <td colspan="3"></td>
                
                <th>6</th>
                <td>Labor and Management Relation</td>
                <th>1.0</th>
            </tr>

            <tr> <!-- 2nd row -->
                <th class="txt-blue" colspan="2"><h4>Environmental</h4></th>
                <th class="txt-blue"><h4>Score</h4></th>
                
                <th class="txt-blue" colspan="2"><h4>Marketplace</h4></th>
                <th class="txt-blue"><h4>Score</h4></th>
            </tr>
            <tr>
                <th>1</th>
                <td>Environmental Related Policy</td>
                <th>1.0</th>
                
                <th>1</th>
                <td>Market Related Policies</td>
                <th>1.0</th>
            </tr>
            <tr>
                <th>2</th>
                <td>Climate Change Mitigation and Adaptation</td>
                <th>1.0</th>
                
                <th>2</th>
                <td>Product and Services</td>
                <th>1.0</th>
            </tr>
            <tr>
                <th>3</th>
                <td>Prevention of Polution</td>
                <th>1.0</th>
                
                <th>3</th>
                <td>Marketing</td>
                <th>1.0</th>
            </tr>
            <tr>
                <th>4</th>
                <td>Green Product and Services</td>
                <th>1.0</th>
                
                <th>3</th>
                <td>Stakeholder Engagement</td>
                <th>1.0</th>
            </tr>
            <tr>
                <td colspan="3"></td>
                
                <th>5</th>
                <td>Protection and Restoration of the Natural Environment</td>
                <th>1.0</th>
            </tr>
        </table>
    </div>

    <div class="footer row"> <!-- footer -->
        <p style="font-size: 8pt;">
            For more information about I-SRAS Program Sustainability Assessment Tool and sustainability planning, visit <a href="#">www.isras.com.my</a>
        </p>
    </div>
@endsection

@section('custom-js')
    <script>
        var svg = d3.select("#chart").append("svg")
            .attr("height", 300)
            .attr("width", 800)
            .style("background-color", "green");
    </script>
@endsection