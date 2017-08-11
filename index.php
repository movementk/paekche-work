<<<<<<< HEAD
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body>
    <link href="/assets/css/main.css" rel="stylesheet">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- Content 시작 -->
    <main id="content">
        <!-- 비주얼 슬라이드 영역  -->
        <div class="jumbotron">
            <ul class="visual-slider">
                <li class="visual-bg1"></li>
                <li class="visual-bg2"></li>
                <li class="visual-bg3"></li>
                <li class="visual-bg4"></li>
                <li class="visual-bg5"></li>
                <li class="visual-bg6"></li>
            </ul>
            <div class="slogan">
                <h1>이제 당신이 <strong>주인공</strong> 입니다.</h1>
            </div>
        </div>
        <!-- 채용정보 & 공지사항 -->
        <div class="bulletin-board">
            <div class="container">
                <div class="recruiting">
                    <h2 class="borad-title">
                        채용정보
                        <a href="#" class="btn-more">
                            <img src="/assets/images/main/more_btn_icon.png" alt="">
                        </a>
                    </h2>
                    <ul>
                        <li>
                            <a href="#">2016학년도 GHU 콜로키움(교수법 연구조직) 공모 안내</a>
                            <span class="date">2016-07-21</span>
                        </li>
                        <li>
                            <a href="#">2016학년도 전공기초향상프로그램 모집 안내</a>
                            <span class="date">2016-07-21</span>
                        </li>
                        <li>
                            <a href="#">2016학년도 캡스톤 디자인 프로그램 공모 안내</a>
                            <span class="date">2016-07-21</span>
                        </li>
                        <li>
                            <a href="#">2016학년도 1학기 수업중간점검 신청 안내</a>
                            <span class="date">2016-07-21</span>
                        </li>
                    </ul>
                </div>
                <div class="notice">
                    <h2 class="borad-title">
                        공지사항
                        <a href="#" class="btn-more">
                            <img src="/assets/images/main/more_btn_icon.png" alt="">
                        </a>
                    </h2>
                    <ul>
                        <li>
                            <a href="#">2016학년도 GHU 콜로키움(교수법 연구조직) 공모 안내</a>
                            <span class="date">2016-07-21</span>
                        </li>
                        <li>
                            <a href="#">2016학년도 전공기초향상프로그램 모집 안내</a>
                            <span class="date">2016-07-21</span>
                        </li>
                        <li>
                            <a href="#">2016학년도 캡스톤 디자인 프로그램 공모 안내</a>
                            <span class="date">2016-07-21</span>
                        </li>
                        <li>
                            <a href="#">2016학년도 1학기 수업중간점검 신청 안내</a>
                            <span class="date">2016-07-21</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <nav id="quick-nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="box program">
                        <h3>취·창업 지원<br>프로그램 소개</h3>
                        <p>자기 개발 및 경력개발을 향상시켜 <br>현장 실무형 전문인력을 양성</p>
                        <a href="#" class="btn-quick" role="button">바로가기</a>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="box guide-book">
                        <h3>e-가이드북</h3>
                        <p>취업에 관해서 어려움이 있다면 <br>언제든지 오십시오</p>
                        <a href="#" class="btn-quick" role="button">바로가기</a>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="box site-link">
                        <h3>주요 사이트 링크</h3>
                        <p>문확·예술 관련 사이트로 <br>연결해 드립니다.</p>
                        <a href="#" class="btn-quick" role="button">바로가기</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="/assets/bxslider/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.visual-slider').bxSlider({
                auto: true,
                controls: false
            });
        });
    </script>
</body>
</html>
=======
html.work.paekche.ac.kr
>>>>>>> 9b8cd761a701902a88672afb1ebd6e987a1ae0c9
