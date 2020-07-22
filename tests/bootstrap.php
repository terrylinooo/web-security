<?php
/*
 * This file is part of the Shieldon package.
 *
 * (c) Terry L. <contact@terryl.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

date_default_timezone_set('UTC');

define('BOOTSTRAP_DIR', __DIR__);

require __DIR__ . '/../autoload.php';
require __DIR__ . '/../vendor/autoload.php';

function print_cli_msg($text, $type = 'notice', $bg = false)
{
    $reset = "\e[0m";

    // Front color
    $black = "\e[30m";
    $red = "\e[31m";
    $green = "\e[32m";
    $yellow = "\e[33m";
    $blue = "\e[34m";
    
    // Background color
    $_red = "\e[41m";
    $_green = "\e[42m";
    $_yellow = "\e[43m";
    $_blue = "\e[44m";

    print "\n\n";

    if (!$bg) {
        switch ($type) {
            case 'error':
                print $red . $text . $reset;
                break;
    
            case 'info':
                print $blue . $text . $reset;
                break;
    
            case 'success':
                print $green . $text . $reset;
                break;
    
            case 'notice':
            default:
                print $yellow . $text . $reset;
                break;
        }
    } else {
        switch ($type) {
            case 'error':
                print $_red . $black . $text . $reset;
                break;
    
            case 'info':
                print $_blue . $black . $text . $reset;
                break;
    
            case 'success':
                print $_green . $black . $text . $reset;
                break;
    
            case 'notice':
            default:
                print $_yellow . $black . $text . $reset;
                break;
        } 
    }

    print "\n";
}