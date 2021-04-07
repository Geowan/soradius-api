<?php
namespace AfricasTalking\SDK;

use GuzzleHttp\Client;

class SoradiusSolutions
{
	const BASE_DOMAIN = "soradius.com";

	protected $apiKey;

	public $baseUrl;

	public function __construct($apiKey)
	{
        $this->baseDomain = self::BASE_DOMAIN;

		$this->baseUrl = "https://api." . $this->baseDomain . "/api/v1/";

		//verify the api key is valid and then receive smtp credentials
	}
}
