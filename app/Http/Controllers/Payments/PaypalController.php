<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOrderRequest;
use Srmklive\PayPal\Services\PayPal;

class PaypalController extends Controller
{
    protected PayPal $payPalClient;

    public function __construct()
    {
        $this->payPalClient = new PayPal();
        $this->payPalClient->setApiCredentials(config('paypal'));
        $this->payPalClient->setAccessToken($this->payPalClient->getAccessToken());
    }

    public function create(CreateOrderRequest $request)
    {

    }

    public function capture(string $vendorOrderId)
    {

    }

    public function thankYou()
    {

    }
}
