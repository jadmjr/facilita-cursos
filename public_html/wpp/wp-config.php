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
define( 'DB_NAME', 'u209487864_facilitacursos' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'u209487864_facilita' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '???' );

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
define( 'AUTH_KEY',         '$KLU$ &^ s.WRc(rf@aW!.53d-=zgj]6Bpi%*hy]om(k^=([({+}ABu{%b|rTa[&' );
define( 'SECURE_AUTH_KEY',  '|4_bU1h(jcsxkze,3eYcc}u.|2;UV/qdiM6<N=X=Wks We J(M@`(n5=3k-(G/}7' );
define( 'LOGGED_IN_KEY',    'O86lH<R4+R0gE*#l_jTo# ll0IIf@GCY*P%o7{q|y)LbE!=:{[q-[ ]vrS8)Z@ J' );
define( 'NONCE_KEY',        '9TYR!;%CEX@pcfQv~Aq}Y{wT+mwS746.YXi)NPbT53)kJ3}FN8/FT:Xc^F rs &|' );
define( 'AUTH_SALT',        'dd=HYbLjAl$v+C%X&=|T,Goxj~RNz]&w4($w/4^9s6gh2{;<-vAVfw9Mc5==#~>#' );
define( 'SECURE_AUTH_SALT', 'GgErxz7b25f<W;.XzxPJN!g^hM&U~c0fa#NxJ-oC$#YL!Q67plQ{.+1t$+V?;lZt' );
define( 'LOGGED_IN_SALT',   'W:Sz?qi|Q]4PcL>dS*!~re)~wVQDR]_/<.hps(a)KBVqIo>dJ/0H^,b*<$Q1NO]k' );
define( 'NONCE_SALT',       '}7WNusc&&U]ilS5=h6F7LfZ)+|_GmL|XndO=X:A>n~alN]V>m4z(c}G5FT_Yzv99' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
