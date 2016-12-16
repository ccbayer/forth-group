<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap
 */
 global $searchLabel;
 $search = $searchLabel === '' ? 'Search' : $searchLabel;
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label for="s" class="assistive-text"><?php echo $search; ?></label>
	<div class="input-group">
		<input type="text" class="field form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" />
		<span class="input-group-btn">
			<input type="submit" class="submit btn btn-primary" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'understrap' ); ?>" />
		</span>
	</div>
</form>
