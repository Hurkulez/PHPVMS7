<?php
exit();
?>

#
# Before you go live, remember to change the APP_ENV to production
# and APP_DEBUG to false. Adjust logging to taste
#

APP_ENV=dev
APP_URL=http://localhost
APP_SKIN=default
APP_KEY=base64:zdgcDqu9PM8uGWCtMxd74ZqdGJIrnw812oRMmwDF6KY=
APP_DEBUG=true
APP_LOCALE=en

PHPVMS_INSTALLED=true
VACENTRAL_API_KEY=

APP_LOG=daily
APP_LOG_LEVEL=debug
APP_LOG_MAX_FILES=3

DB_CONNECTION=sqlite
#DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=phpvms
DB_USERNAME=root
DB_PASSWORD=
DB_PREFIX=

MAIL_DRIVER=smtp
MAIL_FROM_ADDRESS=no-reply@phpvms.net
MAIL_FROM_NAME="phpVMS Admin"
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_ENCRYPTION=tls
MAIL_USERNAME=
MAIL_PASSWORD=

CACHE_DRIVER=file
CACHE_PREFIX=

SESSION_DRIVER=file
QUEUE_DRIVER=database
