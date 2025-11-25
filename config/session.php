<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
    // if(session_start()){
    //     echo "session started";
    // }
    // else{
    //     echo "session not started yet";
    // }
}
