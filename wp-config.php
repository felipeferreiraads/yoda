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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'yoda');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'fkiJrbkTUw!kof)O.x1gs[-; vvDs<3=8K[+i y({awQc_8oX0!1AoSD%!v;UC?[');
define('SECURE_AUTH_KEY',  'W{U(dn`q/nHq358jo>~BtL?WDo/|Anaw{72QLy~AWf0pt1JO+yI.smBur!h+#PeR');
define('LOGGED_IN_KEY',    '.}e*F&w?6^y8XKxqJsP<T%v6bYY<P^ovEr7=,UAZk)YhZ@x}C}qs~,D>SiaP=900');
define('NONCE_KEY',        '(p35XL)5sK}VnCSa9/b/S2la~gq2<~K(:`hU*o66K+{zjaX%^AnzB9+Ccug:S-Wr');
define('AUTH_SALT',        'X=kA6pDvh%Ha_ygk<[4+cb(_6^wF]<6oi!05p6iPO{meYp3l6_]yq^W5mlPnB*r<');
define('SECURE_AUTH_SALT', 's$T^rC DZ}:hN5]lOTb&)TH/,]i7Tm$fQ[*wg4wbMgtb_*L1w0UEkrySQMeID4H@');
define('LOGGED_IN_SALT',   '_S]dFJ^hwQD>6 8]g0OD;kqU#%/lY! 8F-0iovDdIKF}f#=QBjTS^f$F|pXmlNPh');
define('NONCE_SALT',       '.Ng/mrVf!nH_1|7w!:R)LUrwk&]zZY.oDT!sV_2$./kii)io-5Og1n(6{mHAmq&C');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
