<?php

namespace App;

use function Psy\debug;

class OrderHelpers
{
    public static function countNewOrders($orders)
    {
        $count = 0;

        foreach ($orders as $order)
            if ($order->current_status == OrderStatus::$NEW_PHONE_ORDER || $order->current_status == OrderStatus::$NEW_WEB_ORDER)
                $count += 1;

        return $count;
    }

    public static function getClasses($order_info)
    {
        switch ($order_info) {
            case OrderStatus::$NEW_WEB_ORDER:
            case OrderStatus::$NEW_PHONE_ORDER:
                return 'btn badge-btn badge-warning';

            case OrderStatus::$APPROVED:
                return 'btn badge-btn badge-success';

            case OrderStatus::$CANCEL:
                return 'btn badge-btn badge-dark';

            case OrderStatus::$PACKED:
                return 'btn badge-btn badge-info';

            case OrderStatus::$WAIT_FOR_DELIVERY:
                return 'btn badge-btn badge-secondary';

            case OrderStatus::$ON_PROCESS:
                return 'btn badge-btn badge-primary';

            case OrderStatus::$SHIPPED:
                return 'btn badge-btn badge-danger';

            default:
                return 'btn badge-btn badge-light';
        }
    }

    public static function getVNVersion($order_info)
    {
        switch ($order_info) {
            case OrderStatus::$NEW_WEB_ORDER:
                return 'Đơn mới từ Website';

            case OrderStatus::$NEW_PHONE_ORDER:
                return 'Đơn mới từ nhân viên';

            case OrderStatus::$APPROVED:
                return 'Đã xác nhận';

            case OrderStatus::$CANCEL:
                return 'Đã huỷ';

            case OrderStatus::$PACKED:
                return 'Đã đóng gói';

            case OrderStatus::$WAIT_FOR_DELIVERY:
                return 'Chờ giao hàng';

            case OrderStatus::$ON_PROCESS:
                return 'Đang giao hàng';

            case OrderStatus::$SHIPPED:
                return 'Đã giao';

            default:
                return 'Không rõ trạng thái';
        }
    }

    public static function getListOfOrderStatus()
    {
        $statusValues = [
            OrderStatus::$NEW_WEB_ORDER,
            OrderStatus::$NEW_PHONE_ORDER,
            OrderStatus::$APPROVED,
            OrderStatus::$PACKED,
            OrderStatus::$WAIT_FOR_DELIVERY,
            OrderStatus::$ON_PROCESS,
            OrderStatus::$SHIPPED,
            OrderStatus::$CANCEL
        ];

        $results = [];

        foreach ($statusValues as $status) {
            array_push($results, [
               'value' => $status,
               'render' => self::getVNVersion($status)
            ]);
        }

        return $results;
    }
}
