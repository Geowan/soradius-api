<?php

namespace SoradiusApi;

use GuzzleHttp\Client;

class SoradiusApi
{
    const BASE_DOMAIN = "soradius.com";

    protected $apiKey;
    protected $baseDomain;
    public $sandbox;

    public $baseUrl;

    public function __construct($apiKey, $sandbox = false)
    {
        $this->baseDomain = self::BASE_DOMAIN;
        $this->apiKey = $apiKey;
        $this->sandbox = $sandbox;
        $this->baseUrl = "https://" . $this->baseDomain . "/api/v1/";
    }
    /**
     * Sends email to soradius api
     * @param $from
     * @param $to
     * @param $htmlBody
     * @param $subject
     */
    public function sendEmail($from, $to, $subject, $htmlBody)
    {
        $client = new Client();
        return $client->request('POST', $this->baseUrl . "/email/default/send-email", [
            'form_params' => [
                "from" => $from,
                "to" => $to,
                "subject" => $subject,
                "sandbox" => $this->sandbox,
                "html_body" => $htmlBody,
                "apiKey" => $this->apiKey,
            ]
        ]);
    }
}
