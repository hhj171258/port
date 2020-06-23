<!-- work-modal: made by php -->
	<?php
		$sql = "select * from port_work where Publ = 'Y' order by date, code";
		$result = mysqli_query($db, $sql);
		
		while($data = mysqli_fetch_array($result)){
			$bgclrr = '#'.substr($data[10], 0, 6);
			$date = substr($data[0], 0, 4).'.'.substr($data[0], 4, 2);
			echo "<section class='work-modal $data[1]'>
					<span class='btn-close $data[1]'><i class='fas fa-times'></i></span>
					<div class='title' style='background-color: $bgclrr;'>
						<h3>$data[2]</h3>
						<p>$data[12]</p>
					</div>
					<div class='content'>
						<div class='view'>
							<img src='/port/images/modal/img_view_$data[1].png' alt=''>
						</div>
						<dl class='desc'>
							<dt>Date</dt>
							<dt>Elapsed Time</dt>
							<dt>Pages</dt>
							<dt>Skills</dt>
							<dt>Tools</dt>
							<dd>$date</dd>
							<dd>$data[3] ($data[6])</dd>
							<dd>"; 
								if($data[4] <> "") echo "Main Page 1장"; 
								if($data[5] <> "") echo ", Sub Page $data[5] 장";
						echo"</dd>
							<dd>$data[7]</dd>
							<dd>$data[8]</dd>
						</dl>
						<ul class='link'>";
							//모바일인 경우
							if(substr($data[1], 0, 2) == "m_" && $data[1] <> "m_gjmu") echo "<li><a href='javascript: void(0);' onClick='window.open(\"http://hhj171258.dothome.co.kr/$data[1]\", \"_blank\", \"width=320, height=640\")'>";
							else if($data[1] == "m_gjmu") echo "<li><a href='javascript: void(0);' onClick='window.open(\"http://hhj171258.dothome.co.kr/$data[1]\", \"_blank\", \"width=720, height=1080\")'>";
							else echo "<li><a href='http://hhj171258.dothome.co.kr/$data[1]' target='_blank'>";
							//리뉴얼인 경우
							if($data[9] == "") echo "Site</a></li>";
							else
								{
									echo "Renewal</a></li>
										<li><a href='$data[9]' target='_blank'>Original</a></li>";
								}

							echo "<li><a href='http://github.com/hhj171258/$data[1]' target='_blank'>Git Source</a></li>
						</ul>";
						if($data[13] <> "") echo "<article class='bref'><h4>Brefing</h4><p>$data[13]<p></article>";
						if($data[14] <> "")
						{
							echo "<article class='prst'>
							<h4>Presentation: 기획서</h4>";
									for($i = 1; $i <= $data[14]; $i++){
										echo "<div><img src='/port/images/modal/img_prst_$data[1]_$i.jpg' alt=''></div>";
									}
							echo "</article>";
						}
						if($data[15] <> "") echo "<article class='rviw'><h4>Review</h4><p>$data[15]<p></article>";
						if($data[14] <> "")
						{
							echo "<ul class='link'>";
							//모바일인 경우
							if(substr($data[1], 0, 2) == "m_") echo "<li><a href='javascript: void(0);' onClick='window.open(\"http://hhj171258.dothome.co.kr/$data[1]\", \"_blank\", \"width=320, height=640\")'>";
							else echo "<li><a href='http://hhj171258.dothome.co.kr/$data[1]' target='_blank'>";
							//리뉴얼인 경우
							if($data[9] == "") echo "Site</a></li>";
							else
								{
									echo "Renewal</a></li>
										<li><a href='$data[9]' target='_blank'>Original</a></li>";
								}

							echo "<li><a href='http://hhj171258.github.io/$data[1]' target='_blank'>Git Source</a></li>
							</ul>";
						}
				echo "</div>
			</section>";
		}
	?>
<!--// work modal: made by php -->