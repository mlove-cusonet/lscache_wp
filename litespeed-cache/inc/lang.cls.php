<?php
/**
 * The language class.
 *
 * @since      	3.0
 * @package    	LiteSpeed_Cache
 * @subpackage 	LiteSpeed_Cache/inc
 * @author     	LiteSpeed Technologies <info@litespeedtech.com>
 */
defined( 'WPINC' ) || exit ;


class LiteSpeed_Lang extends LiteSpeed_Cache_Const
{
	/**
	 * Get the title of id
	 *
	 * @since  3.0
	 * @access public
	 */
	public static function title( $id )
	{
		$_lang_list = array(
			self::O_CACHE						=> __( 'Enable Cache', 'litespeed-cache' ),
			self::O_CACHE_TTL_PUB				=> __( 'Default Public Cache TTL', 'litespeed-cache' ),
			self::O_CACHE_TTL_PRIV				=> __( 'Default Private Cache TTL', 'litespeed-cache' ),
			self::O_CACHE_TTL_FRONTPAGE			=> __( 'Default Front Page TTL', 'litespeed-cache' ),
			self::O_CACHE_TTL_FEED				=> __( 'Default Feed TTL', 'litespeed-cache' ),
			self::O_CACHE_TTL_STATUS			=> __( 'Default HTTP Status Code Page TTL', 'litespeed-cache' ),
			self::O_AUTO_UPGRADE				=> __( 'Automatically Upgrade', 'litespeed-cache' ),
			self::O_CACHE_PRIV					=> __( 'Cache Logged-in Users', 'litespeed-cache' ),
			self::O_CACHE_COMMENTER				=> __( 'Cache Commenters', 'litespeed-cache' ),
			self::O_CACHE_REST					=> __( 'Cache REST API', 'litespeed-cache' ),
			self::O_CACHE_PAGE_LOGIN			=> __( 'Cache Login Page', 'litespeed-cache' ),
			self::O_CACHE_FAVICON				=> __( 'Cache favicon.ico', 'litespeed-cache' ),
			self::O_CACHE_RES					=> __( 'Cache PHP Resources', 'litespeed-cache' ),
			self::O_CACHE_MOBILE				=> __( 'Cache Mobile', 'litespeed-cache' ),
			self::O_CACHE_MOBILE_RULES			=> __( 'List of Mobile User Agents', 'litespeed-cache' ),
			self::O_CACHE_PRIV_URI				=> __( 'Private Cached URIs', 'litespeed-cache' ),
			self::O_CACHE_DROP_QS				=> __( 'Drop Query String', 'litespeed-cache' ),
			self::O_PURGE_ON_UPGRADE			=> __( 'Purge All On Upgrade', 'litespeed-cache' ),
			self::O_PURGE_TIMED_URLS			=> __( 'Scheduled Purge URLs', 'litespeed-cache' ),
			self::O_PURGE_TIMED_URLS_TIME		=> __( 'Scheduled Purge Time', 'litespeed-cache' ),
			self::O_CACHE_FORCE_URI				=> __( 'Force Cache URIs', 'litespeed-cache' ),
			self::O_CACHE_FORCE_PUB_URI			=> __( 'Force Public Cache URIs', 'litespeed-cache' ),
			self::O_CACHE_EXC					=> __( 'Do Not Cache URIs', 'litespeed-cache' ),
			self::O_CACHE_EXC_QS				=> __( 'Do Not Cache Query Strings', 'litespeed-cache' ),
			self::O_CACHE_EXC_CAT				=> __( 'Do Not Cache Categories', 'litespeed-cache' ),
			self::O_CACHE_EXC_TAG				=> __( 'Do Not Cache Tags', 'litespeed-cache' ),
			self::O_CACHE_EXC_ROLES				=> __( 'Do Not Cache Roles', 'litespeed-cache' ),
			self::O_OPTM_CSS_MIN				=> __( 'CSS Minify', 'litespeed-cache' ),
			self::O_OPTM_CSS_COMB				=> __( 'CSS Combine', 'litespeed-cache' ),
			self::O_OPTM_CSS_HTTP2				=> __( 'CSS HTTP/2 Push', 'litespeed-cache' ),
			self::O_OPTM_JS_MIN					=> __( 'JS Minify', 'litespeed-cache' ),
			self::O_OPTM_JS_COMB				=> __( 'JS Combine', 'litespeed-cache' ),
			self::O_OPTM_JS_HTTP2				=> __( 'JS HTTP/2 Push', 'litespeed-cache' ),
			self::O_OPTM_TTL					=> __( 'CSS/JS Cache TTL', 'litespeed-cache' ),
			self::O_OPTM_HTML_MIN				=> __( 'HTML Minify', 'litespeed-cache' ),
			self::O_OPTM_CSS_INLINE_MIN			=> __( 'Inline CSS Minify', 'litespeed-cache' ),
			self::O_OPTM_JS_INLINE_MIN			=> __( 'Inline JS Minify', 'litespeed-cache' ),
			self::O_OPTM_CSS_ASYNC				=> __( 'Load CSS Asynchronously', 'litespeed-cache' ),
			self::O_OPTM_CCSS_GEN				=> __( 'Generate Critical CSS', 'litespeed-cache' ),
			self::O_OPTM_CCSS_ASYNC				=> __( 'Generate Critical CSS In Background', 'litespeed-cache' ),
			self::O_OPTM_CCSS_SEP_POSTTYPE		=> __( 'Separate CCSS Cache Post Types', 'litespeed-cache' ),
			self::O_OPTM_CCSS_SEP_URI			=> __( 'Separate CCSS Cache URIs', 'litespeed-cache' ),
			self::O_OPTM_CSS_ASYNC_INLINE		=> __( 'Inline CSS Async Lib', 'litespeed-cache' ),
			self::O_OPTM_CSS_FONT_DISPLAY		=> __( 'Font Display Optimization', 'litespeed-cache' ),
			self::O_OPTM_JS_DEFER				=> __( 'Load JS Deferred', 'litespeed-cache' ),
			self::O_OPTM_JS_INLINE_DEFER		=> __( 'Load Inline JS Deferred', 'litespeed-cache' ),
			self::O_OPTM_EXC_JQ					=> __( 'Exclude JQuery', 'litespeed-cache' ),
			self::O_OPTM_DNS_PREFETCH			=> __( 'DNS Prefetch', 'litespeed-cache' ),
			self::O_OPTM_RM_COMMENT				=> __( 'Remove Comments', 'litespeed-cache' ),
			self::O_OPTM_CSS_COMB_PRIO			=> __( 'Combined CSS Priority', 'litespeed-cache' ),
			self::O_OPTM_CSS_EXC				=> __( 'CSS Excludes', 'litespeed-cache' ),
			self::O_OPTM_JS_COMB_PRIO			=> __( 'Combined JS Priority', 'litespeed-cache' ),
			self::O_OPTM_JS_EXC					=> __( 'JS Excludes', 'litespeed-cache' ),
			self::O_OPTM_MAX_SIZE				=> __( 'Max Combined File Size', 'litespeed-cache' ),
			self::O_OPTM_QS_RM					=> __( 'Remove Query Strings', 'litespeed-cache' ),
			self::O_OPTM_GGFONTS_ASYNC			=> __( 'Load Google Fonts Asynchronously', 'litespeed-cache' ),
			self::O_OPTM_GGFONTS_RM				=> __( 'Remove Google Fonts', 'litespeed-cache' ),
			self::O_OPTM_CCSS_CON				=> __( 'Critical CSS Rules', 'litespeed-cache' ),
			self::O_OPTM_JS_DEFER_EXC			=> __( 'JS Deferred Excludes', 'litespeed-cache' ),
			self::O_OPTM_EMOJI_RM				=> __( 'Remove WordPress Emoji', 'litespeed-cache' ),
			self::O_OPTM_EXC					=> __( 'URI Excludes', 'litespeed-cache' ),
			self::O_OPTM_EXC_ROLES				=> __( 'Role Excludes', 'litespeed-cache' ),
			self::O_MEDIA_LAZY					=> __( 'Lazy Load Images', 'litespeed-cache' ),
			self::O_MEDIA_LAZY_EXC				=> __( 'Lazy Load Image Excludes', 'litespeed-cache' ),
			self::O_MEDIA_LAZY_CLS_EXC			=> __( 'Lazy Load Image Class Name Excludes', 'litespeed-cache' ),
			self::O_MEDIA_LAZY_PARENT_CLS_EXC	=> __( 'Lazy Load Image Parent Class Name Excludes', 'litespeed-cache' ),
			self::O_MEDIA_LAZY_PLACEHOLDER		=> __( 'Lazy Load Image Placeholder', 'litespeed-cache' ),
			self::O_MEDIA_PLACEHOLDER_RESP		=> __( 'Responsive Placeholder', 'litespeed-cache' ),
			self::O_MEDIA_PLACEHOLDER_RESP_COLOR		=> __( 'Responsive Placeholder Background Color', 'litespeed-cache' ),
			self::O_MEDIA_PLACEHOLDER_RESP_GENERATOR	=> __( 'Reponsive Placeholder Generator', 'litespeed-cache' ),
			self::O_MEDIA_PLACEHOLDER_RESP_SVG			=> __( 'Reponsive Placeholder SVG', 'litespeed-cache' ),
			self::O_MEDIA_PLACEHOLDER_RESP_ASYNC		=> __( 'Generate Reponsive Placeholder In Background', 'litespeed-cache' ),
			self::O_MEDIA_IFRAME_LAZY			=> __( 'Lazy Load Iframes', 'litespeed-cache' ),
			self::O_MEDIA_LAZYJS_INLINE			=> __( 'Inline Lazy Load Images Library', 'litespeed-cache' ),
			self::O_IMG_OPTM_AUTO				=> __( 'Optimize Automatically', 'litespeed-cache' ),
			self::O_IMG_OPTM_CRON				=> __( 'Optimization Cron', 'litespeed-cache' ),
			self::O_IMG_OPTM_ORI				=> __( 'Optimize Original Images', 'litespeed-cache' ),
			self::O_IMG_OPTM_RM_BKUP			=> __( 'Remove Original Backups', 'litespeed-cache' ),
			self::O_IMG_OPTM_WEBP				=> __( 'Optimize WebP Versions', 'litespeed-cache' ),
			self::O_IMG_OPTM_LOSSLESS			=> __( 'Optimize Losslessly', 'litespeed-cache' ),
			self::O_IMG_OPTM_EXIF				=> __( 'Preserve EXIF/XMP data', 'litespeed-cache' ),
			self::O_IMG_OPTM_WEBP_ATTR			=> __( 'WebP Attribute To Replace', 'litespeed-cache' ),
			self::O_IMG_OPTM_WEBP_REPLACE_SRCSET	=> __( 'WebP For Extra srcset', 'litespeed-cache' ),
			self::O_IMG_OPTM_JPG_QUALITY		=> __( 'WordPress Image Quality Control', 'litespeed-cache' ),
			self::O_ESI							=> __( 'Enable ESI', 'litespeed-cache' ),
			self::O_ESI_CACHE_ADMBAR			=> __( 'Cache Admin Bar', 'litespeed-cache' ),
			self::O_ESI_CACHE_COMMFORM			=> __( 'Cache Comment Form', 'litespeed-cache' ),
			self::O_CACHE_VARY_GROUP			=> __( 'Vary Group', 'litespeed-cache' ),
			self::O_PURGE_HOOK_ALL				=> __( 'Purge All Hooks', 'litespeed-cache' ),
			self::O_UTIL_NO_HTTPS_VARY			=> __( 'Improve HTTP/HTTPS Compatibility', 'litespeed-cache' ),
			self::O_UTIL_INSTANT_CLICK			=> __( 'Instant Click', 'litespeed-cache' ),
			self::O_UTIL_BROWSER_CACHE			=> __( 'Browser Cache', 'litespeed-cache' ),
			self::O_UTIL_BROWSER_CACHE_TTL		=> __( 'Browser Cache TTL', 'litespeed-cache' ),
			self::O_OBJECT						=> __( 'Object Cache', 'litespeed-cache' ),
			self::O_UTIL_CHECK_ADVCACHE			=> __( 'Check Advanced Cache', 'litespeed-cache' ),
			self::O_CACHE_EXC_COOKIES			=> __( 'Do Not Cache Cookies', 'litespeed-cache' ),
			self::O_CACHE_EXC_USERAGENTS		=> __( 'Do Not Cache User Agents', 'litespeed-cache' ),
			self::O_CACHE_LOGIN_COOKIE			=> __( 'Login Cookie', 'litespeed-cache' ),
			self::O_IMG_OPTM_WEBP_REPLACE		=> __( 'Image WebP Replacement', 'litespeed-cache' ),

			self::O_CDN 						=> __( 'Use CDN Mapping', 'litespeed-cache' ),
			self::CDN_MAPPING_URL				=> __( 'CDN URL', 'litespeed-cache' ),
			self::CDN_MAPPING_INC_IMG			=> __( 'Include Images', 'litespeed-cache' ),
			self::CDN_MAPPING_INC_CSS			=> __( 'Include CSS', 'litespeed-cache' ),
			self::CDN_MAPPING_INC_JS			=> __( 'Include JS', 'litespeed-cache' ),
			self::CDN_MAPPING_FILETYPE			=> __( 'Include File Types', 'litespeed-cache' ),
			self::O_CDN_ORI						=> __( 'Original URLs', 'litespeed-cache' ),
			self::O_CDN_ORI_DIR					=> __( 'Included Directories', 'litespeed-cache' ),
			self::O_CDN_EXC						=> __( 'Exclude Path', 'litespeed-cache' ),
			self::O_CDN_REMOTE_JQ				=> __( 'Load JQuery Remotely', 'litespeed-cache' ),
			self::O_CDN_QUIC					=> __( 'Quic Cloud API', 'litespeed-cache' ),
			self::O_CDN_CLOUDFLARE				=> __( 'Cloudflare API', 'litespeed-cache' ),

			self::O_CRWL_TIMEOUT				=> __( 'Timeout', 'litespeed-cache' ),
			// self::				=> ,
		) ;

		if ( array_key_exists( $id, $_lang_list ) ) {
			return $_lang_list[ $id ] ;
		}

		return 'N/A' ;
	}

}