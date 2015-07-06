<!doctype html>
<html lang="ko-KR">
<head>
    <meta charset="UTF-8">    
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">        
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="header"<?php echo !is_front_page() ? ' class="fixed"' : '';?>>
		<a href="/" id="logo">공유허브 sharehub</a>
			
		<div id="nav">
			<?php $get_id = get_the_ID();?>
			<ul>
                <li id="nav_introduce"<?php echo is_front_page() ? ' class="fixed_selected"' : '';?>><a href="/">INTRODUCE</a></li>
                <li id="nav_information"<?php echo is_front_page() ? ' class="selected"' : '';?>><a href="/#information" class="scroll_anchor">INFORMATION</a></li>
				<li id="nav_about_share_hub"><a href="/#about_share_hub" class="scroll_anchor">ABOUT SHARE HUB</a></li>
				<li id="nav_sharing_city_seoul"><a href="/#sharing_city_seoul" class="scroll_anchor">SHARING CITY SEOUL</a></li>
				<li id="nav_sharing_service"><a href="/#sharing_service" class="scroll_anchor">SHARING SERVICES</a></li>
				<li id="nav_news"<?php echo !in_array($get_id, array(22444)) && !is_front_page() ? ' class="selected"' : '';?>><a href="/category/all/">NEWS</a></li>
				<li id="nav_service"<?php echo $get_id == '22444' ? ' class="selected"' : '';?>><a href="/services">SERVICE LIST</a></li>
				<li id="nav_korean" class="kor"><a href="http://sharehub.kr">KOREAN</a></li>
				<li id="nav_menu"><a class="menu_btn" href="#" onclick="toggleMenu(); return false;">MENU</a></li>
			</ul>
			
			<div class="clear"></div>
		</div>
		
		<div id="nav_popup">
		  <ul>
		      <li<?php echo is_front_page() ? ' class="fixed_selected"' : '';?>><a href="/">INTRODUCE</a></li>
		      <li <?php echo !in_array($get_id, array(22444)) && !is_front_page() ? ' class="selected"' : '';?>><a href="/category/all/">NEWS</a></li>
              <li <?php echo $get_id == '22444' ? ' class="selected"' : '';?>><a href="/services">SERVICE LIST</a></li>
              <li class="kor"><a href="http://sharehub.kr">KOREAN</a></li>
		  </ul>
		</div>
	</div>
	

