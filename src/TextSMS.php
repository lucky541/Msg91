<?php
namespace lucky\Msg91;

/**
 *
 */
class TextSMS
{

    function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    // for Add Client
    function sendTextSMS($data)
    {
        $url = $this->baseUrl . "sendhttp.php";
        return ProcessData::dataProcess($url, $data);

    }
}