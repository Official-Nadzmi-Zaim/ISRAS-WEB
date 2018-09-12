@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="header row"> {{-- header --}}
                <div class="col-md-12">
                    Hello
                </div>
            </div>

            <div class="content row"> {{-- content --}}
                <div class="col-md-12">
                    {{-- letak div utk pdf dkt sini --}}
                    <div id="contentPDF">{!! $pdfData !!}</div>
                </div>
            </div>

            <div class="footer row">
                <div class="col-md-offset-4 col-md-4">
                    <a href="#" id="downloadPDF" class="btn btn-primary">Print</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
    <script>
        $(document).ready(function() {
            var doc = new jsPDF();
            var specialElementHandlers = {
                '#editor': function(element, renderer) {
                    return true;
                }
            };

            $("#downloadPDF").on("click", function() {
                doc.fromHTML($("#contentPDF").html(), 15, 15, {
                    "width": 170,
                    "elementHandlers": specialElementHandlers
                });

                doc.save("result.pdf");
            });
        });
    </script>
@endsection
