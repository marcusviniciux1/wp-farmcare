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
define( 'DB_NAME', 'farmcare' );

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
define( 'AUTH_KEY',         'R8Nq>jbRrZDEfhGpOfUNvk{FMa+:q%%u>8CL2u=N8/4(BqBR$pJ)uCGElIpjrJ7b' );
define( 'SECURE_AUTH_KEY',  'a2A9P{=0j8ST%P7nS5hc$nokpSn;*P(~O(:-X*eK9KOsgWv$HYPV~!j4_|E(Z-o4' );
define( 'LOGGED_IN_KEY',    'rzZEX$HE6Ph,Bd:h.`cm:X@t!A$)O`~mnF!lBCx58VS;k:qWk6[r^&6:UB-h>L8.' );
define( 'NONCE_KEY',        '3m{dk+YhY<M6<&1t/>rpMioYJ:FL<1_lqSsaKHXo3Q}%:/Aqt2^XeWK=WR-6n|r^' );
define( 'AUTH_SALT',        'UC>`=sU5-7QA|>W4I8[=>q19/3IquOypu7M9PzcB1pK%;>G}8Fs[lun~cS|b!}hN' );
define( 'SECURE_AUTH_SALT', '*R[r3U4{u:lv:5ltzf6%5bbf0|As9-!6qY.eBT97s8FzRN.J$@3U^F}W{43~(]=+' );
define( 'LOGGED_IN_SALT',   'tD!kM-=$a.eO}^A9ZNv@2Lbg195B-&$Rp#]Ys0Uf4cgDqzO%^kEn@^B77).SD1x=' );
define( 'NONCE_SALT',       '{%3u0#xfqRBVhqz}5>Xjrn4MEI-1N)?&/Q9^OuAkA6j~8hc)Q][VuBUI3T*YI9n[' );

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
