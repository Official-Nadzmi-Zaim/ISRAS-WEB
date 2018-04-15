@extends('layouts.app')

<style>
  .payment-tbl {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  .payment-tbl td, .payment-tbl th {
      border: 1px solid #ddd;
      padding: 8px;
  }

  .payment-tbl tr:hover {background-color: #ddd;}

  .payment-tbl th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #5a5a5a;
      color: white;
  }

  .payment-no {
      width: 8%;
      text-align: center;
  }
  .payment-no2 {
      width: 12%;
      text-align: center;
  }
  .payment-no3 {
      width: 16%;
      text-align: center;
  }
</style>
@section('content')
    <div class="container marketing">
        <h2 class="featurette-heading" style="margin-top: 20px;">Payment Transaction</h2>
        <br><br>
        <table class="payment-tbl">
            <thead>
                <tr>
                    <th class="payment-no" style="text-align: center">No</th>
                    <th class="payment-no" style="text-align: center">Payment Id</th>
                    <th class="payment-no2" style="text-align: center">Amount (RM)</th>
                    <th class="payment-no3" style="text-align: center">Payment Method</th>
                    <th>Bank</th>
                    <th class="payment-no3" style="text-align: center">Date of Payment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="payment-no">1</td>
                    <td class="payment-no">123</td>
                    <td class="payment-no2">180.00</td>
                    <td class="payment-no3">CREDIT</td>
                    <td>BANK ISLAM</td>
                    <td class="payment-no3">21-02-2018</td>
                </tr>
                <tr>
                    <td class="payment-no">2</td>
                    <td class="payment-no">234</td>
                    <td class="payment-no2">190.00</td>
                    <td class="payment-no3">CASH</td>
                    <td>MAYBANK</td>
                    <td class="payment-no3">22-02-2018</td>
                </tr>
                <tr>
                    <td class="payment-no">3</td>
                    <td class="payment-no">432</td>
                    <td class="payment-no2">220.00</td>
                    <td class="payment-no3">CASH</td>
                    <td>OCBC BANK</td>
                    <td class="payment-no3">28-02-2018</td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href='' class='btn btn-lg btn-primary' style="width: 15%">Back</a>
    </div>
@endsection