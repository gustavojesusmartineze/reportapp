<?php

namespace App\Models;

class InvoiceStatus
{
    const ONHOLD = 0;
    const PENDING_PAYMENT = 1;
    const PAYMENT_VERIFICATION = 2;
    const PAYMENT_APPROVED = 3;
    const DELIVERED = 4;

    public static function listStatus() {
        return [
            InvoiceStatus::ONHOLD,
            InvoiceStatus::PENDING_PAYMENT,
            InvoiceStatus::PAYMENT_VERIFICATION,
            InvoiceStatus::PAYMENT_APPROVED,
            InvoiceStatus::DELIVERED,
        ];
    }

    public static function listStatusValue() {
        return [
            InvoiceStatus::ONHOLD => 'On Hold',
            InvoiceStatus::PENDING_PAYMENT => 'Pending Payment',
            InvoiceStatus::PAYMENT_VERIFICATION => 'Payment verification',
            InvoiceStatus::PAYMENT_APPROVED => 'Payment Approved',
            InvoiceStatus::DELIVERED => 'Delivered',
        ];
    }
}
