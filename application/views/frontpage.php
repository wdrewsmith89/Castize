<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php //tpl_meta(); ?>
		<title>Frontpage<?php //echo get_app_name() . " | {$title}"; ?></title>
		<!-- <link rel="stylesheet" href="/application/views/podx/dist/styles/main.css">
		<script src="/application/views/podx/dist/scripts/jquery.js"></script>
		<script src="/application/views/podx/dist/scripts/howler.js"></script>
		<script src="/application/views/podx/dist/scripts/main.js"></script> -->
		<?php //tpl_head(); ?>
	</head>
	<body class="sideNavBody">
		<div class="wrap" role="document">
			<header id="header">
				<div class="container">
			        <div class="row">
			            <div class="col-xs-9 col-md-3">
			                <a href="/"><?php //the_app_name(); ?></a>
			            </div>
			            <div class="col-xs-3 col-md-9">
			                <nav class="hidden-sm-down pull-md-right">
			                    <ul class="nav">
			                        <li><a href="/podcasts">Podcasts</a></li>
			                        <li><a href="/episodes">Episodes</a></li>
			                        <li><a href="/settings">Settings</a></li>
			                        <?php //if(is_logged_in()) { ?>
			                        <li role="presentation" class="dropdown">
			                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
			                                Hi, <?php //echo $current_user->first_name; ?>!<span class="caret"></span>
			                            </a>
			                            <ul class="dropdown-menu">
			                                <li><a href="/auth/edit_user/<?php //echo $current_user->id; ?>">Profile</a></li>
			                                <?php //if($this->ion_auth->is_admin()) { ?>
			                                <li><a href="/auth/">Administrator</a></li>
			                                <?php //} ?>
			                                <li><a href="/auth/logout">Logout</a></li>
			                            </ul>
			                        </li>
			                        <?php //} else { ?>
			                        <li><a href="/auth/login">Login</a></li>
			                        <?php //} ?>
			                    </ul>
			                </nav>
			                <button class="hamburger hidden-md-up pull-xs-right" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
			                    <span>toggle menu</span>
			                </button>
			            </div>
			        </div>
			    </div>
			</header>
			<div class="content">
				<main class="main">

				</main>
			</div>
			<footer id="footer">
			    <div class="container">
			        <div class="row">

			        </div>
			    </div>
			    <div class="copyright">
			        <div class="container">
			            <div class="row">
			                <div class="col-xs-12 text-xs-center">
			                    &copy; <?php echo date('Y'); ?>
			                </div>
			            </div>
			        </div>
			    </div>
			</footer>
		</div>
	</body>
</html>
