<?php
/**
 * The template for displaying search forms
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
	<div class="input-group">
		<input class="field form-control text-primary" id="s" name="s" type="text"
			placeholder="Rezept suchen" value="">
		<span class="input-group-append">
			<button class="submit btn bg-transparent" id="searchsubmit" name="submit" type="submit"
			value="">
			<i class="fa fa-search text-primary bg-transparent" aria-hidden="true"></i>
			</button>
		</span>
	</div>
</form>