<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php get_meta(); ?>
		<title><?php the_title(); ?></title>
		<?php get_head(); ?>
	</head>
	<body <?php the_body_class(); ?>>
		<div class="wrap" role="document">
			<?php get_header(); ?>
			<div class="content">
				<main class="main">
					<?php the_content(); ?>
				</main>
			</div>
			<?php get_footer(); ?>
		</div>
	</body>
</html>
