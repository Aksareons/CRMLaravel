<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\AuthenticateApi as Middleware;

class AuthenticateApi extends Middleware
{
   protected function authenticate($request, array $quards)
   {
      $token = $request->query('api_token');
      if(empty($token)){
          $token = $request->bearerToken();
      }

      if($token === config('apitokens')[0]) return;
      $this->unauthenticated($request, $quards);
   }
}
