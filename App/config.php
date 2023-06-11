<?php


define("SITE_NAME", "OP-Build");
define("SITE_PROTOCOL", isset($_SERVER["HTTPS"]) ? "https://" : "http://");
define("SITE_DOMAIN", $_SERVER["SERVER_NAME"]);
define("SITE_ROOT", "/opbuild");
define("URL_BASE", SITE_PROTOCOL.SITE_DOMAIN.SITE_ROOT);