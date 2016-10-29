<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'ousia_save');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'mae');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'mae');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aV+hi~NW;7LT[g;Rt=Zk;y{|T5}XR$|< rOL9[3_8W,N+PM},(9-VrC,/n4X3Upb');
define('SECURE_AUTH_KEY',  '4R.@<:6%2B+g{hn qO-+,ke,=IQk2`x[Gjg>K9X><g61eC>zfOTu*nvYq873I7~*');
define('LOGGED_IN_KEY',    'x]iS(&Gi6EL&WBY3k[q@T+(V|XMch7.L1u11-6h>{iK}M=z>1^=p^Pk|S,pu*m9@');
define('NONCE_KEY',        '{Q4<i7YcJ f-i8+2Ay$&j;O9Vlh/z=wKt]$q4ZB|59OkW5.T(C**Uew>R;vO:=_r');
define('AUTH_SALT',        'r8b_13^vvt#Qp9/UUudL=U.F](g6d1H}Z^t;L!~V+8H@hT89Bjvqu |Ny3n-Y!r(');
define('SECURE_AUTH_SALT', '6D6-`X89@!0*;xG||X}mRQP,<b-n(7U.u>hp$taGTnL8&Tsc{t-b!G8Fuh%+TjQ%');
define('LOGGED_IN_SALT',   '21js>Dw:!P,6/ F]+RzY)vYNkx]|-)WgNOD::oBpwY8x^/SM>w-?Q2HG+wx:d^~<');
define('NONCE_SALT',       'FjfX:8Jn#W99N_Q(WfbaIl#cZ1%IuNL|W]l{Fn-W< Ix|`<B9T;Erf6$S`76|y/U');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
