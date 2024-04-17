<?php
namespace Behavior;

class SecurityBehavior{

    public function run(&$_data){
        //header安全
        header("X-XSS-Protection: 1; mode=block");
        header("X-Frame-Options: sameorigin");
        header("X-Content-Type-Options: nosniff");
        header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
        //等保要求
        header("X-Permitted-Cross-Domain-Policies: none");
        header("Cross-Origin-Embedder-Policy: unsafe-none");
    }
}