<?php

namespace App;

class OrderStatus
{
    public static $CANCEL = 'cancelled';
    public static $NEW_WEB_ORDER =  'new web order';
    public static $NEW_PHONE_ORDER = 'new phone order';
    public static $APPROVED = 'approved';
    public static $PACKED = 'packed';
    public static $WAIT_FOR_DELIVERY = 'ready for delivery';
    public static $ON_PROCESS = 'processing';
    public static $SHIPPED = 'shipped';
}

