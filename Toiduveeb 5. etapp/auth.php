<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Example payment usage - SEB - Pangalink-net</title>
    </head>
    <body>
<?php

// THIS IS AUTO GENERATED SCRIPT
// (c) 2011-2017 Kreata OÜ www.pangalink.net

// File encoding: UTF-8
// Check that your editor is set to use UTF-8 before using any non-ascii characters

// STEP 1. Setup private key
// =========================

$private_key = openssl_pkey_get_private(
"-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEAzUMpzC2NEpK0694/1ItHwxFhAiz4eLwb7hLgFVEmm+hhxGzP
MRHzk2ks832/DU33CL9mKQYnRdiyVnmuFHkxOVdRDf5TKlnKmZ9eyBk7XRH8iiAD
WmfQaFhR0RD47kBZgVafHdSnK/QUXE572DBs2rpBbNCuyrks7+Rxj7Srhne+y/jN
3x5rX46Y1/zLTGTYo1Ug6B2C4E1p8RaRjy9W3RnW4/HzF18+Qcy0Nfv6tzwWsyOY
x6Ymv5exK7xkqFJ+udk5s7icb+uibuETLgKHwBR0i/qapkFlsEiwOTxG9r55qAJd
7Y0SrJL+doEttN8Is5D5ynN7ZoD3dV/SERjT9wIDAQABAoIBADekq2IEPyf3yT/f
oeIWV7/TqD6Uvk7Mf63MRB7DPvooxsgezxP4T9V4P41KW05aAkvGxwT7/A19Lusu
VTiLmgJ3Xyux9A2ZBckbYPBRlrwmMhWnlAEf/2kp+BP6y+CaZSkguEW37hGGOzbC
t+PlTL0GnNHIyHmANWRaw0Y3rf/nXfLeZVDBrcGdfHXEMB9IMMOeabqQKoKLLZUc
U28NA5ZB//ChnOT8TGZgF1nzXKhxX4y3r1y3AdNabmGijWjjb3GiQ4jbdYe+8hg2
rJADJ0GIbwSUuzbLOTISJJrD+DvM1DyYHBSn0docBTJVPH40g9ZaNG/FL1OiPa9l
RNQqxJECgYEA5d07E3Drmx9j3Pex854z3cjP7Bs/SjYoJxHK50I5cJfcgPejGgHd
3xZGAcd+iNEBE8A2ryy+Ic5DOYRtT1zD+D+pE75kCYY98DDB25rTp+pAZzOJQDJ5
BeyjqvysJOlNkuI0MialKrYpOcoljYmjYCrUxIvxujo/bktjtOXbki0CgYEA5JnV
yh7JncxwvACPdl2x8dYB8dbmC2/ve6RGf6+o0/sYEdfht4erXrpgFVaPVTLGCPEm
UapC9u5xwFz4lQAnYIHUUFXGB3CaRkUHBtT7LvZtXJy4BUx3mCUBShniqBCJxZTW
M6mRyY82vVkfRD54PEbwyp0nejVeet/+EgYnqTMCgYAX5ySAhgqKC/6XeM5xde8Q
zhQJCmBPeEg+n9QIrlNIyRHt+1JjnvQSgb9v6e3XjlxdUGyfVLjEzS0iawnu6ceb
JguP+QlwEByawIc4LeZ6nJpr4OkR2u3I1u3CFxpTkEs3zfv9hxU/1sd8se+rwzdR
BcMwWRke83WrI33PzuNBVQKBgB3yDPBqMg0Kv+XQyPo/cdT1LNIKTZ5H7n4q2dVW
JG6IYPHNbtME4a0KCxYgfawyd4CqXlOqUxVXzOzfAO071OyudSqE4ekNlhgIaNA7
TCAtxcuw9+YxyyTSDCYx1+AeMn4AbkLcPq3BpfEN4Kum50c2H8ra5VX78cF04Cpq
Rf3DAoGBAL3w49S2PULi88efliHDYnxpHFI4OFjX1mmEW7XWzsg/cqjWl4MW22ye
GzedRPmqKzyV6hpJjpaMPRUyzTl9q9cnZRWJ6KSCkl0Y60V70RACdf7TUEwTC9LA
j2ahSdQ29kWq6cn6xXAjM4D6Oyp6qYF9S6pJTauZamK3s16XpdUu
-----END RSA PRIVATE KEY-----");

// STEP 2. Define payment information
// ==================================

$fields = array(
        "VK_SERVICE"     => "4011",
        "VK_VERSION"     => "008",
        "VK_SND_ID"      => "uid100010",
        "VK_REPLY"       => "3012",
        "VK_RETURN"      => "http://localhost:8080/project/MKJKJo4teQffYsGC?auth_action=success",
        "VK_DATETIME"    => "2017-04-23T23:08:21+0300",
        "VK_RID"         => "1492978101433",
        "VK_ENCODING"    => "utf-8",
);

// STEP 3. Generate data to be signed
// ==================================

// Data to be signed is in the form of XXXYYYYY where XXX is 3 char
// zero padded length of the value and YYY the value itself
// NB! SEB expects symbol count, not byte count with UTF-8,
// so use `mb_strlen` instead of `strlen` to detect the length of a string

$data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 4011 */
        str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
        str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* uid100010 */
        str_pad (mb_strlen($fields["VK_REPLY"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_REPLY"] .      /* 3012 */
        str_pad (mb_strlen($fields["VK_RETURN"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_RETURN"] .     /* http://localhost:8080/project/MKJKJo4teQffYsGC?auth_action=success */
        str_pad (mb_strlen($fields["VK_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_DATETIME"] .   /* 2017-04-23T23:08:21+0300 */
        str_pad (mb_strlen($fields["VK_RID"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_RID"];         /* 1492978101433 */

/* $data = "0044011003008009uid1000100043012066http://localhost:8080/project/MKJKJo4teQffYsGC?auth_action=success0242017-04-23T23:08:21+03000131492978101433"; */

// STEP 4. Sign the data with RSA-SHA1 to generate MAC code
// ========================================================

openssl_sign ($data, $signature, $private_key, OPENSSL_ALGO_SHA1);

/* lnpWcgw2Z8386lfLgVHSv40ZWIOMZ9aGMVhVpRcNoMBSqi0Qe5wQ6zKvT9y/n6GIHNPmwRpRu/iTNoh1rlgAkC4Ef8KRzdHG2cB6HBhRQ/ApyoTuliZCx0X5kYNS+onf1URmeRO0RhDepEB+Ham7qcyDYX/uTZxa0DkWgdSe+ZEtMMyJCfQTS1FclRTLYTU9HI1bIsoI9+NisUyWmm5S/Q7R0Lkve7S7N5u/L+hxfBso6jqhLwiaGuV3s5bQQFf8pNDWYc1e2TrbKDDn535uh2Wca+VoU5TPSpvxnDTJJyblv7nXVv3a1B5iqC6O3KL0kujP1c5x63mO02qDQcf8IA== */
$fields["VK_MAC"] = base64_encode($signature);

// STEP 5. Generate POST form with payment data that will be sent to the bank
// ==========================================================================
?>

        <h1><a href="http://localhost:8080/">Pangalink-net</a></h1>
        <p>Autentimise näidisrakendus <strong>"SUKY"</strong></p>

        <form method="post" action="http://localhost:8080/banklink/seb-common">
            <!-- include all values as hidden form fields -->
<?php foreach($fields as $key => $val):?>
            <input type="hidden" name="<?php echo $key; ?>" value="<?php echo htmlspecialchars($val); ?>" />
<?php endforeach; ?>

            <!-- draw table output for demo -->
            <table>
<?php foreach($fields as $key => $val):?>
                <tr>
                    <td><strong><code><?php echo $key; ?></code></strong></td>
                    <td><code><?php echo htmlspecialchars($val); ?></code></td>
                </tr>
<?php endforeach; ?>

                <!-- when the user clicks "Edasi panga lehele" form data is sent to the bank -->
                <tr><td colspan="2"><input type="submit" value="Edasi panga lehele" /></td></tr>
            </table>
        </form>

    </body>
</html>