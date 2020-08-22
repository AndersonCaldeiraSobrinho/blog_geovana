<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('FS_METHOD', 'direct');

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'blog_geovana' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Babuin@08' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XH.Eq,yi6JFY 3YSzW<!aRP9$cQR]Tw5OMaA~m[.M_$(@=fmc 1>h/[g6!fJQadJ' );
define( 'SECURE_AUTH_KEY',  '^duZG7=l6#awz#PflFv9#09e{~0QL6L3!J+$_CgBL$0sf=Si1S%Gb(4;E)=/KwJB' );
define( 'LOGGED_IN_KEY',    'Vq#)R#[aT47.s*NwEY;Xa.DkHK 5* )@%8rNvZDY&B%4.|Vil~zei5f_TDIo.G.`' );
define( 'NONCE_KEY',        'astMim{)8Sk6l(wPNT|~ c-U5dXz0ok}eOhz6&hr^5@X9z3ty.:F*,GuEv9O*UI>' );
define( 'AUTH_SALT',        '2WiuEh9aN2g4_krhJ/EQwC]Rp<Aoh,K6QvH^k,^O*q9@:opsXCI={UJRkh1{}:JV' );
define( 'SECURE_AUTH_SALT', 'Io%nHDO7;Srn*x%/0Et<`vl8vrElyHrV|VgQ.&*|r_T^qip@eR+qBDzx]3~a(1?n' );
define( 'LOGGED_IN_SALT',   'olQ78Qn94V9F@Sp?V0O~C%W@vfEub,?gvU]Qs[aKK(f?Yyks48ko0}=O0#xD,;:)' );
define( 'NONCE_SALT',       'I3jRI8Y4e&_Ej ,f9;Ifo@M8B2J3.ge|PFzMMal*y8U8d8wx)4ap@Uc8paq VyYy' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_geovana';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';