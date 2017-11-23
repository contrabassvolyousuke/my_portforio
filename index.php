<!doctype html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="HTML,CSS,JavaScript,特殊文字,リファレンス">
		<meta name="description" content="HTML・CSS等の早見表的リファレンス">
		<meta name="robots" content="noindex,nofollow">
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
		<link rel="stylesheet" type="text/css" href="css/top.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<!--[if lt IE 9]>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

<!--><![endif]-->
	<script src="js/top.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/sort.js"></script>

	<?php
	class UserAgent{
		private $ua;
		private $device;
		public function set(){
			$this->ua = mb_strtolower($_SERVER['HTTP_USER_AGENT']);
			if(strpos($this->ua,'iphone') !== false){
				$this->device = 'mobile';
			}elseif(strpos($this->ua,'ipod') !== false){
				$this->device = 'mobile';
			}elseif((strpos($this->ua,'android') !== false) && (strpos($this->ua, 'mobile') !== false)){
				$this->device = 'mobile';
			}elseif((strpos($this->ua,'windows') !== false) && (strpos($this->ua, 'phone') !== false)){
				$this->device = 'mobile';
			}elseif((strpos($this->ua,'firefox') !== false) && (strpos($this->ua, 'mobile') !== false)){
				$this->device = 'mobile';
			}elseif(strpos($this->ua,'blackberry') !== false){
				$this->device = 'mobile';
			}elseif(strpos($this->ua,'ipad') !== false){
				$this->device = 'tablet';
			}elseif((strpos($this->ua,'windows') !== false) && (strpos($this->ua, 'touch') !== false && (strpos($this->ua, 'tablet pc') == false))){
				$this->device = 'tablet';
			}elseif((strpos($this->ua,'android') !== false) && (strpos($this->ua, 'mobile') === false)){
				$this->device = 'tablet';
			}elseif((strpos($this->ua,'firefox') !== false) && (strpos($this->ua, 'tablet') !== false)){
				$this->device = 'tablet';
			}elseif((strpos($this->ua,'kindle') !== false) || (strpos($this->ua, 'silk') !== false)){
				$this->device = 'tablet';
			}elseif((strpos($this->ua,'playbook') !== false)){
				$this->device = 'tablet';
			}else{
				$this->device = 'others';
			}
			return $this->device;
		}
	}

	$ua = new UserAgent();
	?>

	</head>
	<body>
<div id="loader-bg">
	<div id="loader">
	<div id="cssload-loader">
		<div class="tablecell">
			<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
			<p>NOW LOADING</p>
		</div>
	</div>
	</div>
