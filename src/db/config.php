<?php
$localhost_cleardb_url = "mysql://b680ccbbe5db1a:06bf65d1@us-cdbr-iron-east-05.cleardb.net/heroku_aff9d2e3ac3a5cb?reconnect=true";

if(!getenv("CLEARDB_DATABASE_URL")){
            putenv("CLEARDB_DATABASE_URL=$localhost_cleardb_url");
}