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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'consepe' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'gz0H|<aI|vhg+jSU*P:yC)r4`1{mNps9C6jSz8uM28hq3LAF:b7Es9WOH=~*9aw]');
define('SECURE_AUTH_KEY',  'a|aTsbs7im3+^v#6id=2R~Zy%@7V[6/0-W{@5*$Rs82]1sBKX ?Rp:_E wUp#@>U');
define('LOGGED_IN_KEY',    '!EONuKEVzvQ?<s3Y??xvvOGH4#dVnibXI.O6]x 6Sc2;[|$D3#7d+shK_thGIGWT');
define('NONCE_KEY',        'R#cq+yi-t1tUW|Y.D$& KW+].SmO`w&-~A7]<Kp.=EvMuZAk,sN+_S|2[.SC}Q<*');
define('AUTH_SALT',        'F*parOrNUx<pktI0_]SHe~@`7z1 (T-It5[n%ubN%+eA!YCbu%THV-:C5e(z__fG');
define('SECURE_AUTH_SALT', '&<;sYhB_kz>E)qnr ]qB9QR V_4bn9W+dN|+/kb_!h 5{W_pWA<ua{IOsbWzkh1-');
define('LOGGED_IN_SALT',   '?hVhNKjlY|TjNo3E2kj|rF~>T~ )6Q^hl-IAwoe#M~3KHT7Z6$9zbGu&?loZGW(;');
define('NONCE_SALT',       'm-I-$gvpWL$]WJq^L68G[4#R-&Kv+*|;0=UaodhoZ^#2R?6*#H{3N8Ty#1ezEL$-');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'consepe_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
