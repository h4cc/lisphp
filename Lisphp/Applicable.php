<?php
require_once 'Lisphp/Scope.php';

interface Lisphp_Applicable {
    function apply(Lisphp_Scope $scope, Lisphp_List $arguments);
}

