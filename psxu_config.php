<?php

// $url will be the url where this runs.
// No / at the end.
$url = "https://files.example.com";

// if files should go in a subdirectory, enter it's name below.
// make sure the directory exists!
$directory = "file";

// $randlen will be the amount of random characters to generate for a file's name.
$randlen = 4;

// with all the above settings default, files would be available as "https://files.example.com/file/asdf.png"




// $secret_key will be your "password" for uploading here.
// no one other than you and sharex should know this.
$secret_key = "change this with a random string";




// $restricted_extensions resticts files (default: php | exe | sh)
$restricted_extensions = ['php', 'exe', 'sh'];

// if set to 'true' (default), will verify the MIME headers of the uploaded file.
$verify_header_prefixes = true;

// list of allowed MIME header prefixes
$allowed_headers = [
    'image/', // image types
    'video/', // video types
    'audio/', // audio types
    'text/', // plain or rich text types
    'application/' // mostly archiving formats or privative media formats.
];