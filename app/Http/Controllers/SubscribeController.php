<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        /** @var User $user*/
        $user = auth()->user();

        $user->createOrGetStripeCustomer();

        if($user->subscribed('default')) {
            return $user->redirectToBillingPortal();
        }

        return $user->newSubscription('default', 'price_1N48zzB4jmMYyyUVtzdb820k')
            ->checkout()
            ->redirect();
    }
}
