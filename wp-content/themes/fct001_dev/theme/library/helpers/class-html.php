<?php
/**
 * WordPress HTML Helpers
 *
 * @author Max G J Panas <http://maxpanas.com>
 */



/**
 * Class SDP_Html
 *
 *
 */
class SDP_Html {


	/**
	 * Returns a self-closing HTML
	 * element constructed
	 * by php
	 *
	 * @param string $tag
	 * @param array  $attrs
	 *
	 * @return string
	 */
	static function get_sc_element( $tag = 'img', $attrs = array() ) {
		$html = "<$tag";
		foreach ( (array) $attrs as $attr => $value ) {
			$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
			$html .= " $attr=\"$value\"";
		}
		$html .= '>';

		return $html;
	}


	/**
	 * Prints a self-closing HTML
	 * element constructed
	 * by php
	 *
	 * @param string $tag
	 * @param array  $attrs
	 *
	 * @return string
	 */
	static function sc_element( $tag = 'img', $attrs = array() ) {
		echo self::get_sc_element( $tag, $attrs );
	}


	/**
	 * Returns an HTML
	 * element constructed
	 * by php
	 *
	 * @param string $tag
	 * @param array  $attrs
	 * @param string $content
	 *
	 * @return string
	 */
	static function get_element( $tag = 'div', $attrs = array(), $content = '' ) {
		$html = self::get_sc_element( $tag, $attrs );

		$html .= $content;

		$html .= "</$tag>";

		return $html;
	}


	/**
	 * Prints an HTML
	 * element constructed
	 * by php
	 *
	 * @param string $tag
	 * @param array  $attrs
	 * @param string $content
	 *
	 * @return string
	 */
	static function element( $tag = 'div', $attrs = array(), $content = '' ) {
		echo self::get_element( $tag, $attrs, $content );
	}

	static function build_link($url, $target, $text, $class) {
        ob_start(); ?>
        <a href="<?php echo $url ?>" target="<?php echo $target ?>" class="<?php echo $class ?>">
            <?php echo $text ?>
        </a>
    <?php return ob_get_clean();
    }

    static function render_link($url, $target, $text, $class) {
	    echo self::build_link($url, $target, $text, $class);
    }
}