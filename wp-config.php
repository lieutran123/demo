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
define( 'DB_NAME', 'db_sns' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[hy(z0zvO_I$Hw8kC340vwv7qIdM(ND)*}-A~8+5$d=fg#dF}Mp/bjxZ*fX!`T~I' );
define( 'SECURE_AUTH_KEY',  '4%.j,1j!D9A~[yk6v_?K?&ZIWVuDIC[8V.>T:>f*n;1Hsv+fbWB,;aEM7==COZcd' );
define( 'LOGGED_IN_KEY',    '9Wa.=py#=7PBNFWI*2tc*TM!Q-1hoEr,n^[*t)[oqv.2O71k.I={drDwpeYBb(Oi' );
define( 'NONCE_KEY',        'W#h$E.2[4# [no*S<NEV#9U~}4c;&*PqXbyXw-b;`!wblbnm%!T6,f1VS3LyO16i' );
define( 'AUTH_SALT',        'JzDG I%./kzQ,3`^D0}P2i{U=lPv!Q`}O$7s@IRou6wg{}yWyZir+6y@l,9F,bQX' );
define( 'SECURE_AUTH_SALT', '!FZc<IvW$9U|p7q`ohw q{x`~PCW&A:0%V2}nhaYxsyi,zZ[y^@8DuOo@UN&TVgl' );
define( 'LOGGED_IN_SALT',   '[30N7/r:L4GOHb?29{O:_vMZ{u5R*Y@IXel/g3h{~gFJZ3tm{[{x^?z !ebt Kbf' );
define( 'NONCE_SALT',       'Vh`/W??{x{x#&saR+Mu]p_4v B1J[U3+G,wnxej{yjjEsEW,;e#^ T$^[}%8IYw}' );

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
