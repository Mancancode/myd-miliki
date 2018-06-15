<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
    header("Location:../../auth/login"); // Redirecting To Home Page
}
