<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Initialisation de l'API PayPal
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                env('PAYPAL_CLIENT_ID'),
                env('PAYPAL_SECRET')
            )
        );

        // Création d'une nouvelle commande PayPal
        $payment = new \PayPal\Api\Payment();
        $payment->setIntent('sale')
                ->setPayer(
                    new \PayPal\Api\Payer(['payment_method' => 'paypal'])
                )
                ->setTransactions([
                    (new \PayPal\Api\Transaction())
                        ->setAmount(
                            new \PayPal\Api\Amount([
                                'total' => $request->input('amount'),
                                'currency' => 'USD'
                            ])
                        )
                ])
                ->setRedirectUrls(
                    new \PayPal\Api\RedirectUrls([
                        'return_url' => route('payment.success'),
                        'cancel_url' => route('payment.cancel')
                    ])
                );

        // Effectuer le paiement
        try {
            $payment->create($apiContext);
            return redirect()->away($payment->getApprovalLink());
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            // En cas d'erreur de connexion PayPal
            return redirect()->route('payment.failure');
        }
    }

    public function paymentSuccess(Request $request)
    {
        // Traiter le succès du paiement
        // Vous pouvez enregistrer les détails de la transaction dans votre base de données
        // Rediriger l'utilisateur vers une page de confirmation ou de succès
    }

    public function paymentCancel(Request $request)
    {
        // Traiter l'annulation du paiement
        // Rediriger l'utilisateur vers une page d'annulation ou de retour
    }

    public function paymentFailure(Request $request)
    {
        // Traiter les échecs de paiement
        // Rediriger l'utilisateur vers une page d'échec de paiement ou de retour
    }
}
