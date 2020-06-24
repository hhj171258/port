<!DOCTYPE html>
<html lang="ko">
<head><?php include "/host/home1/hhj171258/html/port/include/head.inc" ?></head>
<body>
<div id="wrap">
	<header id="header">
		<div class="header-inner">
			<h1><a href="/port">HyunJin</a></h1>
			<nav>
				<ul>
					<li><a href="javascript: void(0);">Profile</a></li>
					<li><a href="javascript: void(0);">Works</a></li>
					<li><a href="javascript: void(0);">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div id="container">
		<!-- prof -->
		<section class="prof">
			<div class="prof-inner">
				<div class="img">
					<img src="/port/images/main/img_prof2.png" alt="cloud">
					<img src="/port/images/main/img_prof3.png" alt="cloud">
					<img src="/port/images/main/img_prof4.png" alt="cloud">
					<img src="/port/images/main/img_prof1.png" alt="賢眞">
				</div>
				<div class="text">
					<h2>웹디자이너, 웹퍼블리셔 <em>한현진</em>의 포트폴리오입니다.</h2>
					<p><em>'왜 이렇게 했어요?'</em> 라는 질문에 <em>'그냥 제 느낌에는 이게 좋은 것 같아요.'</em> 가 아니라 명확한 이유와 근거를 말할 수 있는 작업물을 만들기 위해 노력하고 있습니다.</p>
					<span class="btn-more"><a href="/port/이력서-한현진.pdf" target="_blank">이력서 보기</a></span>
				</div>
			</div>
			<div class="prof-cloud">
				<div class="cloud"></div>
				<div class="cloud"></div>
			</div>
		</section>
		<!--// prof -->
		<!-- work -->
		<section class="work">
			<h2>Works</h2>
			<div class="text">
				<p>사이트에 게재된 작업물 중 <em>2020년 2월</em>부터 <em>2020년 6월</em> 사이에 만든 사이트는 <a href="http://hscampus.com" target="_blank"><em>효성직업전문학교</em></a>에서 <em>웹퍼블리싱&UI/UX 개발자양성과정</em>을 수강하면서 만든 작업물입니다.</p>
			</div>
			<div class="cntr">
				<span class="swiper-prev"></span>
				<span class="swiper-next"></span>
			</div>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php 
						$host = 'localhost';
						$user = 'hhj171258';
						$pass = 'callme!jin15';

						$db = mysqli_connect($host, $user, $pass);
						mysqli_select_db($db, 'hhj171258');

						$sql = "select Code, Name, Date from port_work where Publ = 'Y' order by date, code";
						$result =  mysqli_query($db, $sql);

						while($data = mysqli_fetch_array($result))
						{
							$date = substr($data[2], 0, 4).'.'.substr($data[2], 4, 2);
							echo "<div class='swiper-slide'><img src='/port/images/main/img_work_$data[0].jpg' alt=''><div><strong>$data[1]</strong><span class='date'>$date</span><span class='btn-more $data[0]'><a href='javascript: void(0);'>자세히 보기</a></span></div></div>";
						}
					?>
				</div>
			</div>
		</section>
		<!--// work -->
		<!-- contact -->
		<section class="contact">
			<div class="contact-bg"><img src="/port/images/main/bg_contact.jpg" alt=""></div>
			<div class="text">
				<h2>Contact</h2>
				<p>연락을 기다리고 있습니다.</p>
				<p>
					<a href="tel:010-7731-3015">010-7721-3015</a>
					<a href="mailto:hhj171258@gmail.com">hhj171258@gmail.com</a>
				</p>
			</div>
		</section>
		<!--// contact -->
		<!-- skill -->
		<section class="skill">
			<h2>Skills</h2>
			<ul class="skill-inner">
				<li>
					<div class="front">
						<img src="/port/images/main/img_skil1.jpg" alt="">
						<strong>Design</strong>
						<p>Photoshop을 이용해 간단한 사진 편집 및 보정, 배너제작을 할 수 있으며, Illustration을 사용해 아이콘 제작 및 편집을 할 수 있습니다.</p>
					</div>
					<div class="back">
						<strong>Design</strong>
						<p>Photoshop</p>
						<span>75%</span>
						<p>Illustration</p>
						<span>70%</span>
						<small>게재된 모든 이미지는 Photoshop 혹은 Illustration을 이용해 편집되었습니다.</small>
					</div>
				</li>
				<li>
					<div class="front">
						<img src="/port/images/main/img_skil2.jpg" alt="">
						<strong>Coding</strong>
						<p>HTML5, CSS3, Jquery, PHP로 웹사이트를 구현할 수 있습니다. 또한 MySQL을 통해 게시판과 상품페이지를 구현할 수 있습니다.</p>
					</div>
					<div class="back">
						<strong>Coding</strong>
						<p>HTML5, CSS3</p>
						<span>70%</span>
						<p>Jquery</p>
						<span>70%</span>
						<p>PHP</p>
						<span>50%</span>
						<small>PHP는 <a href="https://github.com/hhj171258/m_knco/blob/master/sub2_1.php" target="_blank" title="Git Source로 이동합니다">경농</a>, <a href="https://github.com/hhj171258/port/blob/master/index.php" target="_blank" title="Git Source로 이동합니다">포트폴리오</a>, <a href="https://github.com/hhj171258/gjmu" target="_blank" title="Git Source로 이동합니다">국립경주박물관</a>에 사용되었습니다.</small>
					</div>
				</li>
				<li>
					<div class="front">
						<img src="/port/images/main/img_skil3.jpg" alt="">
						<strong>Others</strong>
						<p>아래아한글, Excel, Word을 사용해 문서작업을 할 수 있으며, Powerpiont를 이용한 발표자료 제작을 할 수 있습니다.</p>
					</div>
					<div class="back">
						<strong>Others</strong>
						<p>아래아한글</p>
						<span>75%</span>
						<p>Excel</p>
						<span>70%</span>
						<p>Word</p>
						<span>75%</span>
						<p>Powerpiont</p>
						<span>75%</span>
						<small>게재된 기획서는 모두 Powerpoint로 제작되었습니다.</small>
					</div>
				</li>
			</ul>
		</section>
		<!--// skill -->
	</div>
	<!-- footer --> 
	<footer id="footer">
		<p>
			해당 사이트는 상업적 목적이 아닌 개인포트폴리오 사이트로 제작되었습니다.<br>
			사용된 모든 이미지들은 출처가 따로 있으며 포트폴리오 용도로만 사용되었습니다.<br>
			Copyright Hyunjin All Rights Reserved.
		</p>
	</footer>
	<!--// footer --> 
	<a href="javascript: void(0);">상단으로</a>
	<?php include "/host/home1/hhj171258/html/port/include/work-modal.inc" ?>
</div>
<script src="/port/script/main.js"></script>
</body>
</html>