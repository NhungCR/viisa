<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'visa-web' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'root' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y&{(@W4L50Z58uu?Or%N9U$JXao9a}!PTB.IyMLox-g.n?04jxl`:N#AXkMj#yP6' );
define( 'SECURE_AUTH_KEY',  ')+H~F:+e-6sy{DE7Ke]k&A`v7yJ@wOvfeH%^*Mr)]y,^;YP;aP.,(jp7Ku=Pl7%n' );
define( 'LOGGED_IN_KEY',    '9>=/ghk8L1&#$[~&;_IO{Q8m=G`lWJV#y2VD8^h!$4rcWO[DnscSebXS0U?(_b#U' );
define( 'NONCE_KEY',        'lzn;L^+s{i`u,mM*Kza`h4t8Wo>!G}=AR_Mw{^`# @Jwus7*VSW.G,&B7:*%a41w' );
define( 'AUTH_SALT',        'KK*f<s{0<{gGB/(1Sp*>%7X*!Lqq)e?;=j?X@/_XI[b!<g0X|Bcg`K^8$Df#GGSr' );
define( 'SECURE_AUTH_SALT', ']5B.rU(0/l#7Ah+~kKqcA}O,8Z)3<Uyx$*B6a&b?a%{PiMZZuwtt6flDw.H2zGU~' );
define( 'LOGGED_IN_SALT',   'RYJCHnA,d/V9&*Inw>*(n`e%|0qwl4wSWn 9%|-]k4jX+%7P}ETAfDzAmS/GCgY{' );
define( 'NONCE_SALT',       'to)0AeH6a.R&O61t?no%(]Aou;4!87+bo5dTT[$x~%XL43bN>S@XFJT&>~lvk>yY' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
