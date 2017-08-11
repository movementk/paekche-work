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
            <section class="recruitment-write">
                <div class="section-header">
                    <h3 class="section-title">채용정보</h3>
                    <p class="section-summary">
                        <i>백제예술대학교 취 · 창업지원실</i>은<br>
                        문화·예술 분야 교육을 통해 대학의 특성화 및 교육의 질 향상을 지원합니다.
                    </p>
                </div>
                <div class="section-content">
                    <div class="board-write">
                        <form action="#">
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 200px">
                                        <col style="width: 385px">
                                        <col style="width: 200px">
                                        <col style="width: 385px">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th><label for="u-name">작성자</label></th>
                                            <td colspan="3">
                                                <div class="form-group">
                                                    <input type="text" id="u-name" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-pw">비밀번호</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="password" id="u-pw" class="form-control">
                                                </div>
                                            </td>
                                            <td class="test">공개여부</td>
                                            <td>
                                                <div class="form-group">
                                                    <label><input type="radio">공개</label>
                                                    <label><input type="radio">비공개</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="subject">제목</label></th>
                                            <td colspan="3" class="subject">
                                                <div class="form-group">
                                                    <input type="text" id="subject" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="content">
                                                <div class="form-group">
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>첨부파일</th>
                                            <td colspan="3" class="attach">
                                                <div class="form-group">
                                                    <input type="file" id="attach" class="form-control">
                                                </div>
                                                <label class="btn-file" for="attach">찾아보기</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-red">글쓰기</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>