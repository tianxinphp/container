<?php

require __DIR__.'/vendor/autoload.php';


use app\Controller;
use app\Model;
use app\searchModel\SearchModel;




call_user_func([new Controller(new SearchModel()),'getName']);