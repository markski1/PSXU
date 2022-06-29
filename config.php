<?php

// $url will be the url where this runs.
// No / at the end.
$url = "https://files.example.com";
// in the example case, files will be available as "https://files.example.com/asdf.png"

// $secret_key will be your "password" for uploading here.
// no one other than you and sharex should know this.
$secret_key = "change this with a random string";

// $randlen will be the amount of random characters to generate for a file's name.
$randlen = 4;

// $restricted_extensions resticts files (default: php | exe)
$restricted_extensions = ['php', 'exe'];
