<?php

switch($hostname){
    case 'cwo':
        define('WP_ENV', 'local');
        break;
	case 'cwo-ev.de':
		define('WP_ENV', 'server');
		break;
	default:
		define('WP_ENV', 'server');
}