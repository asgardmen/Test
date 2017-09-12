<!DOCTYPE html>
<html>	
		<link href="css/YTPlayer.css" media="all" rel="stylesheet" type="text/css">		
		<link type="text/css" rel="stylesheet" href="css/stylemain.css" />
		
		<script src="css/jquery-1.11.0.min.js"></script>
		<script src="css/jquery.mb.YTPlayer.js"></script>		
	
		<script src="css/main.js"></script>
    <script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter40296099 = new Ya.Metrika({
                    id:40296099,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40296099" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<?php
  $title = file_get_contents("tpl/title.tpl");
  echo $user_panel;
?>

	<body>
	
			
		
		<div class="container" id="top">			
			
			
			<div class="three_cols">
				<div class="three_cols_block">
					<div class="three_cols_block_shadows"></div>
					
					<div class="three_cols_block_title">
							<img src="img/i1.png" alt="" />
							<p class="title">Клиентские</p>
							<p>
								нужно скачать игру на компьютер
							</p>
							
							<a href="#" class="the_button">Выбрать</a>
					</div><!--/three_cols_block_title-->
					
					<div class="three_cols_block_content">
					
						<div class="three_cols_div">
							<div class="three_cols_div_inner">
								
								<a class="ref" href="https://gamesgallery.ru/client-MMORPG.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/client-MMORPG.jpg" alt="" />
								<img class="mob_img" src="img/client-MMORPG.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>MMORPG</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/client-MMORPG.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
						
						<div class="three_cols_div">
							<div class="three_cols_div_inner">
								
								<a class="ref" href="https://gamesgallery.ru/client-strategy.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/client-strategy.jpg" alt="" />
								<img class="mob_img" src="img/client-strategy.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>Стратегии</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/client-strategy.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
						
						<div class="three_cols_div">
						
							<div class="three_cols_div_inner">
								
								<a class="ref" href="https://gamesgallery.ru/client-action.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/client-action.jpg" alt="" />
								<img class="mob_img" src="img/client-action.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>Шутеры / Экшн</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/client-action.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
						
						<div class="three_cols_div">
							<div class="three_cols_div_inner">
								
								<a class="ref" href="https://gamesgallery.ru/client-simulator.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/client-simulator.jpg" alt="" />
								<img class="mob_img" src="img/client-simulator.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>Симуляторы</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/client-simulator.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
						
					
					</div><!--/three_cols_block_content-->
				</div><!--/three_cols_block-->
				
				
				
				<div class="three_cols_block">
					<div class="three_cols_block_shadows"></div>
					
					<div class="three_cols_block_title">
							<img src="img/i2.png" alt="" />
							<p class="title">Браузерные</p>
							<p>
								нужно только зарегистрироваться
							</p>
							
							<a href="#" class="the_button">Выбрать</a>
					</div><!--/three_cols_block_title-->
					
					<div class="three_cols_block_content">
					
						<div class="three_cols_div">
							<div class="three_cols_div_inner">
								
								<a class="ref" href="https://gamesgallery.ru/browser-MMORPG.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/browser-MMORPG.jpg" alt="" />
								<img class="mob_img" src="img/browser-MMORPG.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>MMORPG</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/browser-MMORPG.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
						
						<div class="three_cols_div">
							<div class="three_cols_div_inner">
								
								<a class="ref" href="https://gamesgallery.ru/browser-strategy.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/browser-strategy.jpg" alt="" />
								<img class="mob_img" src="img/browser-strategy.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>Стратегии</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/browser-strategy.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
						
						<div class="three_cols_div">
						
							<div class="three_cols_div_inner">
								
								<a class="ref" href="https://gamesgallery.ru/browser-action.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/browser-action.jpg" alt="" />
								<img class="mob_img" src="img/browser-action.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>Шутеры / Экшн</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/browser-action.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
						
						<div class="three_cols_div">
							<div class="three_cols_div_inner">
								
								<a class="ref" href="https://gamesgallery.ru/browser-simulator.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/browser-simulator.jpg" alt="" />
								<img class="mob_img" src="img/browser-simulator.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>Симуляторы</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/browser-simulator.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
						
						<div class="three_cols_div">
							<div class="three_cols_div_inner">
								
								<a class="ref" href="https://gamesgallery.ru/browser-anime.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/browser-anime.jpg" alt="" />
								<img class="mob_img" src="img/browser-anime.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>Аниме</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/browser-anime.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
						
						<div class="three_cols_div">
							<div class="three_cols_div_inner">
																
								<a class="ref" href="https://gamesgallery.ru/browser-girls.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/browser-girls.jpg" alt="" />
								<img class="mob_img" src="img/browser-girls.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>Девушкам</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/browser-girls.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
					
					</div><!--/three_cols_block_content-->
				</div><!--/three_cols_block-->


				<div class="three_cols_block">
					<div class="three_cols_block_shadows"></div>
					
					<div class="three_cols_block_title">
							<img src="img/i3.png" alt="" />
							<p class="title">Мобильные</p>
							<p>
								нужно скачать на мобильный телефон или планшет
							</p>
							
							<a href="#" class="the_button">Выбрать</a>
					</div><!--/three_cols_block_title-->
					
					<div class="three_cols_block_content">
					
						<div class="three_cols_div">
							<div class="three_cols_div_inner">
								
								<a class="ref" href="https://gamesgallery.ru/android.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/Android.jpg" alt="" />
								<img class="mob_img" src="img/Android.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>Android</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/Android.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
						
						<div class="three_cols_div">
							<div class="three_cols_div_inner">
								
								<a class="ref" href="https://gamesgallery.ru/ios.html?<?=$_SERVER['QUERY_STRING'];?>"></a>
								
								<img class="desktop_img" src="img/iOS.jpg" alt="" />
								<img class="mob_img" src="img/iOS.jpg" alt="" />
								
								<div class="three_cols_div_caption">
									<span>iOs</span>
								</div><!--/three_cols_div_caption-->
								
								<div class="video_player">
								   <video loop end preload="metadata">
									   <!--<source src="video/video1.ogv" type='video/ogg; codecs="theora, vorbis"'>-->
									   <source src="video/iOS.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
									   <!--<source src="video/video1.webm" type='video/webm; codecs="vp8, vorbis"'>-->
								  </video>
								</div><!--/video_player-->
								
							</div>
						</div><!--/three_cols_div-->
						
						
					
					</div><!--/three_cols_block_content-->
				</div><!--/three_cols_block-->

				
			</div><!--/three_cols-->
			
			
		</div><!--container end-->		

		
		
		
	
		
		
		
			
		
		
		
		
		
		
		
	</body>

</html>