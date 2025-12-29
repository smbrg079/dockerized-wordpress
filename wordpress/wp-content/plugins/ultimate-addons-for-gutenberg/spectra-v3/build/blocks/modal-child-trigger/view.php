<?php
/**
 * View for rendering the block.
 * 
 * @since 3.0.0-beta.1
 * 
 * @package Spectra\Blocks\ModalChildTrigger
 */

use Spectra\Helpers\HtmlSanitizer;
?>
<div
	<?php echo wp_kses_data( $wrapper_attributes ); ?>
>
	<?php HtmlSanitizer::render( $content ); ?>
</div>
