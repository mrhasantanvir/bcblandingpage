<?php
require_once __DIR__ . '/../config.php';

class BkashHandler
{
    private $baseUrl;
    private $appKey;
    private $appSecret;
    private $username;
    private $password;

    public function __construct()
    {
        $this->baseUrl = BKASH_BASE_URL;
        $this->appKey = BKASH_APP_KEY;
        $this->appSecret = BKASH_APP_SECRET;
        $this->username = BKASH_USERNAME;
        $this->password = BKASH_PASSWORD;
    }

    /**
     * Get Grant Token from bKash
     */
    public function getGrantToken()
    {
        $post_token = array(
            'app_key' => $this->appKey,
            'app_secret' => $this->appSecret
        );

        $url = str_replace('/tokenized/checkout', '/tokenized/checkout/token/grant', $this->baseUrl);

        $post_token = json_encode($post_token);

        $header = array(
            'Content-Type:application/json',
            "password:{$this->password}",
            "username:{$this->username}"
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_token);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $resultdata = curl_exec($ch);
        curl_close($ch);

        return json_decode($resultdata, true);
    }

    /**
     * Create Payment Request
     */
    public function createPayment($token, $amount, $invoice, $callbackUrl)
    {
        $post_data = array(
            'mode' => '0011',
            'payerReference' => $invoice,
            'callbackURL' => $callbackUrl,
            'amount' => $amount,
            'currency' => 'BDT',
            'intent' => 'sale',
            'merchantInvoiceNumber' => $invoice
        );

        $url = $this->baseUrl . '/create';
        $post_data = json_encode($post_data);

        $header = array(
            'Content-Type:application/json',
            "Authorization:{$token}",
            "X-APP-Key:{$this->appKey}"
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $resultdata = curl_exec($ch);
        curl_close($ch);

        return json_decode($resultdata, true);
    }

    /**
     * Execute Payment
     */
    public function executePayment($token, $paymentId)
    {
        $post_data = array(
            'paymentID' => $paymentId
        );

        $url = $this->baseUrl . '/execute';
        $post_data = json_encode($post_data);

        $header = array(
            'Content-Type:application/json',
            "Authorization:{$token}",
            "X-APP-Key:{$this->appKey}"
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $resultdata = curl_exec($ch);
        curl_close($ch);

        return json_decode($resultdata, true);
    }
}
?>