<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- Content 시작 -->
    <main id="content">
        <div class="page-header">
            <div class="sub-visual">
                <div class="container">
                    <h2 class="sub-title">
                        <small>취업 및 창업으로 재학생을 지원하는</small><br>
                        취·창업 지원실
                    </h2>
                </div>
            </div>
            <div class="page-path">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                        <li class="active">취 · 창업지원실 소개</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container">
            <section class="pw-confirm">
                <div class="section-header">
                    <h3 class="section-title">채용정보</h3>
                    <p class="section-summary">
                        <i>백제예술대학교 NCS지원센터</i>는<br>
                        문화·예술 분야 교육을 통해 대학의 특성화 및 교육의 질 향상을 지원합니다.
                    </p>
                </div>
                <div class="section-content">
                    <h4>비밀번호를 입력해주세요</h4>
                    <small>게시글 작성시 입력하셨던 비밀번호를 입력해주세요</small>
                    <form action="#">
                        <div class="form-group">
                            <input type="password" id="u-pw" class="form-control">
                            <label for="u-pw" class="sr-only">비밀번호 확인</label>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="/recruitment_view.php" class="btn btn-black" role="button">확인</a>
                                <!--button type="submit" class="btn btn-black">확인</button-->
                            </p>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>