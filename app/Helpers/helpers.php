<?php
// format number
if (!function_exists('formatCurrency')) {
    function formatCurrency($amount)
    {
        return number_format($amount);
    }
}

// lowercase
if (!function_exists('lowercaseText')) {
    function lowercaseText($text)
    {
        return strtolower($text);
    }
}
// remove spaces
if (!function_exists('removeSpaces')) {
    function removeSpaces($text)
    {
        return str_replace(' ', '', $text);
    }
}


// check disable account
if (!function_exists('checkDisableAccount')) {
    function checkDisableAccount($value)
    {
        if ($value == null) {
            return 'Chưa xác thực';
        } else {
            return 'Đã xác thực';
        }
    }
}

// translate class disable account
if (!function_exists('translateClassDisableAccount')) {
    function translateClassDisableAccount($value)
    {
        if ($value === null) {
            return 'danger';
        } else {
            return 'success';
        }
    }
}

// translate class role account
if (!function_exists('translateClassRoleAccount')) {
    function translateClassRoleAccount($value)
    {
        if ($value === 'admin') {
            return 'danger';
        } elseif ($value === 'staff') {
            return 'primary';
        } else {
            return 'success';
        }
    }
}

// translate class status custom
// if (!function_exists('translateClassStatusCustom')) {
//     function translateClassStatusCustom($value)
//     {
//         if ($value === 0) {
//             return 'eye-off text-danger';
//         } else {
//             return 'eye text-success';
//         }
//     }
// }
if (!function_exists('translateClassStatusCustom')) {
    function translateClassStatusCustom($value)
    {
        if ($value === 0) {
            return 'bi-eye-slash text-danger'; // biểu tượng mắt đóng
        } else {
            return 'bi-eye text-success'; // biểu tượng mắt mở
        }
    }
}

// translate class process order
if (!function_exists('translateClassProcessOrder')) {
    function translateClassProcessOrder($value)
    {
        if ($value === 1) {
            return 'warning';
        } elseif ($value === 2) {
            return 'primary';
        } elseif ($value === 3) {
            return 'success';
        } elseif ($value === 4) {
            return 'secondary';
        } else {
            return "danger";
        }
    }
}
// translate text process order
if (!function_exists('translateTextProcessOrder')) {
    function translateTextProcessOrder($value)
    {
        if ($value === 1) {
            return 'Đang xử lý';
        } elseif ($value === 2) {
            return 'Đang giao hàng';
        } elseif ($value === 3) {
            return 'Đã giao hàng';
        } elseif ($value === 4) {
            return 'Đã hủy';
        } else {
            return "Chờ xác nhận";
        }
    }
}
// translate class status order
if (!function_exists('translateClassStatusOrder')) {
    function translateClassStatusOrder($value)
    {
        if ($value == 0) {
            return 'danger';
        } elseif ($value == 1) {
            return 'success';
        } else {
            return "warning";
        }
    }
}
// translate text status order
if (!function_exists('translateTextStatusOrder')) {
    function translateTextStatusOrder($value)
    {
        if ($value == 0) {
            return 'Chưa thanh toán';
        } elseif ($value == 1) {
            return 'Đã thanh toán';
        } else {
            return "Lỗi";
        }
    }
}
// check role edit information user
if (!function_exists('checkRoleEditInformationUser')) {
    function checkRoleEditInformationUser($authUserId, $userId)
    {
        if ($authUserId !== $userId) {
            return 'disabled';
        }
    }
}
// translate text payment order
if (!function_exists('translateTextPaymentOrder')) {
    function translateTextPaymentOrder($value)
    {
        if ($value == 0) {
            return 'Trực tiếp';
        } elseif ($value == 1) {
            return 'MoMo';
        } elseif ($value == 2) {
            return 'VNPay';
        } else {
            return "Error";
        }
    }
}

// calc %
if (!function_exists('calculateDiscountedPrice')) {
    function calculateDiscountedPrice($originalPrice, $discountPercentage)
    {
        // Tính số tiền giảm giá
        $discountAmount = ($originalPrice * $discountPercentage) / 100;

        // Tính giá sau khi giảm giá
        $discountedPrice = $originalPrice - $discountAmount;

        return $discountedPrice;
    }
}

if (!function_exists('translateClassIconNotification')) {
    function translateClassIconNotification($type)
    {
        if ($type === 'order') {
            return 'shopping-bag';
        }
        if ($type === 'user') {
            return 'user';
        }
        return 'bell';
    }
}

if (!function_exists('routeViewNotification')) {
    function routeViewNotification($type)
    {
        if ($type === 'order') {
            return 'admin.order.show';
        }
        if ($type === 'user') {
            return 'admin.user.show';
        }
    }
}

if (!function_exists('formatDateTime')) {
    function formatDateTime($dateTime)
    {
        $date = new DateTime($dateTime);

        return $date->format('d/m/Y H:i:s'); // Ví dụ: 12/08/2024 03:43:39
    }
}
