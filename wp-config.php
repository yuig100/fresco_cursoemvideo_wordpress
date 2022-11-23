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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursowordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'C!>8B^({|jjAQNU^fC|wJ7-1]@m>C{ME@>+Z7;-wb(rm;;mT;;HX[WRMXYD~*#KR' );
define( 'SECURE_AUTH_KEY',  'au4|@jL6|Q/bctQ$4hu.*=_Axe3_$^u+D6TOL}>p1;WLMlLuum%X9nn}dYL)M^Q^' );
define( 'LOGGED_IN_KEY',    'QM.Ho|Nwix8rQ< FB4j*zv5b{E+tPb,Vvaszgdr8DcreqitR8pI{{)Ue!h1z?5Im' );
define( 'NONCE_KEY',        'K$/E`W>mq:D~;?[a%VRm@t$W [0Im=jZRd/[lKkIZ2Y`m/zJRXbIyg4.mjS>g{A8' );
define( 'AUTH_SALT',        '[#6e#IP|4l%S-OJw}|hL%f7sH5p>}]UFI:SVQD!6?fy6MB6Rt1LJ0meVC+E ^@O>' );
define( 'SECURE_AUTH_SALT', 'OV3Fgo6TR|0:>XNbKn-dr&Mlb+gpeyusF<o!09trC;kk_+M^Rp%K+!g&w1}e5TiS' );
define( 'LOGGED_IN_SALT',   'bd_/8/]C=O{8?ZmXKA;!@I:$6?&a,>? 3[i_>(3dOXeh|Z505iLP5<@fS%izqfA1' );
define( 'NONCE_SALT',       ')md5?=aOa2f1JNN^6M%Bu>sXK<yzp#d]cmWa}>hmKJ`WY,iN238IW>p|;7u,ySMD' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