</div>
<div id="wrap">
		<div class="background-wrap">
			<?php if($ua->set() === "mobile" || $ua->set() === "tablet"):?>
				<div id="mobile-bg-elem">
					<img src="video.gif">

				</div>


			<?php else:?>
				<video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
					<source src="video.mp4" type="video/mp4">
						video not supported
				</video>
			<?php endif;?>
			
			<div class="contents">
				<div class="bg_videotext">
					<h2 id="massage01"><img src="image/ttl.png" alt="タイトル"/></h2>
				</div>
				<div class="arrow" id="arrow">
					<p>SCROOL</p>
					<img src="image/arrow.png" alt="アロー">
				</div>
			</div>
		</div>


		<div class="detail">
			<header id="pagetop" class="clear head">
				<div class="menu">
					<h1 id="site-logo" class="fl_left">PORTFORIO WORKS</h1>

					<div id="glovalmenu" class="fl_right">
						<ul id="filters" class="clear">
							<li><a href="javascript:void(0);" data-filter="*" class="active">ALL</a></li>
							<li><a href="javascript:void(0);" data-filter=".filter-1">360panorama</a></li>
							<li><a href="javascript:void(0);" data-filter=".filter-2">website</a></li>
							<li><a href="javascript:void(0);" data-filter=".filter-3">movie</a></li>
							<li><a href="javascript:void(0);" data-filter=".filter-4">VR/App</a></li>
							<li><a href="javascript:void(0);" data-filter=".filter-5">Paper</a></li>
						</ul>
					</div>
				</div>
			</header>

			<section>
				<ul id="container">
					<li class="item filter-1">
						<img src="image/thumb/porforio_01.png" alt="">
						<figure>
							<a href="http://viva-study.info/clubhouse/tour.html" target="_blank">
								<div class="table">
									<div class="tablecell">
										<h4>ブリストルヒルゴルフクラブ</h4>
										<hr>
										<p>進行管理／デザイン／フロントエンド</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-1">
						<img src="image/thumb/porforio_02.png" alt="">
						<figure>
							<a href="http://viva-study.info/golf/tour.html" target="_blank">
								<div class="table">
									<div class="tablecell">
										<h4>ブリストルヒルゴルフクラブ</h4>
										<hr>
										<p>進行管理／デザイン／フロントエンド</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-1">
						<img src="image/thumb/porforio_03.png" alt="">
						<figure>
							<a href="https://teens.mynavi.jp/360" target="_blank">
								<div class="table">
									<div class="tablecell">
										<h4>マイナビ JOL</h4>
										<hr>
										<p>進行管理／デザイン／フロントエンド</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-1">
						<img src="image/thumb/porforio_04.png" alt="">
						<figure>
							<a href="http://stanley-ladies.com/coursepano/" target="_blank">
								<div class="table">
									<div class="tablecell">
										<h4>スタンレーレディスゴルフコース</h4>
										<hr>
										<p>デザイン／フロントエンド</p>
									</div>
								</div>
							</a>
						</figure>
					</li>


					<li class="item filter-2">
						<img src="image/thumb/porforio_05.png" alt="">
						<figure>
							<a href="http://vnvr.viva-next.com/" target="_blank">
								<div class="table">
									<div class="tablecell">
										<h4>VNVR / 自社ブランドVRサイト</h4>
										<hr>
										<p>進行管理／デザイン／フロントエンド</p>
									</div>
								</div>
							</a>
						</figure>
					</li>

					<li class="item filter-2">
						<img src="image/thumb/porforio_06.png" alt="">
						<figure>
							<a href="http://stanley-ladies.com/" target="_blank">
								<div class="table">
									<div class="tablecell">
										<h4>スタンレーレディスゴルフトーナメント</h4>
										<hr>
										<p>デザイン／ムービー制作／フロントエンド<br>
											<span>（一部フロントエンド外部）</span></p>
									</div>
								</div>
							</a>
						</figure>
					</li>

					<li class="item filter-2">
						<img src="image/thumb/porforio_07.png" alt="">
						<figure>
							<a href="http://draft.cplus-inc.jp/" target="_blank">
								<div class="table">
									<div class="tablecell">
										<h4>c plus</h4>
										<hr>
										<p>デザイン／ムービー制作／フロントエンド</p>
									</div>
								</div>
							</a>
						</figure>
					</li>

					<li class="item filter-2">
						<img src="image/thumb/porforio_08.png" alt="">
						<figure>
							<a href="http://kita-pr.co.jp/" target="_blank">
								<div class="table">
									<div class="tablecell">
										<h4>kita pr</h4>
										<hr>
										<p>進行管理／デザイン／フロントエンド／サーバー設定</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-2">
						<img src="image/thumb/porforio_09.png" alt="">
						<figure>
							<a href="http://www.bonmax.co.jp/" target="_blank">
								<div class="table">
									<div class="tablecell">
										<h4>BONMAX</h4>
										<hr>
										<p>デザイン／ムービー制作／フロントエンド<br>
											<span>（一部フロントエンド外部）</span></p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-2">
						<img src="image/thumb/porforio_10.png" alt="">
						<figure>
							<a href="http://www.vivace-inc.co.jp/works/index.php" target="_blank">
								<div class="table">
									<div class="tablecell">
										<h4>vivace / 社内ホームページ</h4>
										<hr>
										<p>デザイン／ムービー制作／フロントエンド	</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-2">
						<img src="image/thumb/porforio_11.png" alt="">
						<figure>
							<a href="http://voi.0101.co.jp/voi/topics/index.jsp?intid=ttop_mainbnr" target="_blank">
								<div class="table">
									<div class="tablecell">
										<h4>0101 ウェブチャネルプレス</h4>
										<hr>
										<p>LPデザイン／外部デザイナーへ<br>
											<span>（一部フロントエンド）</span>
										</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-3">
						<img src="image/thumb/porforio_12.png" alt="">
						<figure>
							<a href="http://www.youtube.com/embed/QF1NZM360Uc" data-fancybox-type="iframe" class="fancybox">
								<div class="table">
									<div class="tablecell">
										<h4>スタンレーレディスwebオープニング</h4>
										<hr>
										<p>編集／ムービーデザイン</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-3">
						<img src="image/thumb/porforio_13.png" alt="">
						<figure>
							<a href="http://www.youtube.com/embed/6qzaluWxH_s" data-fancybox-type="iframe" class="fancybox">
								<div class="table">
									<div class="tablecell">
										<h4>Dimall</h4>
										<hr>
										<p>編集／ムービーデザイン</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-3">
						<img src="image/thumb/porforio_14.png" alt="">
						<figure>
							<a href="http://www.youtube.com/embed/brvHnfk1iqs" data-fancybox-type="iframe" class="fancybox">
								<div class="table">
									<div class="tablecell">
										<h4>BONMAX</h4>
										<hr>
										<p>編集／ムービーデザイン</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-3">
						<img src="image/thumb/porforio_15.png" alt="">
						<figure>
							<a href="http://www.youtube.com/embed/nVoi4IakqCE" data-fancybox-type="iframe" class="fancybox">
								<div class="table">
									<div class="tablecell">
										<h4>BONMAX</h4>
										<hr>
										<p>編集／ムービーデザイン</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-3">
						<img src="image/thumb/porforio_16.png" alt="">
						<figure>
							<a href="http://www.youtube.com/embed/gBwRBonSEVU" data-fancybox-type="iframe" class="fancybox">
								<div class="table">
									<div class="tablecell">
										<h4>BONMAX</h4>
										<hr>
										<p>編集／ムービーデザイン</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-3">
						<img src="image/thumb/porforio_17.png" alt="">
						<figure>
							<a href="http://www.youtube.com/embed/8yNrSCnhi5c" data-fancybox-type="iframe" class="fancybox">
								<div class="table">
									<div class="tablecell">
										<h4>シャクリー</h4>
										<hr>
										<p>編集／ムービーデザイン</p>
									</div>
								</div>
							</a>
						</figure>
					</li>
					<li class="item filter-4"><img src="image/thumb/porforio_18.png" alt=""></li>
					<li class="item filter-4"><img src="image/thumb/porforio_19.png" alt=""></li>
					<li class="item filter-5"><img src="image/thumb/porforio_20.png" alt=""></li>
					<li class="item filter-5"><img src="image/thumb/porforio_21.png" alt=""></li>
					<li class="item filter-5"><img src="image/thumb/porforio_22.png" alt=""></li>
					<li class="item filter-5"><img src="image/thumb/porforio_23.png" alt=""></li>
					<li class="item filter-5"><img src="image/thumb/porforio_24.png" alt=""></li>
				</ul>
			</section>

			<footer>
				©Copyrights yousuke abe Allrights reserved.


			</footer>
		</div>

</div>
	<script src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('a.fancybox').fancybox({
				autoSize: false,
				width: '90%',
				height: '90%'
			});
		});
	</script>
	</body>
</html>
