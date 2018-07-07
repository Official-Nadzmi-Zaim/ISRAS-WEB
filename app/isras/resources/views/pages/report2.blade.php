@extends('layouts.pdf')

@section('content')
    <div class="header row"> <!-- header -->
        <div class="col-md-12">
            <div class="row bg-green txt-white">
                <div class="col-md-12"><h2>SUSTAINABILITY REPORT</h2></div>
            </div>
            <div class="row bg-blue txt-white">
                <div class="col-md-6">
                    <h3>UiTM Shah Alam</h3>
                    <h4>Study of something...</h4>
                </div>
                <div class="col-md-offset-1 col-md-5">
                    <h6>Submitted By: some@email.address</h6>
                    <h6>Date: todays date is?</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="content row"> <!-- content -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6"> <!-- intro paragraph -->
                    <p>
                        This is the intro paragraph<br />

                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                        rumbling rumbling rumbling
                    </p>
                </div>
                <div class="col-md-6"> <!-- domain report scores -->
                    <div class="row"> <!-- report scores table header -->
                        <div class="col-md-8">
                            <h4><b>Overall Capacity for Sustainability:</b></h4>
                        </div>
                        <div class="col-md-4">
                            <h1><span class="txt-blue">4.0</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"> <!-- table report score -->
                            <table class="table">
                                <thead class="bg-blue txt-white">
                                    <th scope="col">Domain</th>
                                    <th scope="col">Domain Score</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Community</td>
                                        <td>1.0</td>
                                    </tr>
                                    <tr>
                                        <td>Environmental</td>
                                        <td>1.0</td>
                                    </tr>
                                    <tr>
                                        <td>Workplace</td>
                                        <td>1.0</td>
                                    </tr>
                                    <tr>
                                        <td>Marketplace</td>
                                        <td>1.0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row"> <!-- data visualization (graph) -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><span class="txt-blue">Average Sustainability Capacity by Domain</span></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row"> <!-- score details -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <thead class="txt-blue">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Community</th>
                                        <th scope="col">Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Social Development</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Education and Awareness</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Economic Development</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Health</td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <thead class="txt-blue">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Environmental</th>
                                        <th scope="col">Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Environmental Related Policy</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Climate Change Mitigation and Adaptation</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Prevention of Polution</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Green Product and Services</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Protection and Restoration of the Natural Environment</td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <thead class="txt-blue">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Workplace</th>
                                        <th scope="col">Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Training and Education</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Ocupational Safety and Health Administration (OSHA)</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Equiptable Opportunity</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Employment</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Awards and Recognition</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Labor and Management Relation</td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <thead class="txt-blue">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Marketplace</th>
                                        <th scope="col">Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Market Related Policies</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Product and Services</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Marketing</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Stakeholder Engagement</td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer row">
        <div class="col-md-12">
            <p style="font-size: 8pt;">
                For more information about I-SRAS Program Sustainability Assessment Tool and sustainability planning, visit <a href="#">www.isras.com.my</a>
            </p>
        </div>
    </div>
@endsection
