<?php

namespace Gloudemans\ShoppingcartSecure;

use Carbon\Carbon;
use Closure;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Collection;
use Illuminate\Support\Traits\Macroable;

class Session
{
    use Macroable;

    const DEFAULT_INSTANCE = 'default';

    /**
     * Instance of the session manager.
     *
     * @var \Illuminate\Session\SessionManager
     */
    private $session;
    
    private $issecure =true;

    /**
     * Cart constructor.
     *
     * @param \Illuminate\Session\SessionManager      $session
     */
    public function __construct(SessionManager $session)
    {
        $this->session = $session;
    }

   
}
