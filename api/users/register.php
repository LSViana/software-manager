<?php
    require_once __DIR__ . "/" . "../../infrastructure/constants.php";
    require_once __DIR__ . "/" . "../../infrastructure/request_data.php";
    require_once __DIR__ . "/" . "../../infrastructure/session_manager.php";
    require_once __DIR__ . "/";
    //
    $requestData = new RequestData();
    //
    if($requestData->isPost) {
        echo "To be implemented";
    } else {
        return http_response_code(400);
    }
?>