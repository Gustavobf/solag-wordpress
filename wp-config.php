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
define( 'DB_NAME', 'solag_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wp_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '4%ikQCrG_+<wAz>1E0(xqKtzl;c?R+~WQ5f6Was|T=Eje@o^zmoAj46BXP{[:AoX' );
define( 'SECURE_AUTH_KEY',  'SQ]$OlFsK^;psaC`%t?a3%k)~{j*6E-JsdQli:2G&xW6omw-LjBuG]yMqZ?7[ tH' );
define( 'LOGGED_IN_KEY',    'f9%y+XUO;UgwfyHqV[PwYv@#$!OA7hp)~7+9-RJ9%rpIeuJ9.<fG5-eQv3Cx5S[.' );
define( 'NONCE_KEY',        '%[pQ_4|1izKMea<RM31JPF)Sjr{(N1elb%J`]m a9C2f_VUAyigg&ekbx4e=6aEC' );
define( 'AUTH_SALT',        '8:?Fep>d6,U@00U!H]Mv{q 4}s>.s1rvRP=U~:/Bx<ji.NdNh01w/PNVgLf9p/wl' );
define( 'SECURE_AUTH_SALT', 'Iq]WVOk@k8.&GT#6B+ao9*m}JBFRpfZsB(OR%G1xhe@%L{qvXj#]qWT@;@RFoa_U' );
define( 'LOGGED_IN_SALT',   'cHsu6ndk,[Y/:dyo t)BenujE]U&.lql<S]a=<f<aCSum(bKNYu#,NnTSqaqg4it' );
define( 'NONCE_SALT',       'Cp6ojub21L?Hzyx0r8]~YmKdmh4HcPsPR[^s2:>< eQVpUqgUd3IVr8;0vP)2MBQ' );

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
