<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'limonero' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Magic123' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$Z/|?sv8D,B@4&NC]_Bcm%7S[iFQ>+GVE&%*b-*Vw DjrC2C_)AzIgW0#5pw4i[z' );
define( 'SECURE_AUTH_KEY',  '[wX:u@K.4eG.IXG|]}o^Bzw*uK!U-(:zzr%f TYw>`dj0 Rl>V% Upmk-cQw/z0e' );
define( 'LOGGED_IN_KEY',    '8)3))auziE[ojSM!=[4US>WPiTd<#hUW:~;q^p:5/V)wg98np7:mcvdAWdyL98y%' );
define( 'NONCE_KEY',        'irP?xTE8C$C8BJ[dnzmV@@q{t_kHsJc),d/I6*XU!F,/rngW#YkS@<);@Lm/p vP' );
define( 'AUTH_SALT',        'V={Y_8/YZXt*-egEAXz ,Fi.QIk0~$At},k~,.12Rq{yfIF(YnIT|2R8Q#(f3Uqy' );
define( 'SECURE_AUTH_SALT', 'nI 6L#N+Q.E0Z6}y:,7&O1!>T>h+oY2ov,`&7Wa:Cxj]}oyTC|>}3DN$C*?@e2H/' );
define( 'LOGGED_IN_SALT',   'oFvG}pkts~0oq%g86k|oPr{xv(P3M*$J%b=^E<_[:e5gfj_3DaPD[9Gr?,q]K!gF' );
define( 'NONCE_SALT',       'mw!AK{=;0/NDxSDzr2OgAfa5z}w!1@,Ia,xWPJnhj087&|QR@-96SbtO*3,Ol<o<' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
