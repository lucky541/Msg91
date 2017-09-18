<?php
namespace lucky\Msg91;


/**
 *
 */
class OTP
{
    private $baseUrl;

    function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    function sendOTP($data)
    {
        $url = $this->baseUrl . "sendotp.php";
        return ProcessData::dataProcess($url, $data);
    }

    function verifyOTP($data)
    {
        $url = $this->baseUrl . "verifyRequestOTP.php";
        return ProcessData::dataProcess($url, $data);
    }

    function resendOTP($data)
    {
        $url = $this->baseUrl . "retryotp.php";
        return ProcessData::dataProcess($url, $data);
    }

}
