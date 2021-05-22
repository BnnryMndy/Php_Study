<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_q0Mwrld(HS^/lg!=b*S[:X05y=d]g%3<b0^c.UL^e*VhHFDgsPG?oOtOiUJfO9s' );
define( 'SECURE_AUTH_KEY',  '(FYXia0h)6:Qdcmr5ksW3Tc)E_+)h(v,vSv^h^H={TJ#6d|_J[td[vvBqmR961lf' );
define( 'LOGGED_IN_KEY',    'Rqpg/QZP0EF6o4SI=&RRzI!uF<+8I^e1UNa]OjaRPuM&7.UR.w5[Bx]dl[|4{1IJ' );
define( 'NONCE_KEY',        'jhYRjj:C0~>i7ok1-`uUUIS0a@d!.fs-_G,7D9Y8?K:_pJ)TOe)=a%Hrf7I#m)OQ' );
define( 'AUTH_SALT',        ']1yd{L%hQF<%tLk>E<[lEfwTG~/t|B/obzugfR&rANkcQaPBXN[h0TBpkx1:&Fta' );
define( 'SECURE_AUTH_SALT', 'pOeqbgXi($!@~Q5u^~.an:h~C`!-h%g[ges27X];;1PV6H~<R,7e@%fL,4m&^Z(u' );
define( 'LOGGED_IN_SALT',   'q7:p]%8{xgbxo=8KU=IpW}|at[DA>ng#w1mK3A<34MBtBfrhkpTrcoO=3%:9aK!s' );
define( 'NONCE_SALT',       'p~f>bB22hy AE=bOFQa!V-hU#t)BoUS0d}B18;9VR[&GB6A++[h#=jggR`>## $)' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
