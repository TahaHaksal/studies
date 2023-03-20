<?php

    namespace App\PaymentGateway;

    class PaymentFacade{
        protected static function getFacaadeAccessor(){
            return 'payment';
        }
    }
