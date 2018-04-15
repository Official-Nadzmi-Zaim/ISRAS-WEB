<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportingController extends Controller
{
    public function processReporting() {
        $arrUserData = getUserData();
        $arrPaymentData = getPaymentData();
        $arrAssessmentData = getAssessmentData();
    }

    private function getUserData() {}

    private function getPaymentData() {}

    private function getAssessmentData() {}
}
