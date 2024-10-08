<?php
// memeriksa apakah input adalah email yang valid
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //  lanjutkan dengan pengolahan email yang aman
} else {
    // tangani input yang tidak valid
}
