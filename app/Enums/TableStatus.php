<?php

namespace App\Enums;
 
enum TableStatus: string
{
    case Pending = 'pending';
    case avaliable = 'avaliable';
    case Unavaliable = 'unavaliable';
}