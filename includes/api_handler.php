<?php
require_once __DIR__ . '/../config.php';

class BcbApiHandler
{
    private $apiUrl;
    private $apiKey;

    public function __construct()
    {
        $this->apiUrl = BCB_API_URL;
        $this->apiKey = BCB_API_KEY;
    }

    /**
     * Create/Register User in Bangla Chatbot System
     */
    public function createUser($name, $email, $password, $mobile)
    {
        // Calculate expiration date (e.g., 30 days from now if not specified)
        // Ideally we should pull package validity from the API
        $expired_date = date('Y-m-d', strtotime('+30 days'));

        $post_data = [
            'api_key' => $this->apiKey,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'mobile' => $mobile,
            'package_id' => OFFER_PACKAGE_ID,
            'expired_date' => $expired_date
        ];

        $url = $this->apiUrl . '/create_system_user';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    /**
     * Check if user exists (Helper)
     */
    public function getUserInfo($email)
    {
        $url = $this->apiUrl . '/get_user_info/?api_key=' . $this->apiKey . '&email=' . urlencode($email);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}
?>