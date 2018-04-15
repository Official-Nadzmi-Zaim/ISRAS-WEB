<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Payment;
use App\Assessment;

class ReportingController extends Controller
{
    public function processReporting() {
        $arrUserData = $this->getUserData();
        $arrPaymentData = $this->getPaymentData();
        $arrAssessmentData = $this->getAssessmentData();

        return $arrUserData;
    }

    private function getUserData() { return User::all(); }
    private function getPaymentData() { return Payment::all(); }
    private function getAssessmentData() { return Assessment::all(); }
}
