<?php
// https://presentation-lookincasino.com/technical/logout/

unlink($_SERVER['REMOTE_ADDR']);
header('Location: https://demo-lookincasino.com/', true, 302);
