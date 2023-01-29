<?php

require 'config.php';

//just remove all session variables.
    session_unset();

//destroys all of the data associated with the current session.
    session_destroy();
    header("Location: login.php");