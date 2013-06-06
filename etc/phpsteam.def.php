<?php

include_once dirname(dirname(__FILE__)) . "/version.def.php";
include_once dirname(__FILE__) . "/steam_attributes.def.php";
include_once dirname(__FILE__) . "/steam_types.def.php";

defined("STEAM_SOCKET_TIMEOUT_DEFAULT") or define("STEAM_SOCKET_TIMEOUT_DEFAULT", 60);

defined("LOW_API_CACHE") or define("LOW_API_CACHE", true);
defined("API_DEBUG") or define("API_DEBUG", false); //todo: logger



// define download types
define("DOWNLOAD_ATTACHMENT", "attachment");
define("DOWNLOAD_IMAGE", "image");
define("DOWNLOAD_INLINE", "inline");
define("DOWNLOAD_RANGE", "range");

// define content provider types
define("CONTENT_PROVIDER_COAL",		0x00000000);
define("CONTENT_PROVIDER_STEAMWEB", 0x00000001);
define("CONTENT_PROVIDER_DATABASE", 0x00000002);
// config default content provider
defined("DEFAULT_CONTENT_PROVIDER") or define("DEFAULT_CONTENT_PROVIDER", CONTENT_PROVIDER_COAL);


// define persistence types
define("PERSISTENCE_DATABASE", 		 0x00000000);
define("PERSISTENCE_FILE",			 0x00001000);
define("PERSISTENCE_FILE_UID",		 0x00000002 | PERSISTENCE_FILE);
define("PERSISTENCE_FILE_HASH",		 0x00000003 | PERSISTENCE_FILE);
define("PERSISTENCE_FILE_CONTENTID", 0x00000004 | PERSISTENCE_FILE);
// config persistence
defined("ENABLE_FILE_PERSISTENCE") or define("ENABLE_FILE_PERSISTENCE", false);
defined("FILE_PERSISTENCE_BASE_PATH") or define("FILE_PERSISTENCE_BASE_PATH", false);
defined("DEFAULT_PERSISTENCE_TYPE") or define("DEFAULT_PERSISTENCE_TYPE", PERSISTENCE_DATABASE);

defined("MIMETYPE_STORAGE_PATH") or define("MIMETYPE_STORAGE_PATH", "/tmp/");