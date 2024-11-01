<?php

namespace Traits;

trait LoggingTrait{
    public function logAction($action){
        echo "Logging action: $action";
    }
}
