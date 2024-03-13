<?php 
    
    // Require tất cả các file có trong commons
    require_once './commons/env.php';
    require_once './commons/helper.php';
    require_once './commons/connect-db.php';

    // Require tất cả các file có trong controllers và models
    require_file(PATH_CONTROLLER);
    index();

require_once './commons/disconnect-db.php';