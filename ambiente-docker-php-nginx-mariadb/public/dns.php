<?php
$domain="ixc.com.br";
if(checkdnsrr($domain,"MX")) {
    echo "Passed";
} else {
    echo "Failed";
}
?>