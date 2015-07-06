
	
	<div id="footer_area">
		<div class="content_width">
			<div id="footer">
				<div class="copyrights">
					<div class="cckorea"><a href="http://cckorea.org/xe/?mid=cckorea" target="_blank" title="크리에이티브 커먼즈 코리아 바로가기(새 창)"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_cckorea.png" alt="CC Korea (새 창으로 열림)" width="210" height="35/"></a></div>
					<div class="footer_menu"><a href="http://cckorea.org/xe/?mid=english" target="_blank" title="크리에이티브 커먼즈 코리아 바로가기(새 창)">Creative Commons Korea</a>|<a href="http://creativecommons.org/licenses/" target="_blank" title="CC 라이선스 자세히 보기(새 창)">CC License</a>|<a href="http://sharehub.kr/terms/" target="_self" title="이용약관 자세히 보기(새 창)">Terms of Us</a>|<a href="http://sharehub.kr/privacy/" target="_self" title="개인정보취급방침 자세히 보기(새 창)">Privacy Policy</a>|<a href="http://sharehub.kr/%EC%9D%B4%EB%AF%B8%EC%A7%80-%EC%B6%9C%EC%B2%98/" target="_self" title="이미지 출처 자세히 보기(새 창)">Sources of images</a></div>
					<div class="ccl-logo">
						<a rel="license" href="http://creativecommons.org/licenses/by/2.0/kr/" title="크리에이티브 커먼즈 라이선스(새 창)"><img alt="크리에이티브 커먼즈 라이선스 (새 창으로 열림)" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/80x15.png" target="_blank"></a>
					</div>
					<div class="ccl-text">
						© CC Korea Except where otherwise noted, content on this site is licensed under a <a href="http://creativecommons.org/licenses/by/2.0/kr/deed.en" target="_blank">Creative Commons Attribution 2.0 Korea License.</a>
					</div>
					<div class="contact"><a href="mailto:creative@cckorea.org" title="mail to">creative@cckorea.org</a>	/ 070-7618-0321</div>			
				</div>
			</div>
		</div>
	</div>
	
	<?php wp_footer(); ?>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-49529179-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
	
	<script type="text/javascript">
	
    	$(document).bind("click", function(e) {
            if(e.target.className != "menu_btn") {
                var $nav_popup = $("#nav_popup");
                if($nav_popup.css('display') != 'none') {
                    toggleMenu();
                }
            }
        });
        
	   function toggleMenu() {
	       var $nav_popup = $("#nav_popup");
	       if($nav_popup.css('display') == 'none') {
	           $nav_popup.fadeIn('fast');
	       } else {
	           $nav_popup.fadeOut();
	       }
	   }
	</script>
</body>
</html>