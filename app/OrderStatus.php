<?php

namespace App;

class OrderStatus
{
    public static $CANCEL = 'cancelled';
    public static $NEW_WEB_ORDER =  'new_web_order';
    public static $NEW_PHONE_ORDER = 'new_phone_order';
    public static $APPROVED = 'approved';
    public static $PACKED = 'packed';
    public static $READY_FOR_DELIVERY = 'ready_for_delivery';
    public static $ON_PROCESS = 'processing';
    public static $SHIPPED = 'shipped';
}

