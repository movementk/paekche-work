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
            <section class="recruitment-view">
                <div class="section-header">
                    <h3 class="section-title">채용정보</h3>
                    <p class="section-summary">
                        <i>백제예술대학교 취 · 창업지원실</i>은<br>
                        문화·예술 분야 교육을 통해 대학의 특성화 및 교육의 질 향상을 지원합니다.
                    </p>
                </div>
                <div class="section-content">
                    <div class="board-view">
                        <div class="view-header">
                            <h4 class="subject">2015년 특성화전문대학육성사업 우수성과 사례로 백제예술대학 선정</h4>
                            <div class="drafter-infor">
                                <ul>
                                    <li>
                                        <dl>
                                            <dt>작성자</dt>
                                            <dd>홍길동</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>작성일</dt>
                                            <dd>2016-07-20</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>조회수</dt>
                                            <dd>1,000</dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                            <dl class="attachment">
                                <dt>첨부파일</dt>
                                <dd><a href="#">abcd.hwp</a><a href="#">abcd.hwp</a><a href="#">abcd.hwp</a><a href="#">abcd.hwp</a></dd>
                            </dl>
                        </div>
                        <div class="view-content">
                            게시판 내용
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="/recruitment_list.php" class="btn btn-red" role="button">목록</a>
                            </p>
                        </div>
                    </div>
                    <div class="comment-area">
                        <div class="comment-write">
                            <form action="#">
                                <h5 class="title">COMMENT</h5>
                                <div class="form-group">
                                    <label>이름 <input type="text" class="form-control"></label>
                                    <label>패스워드 <input type="password" class="form-control"></label>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <button type="submit" class="btn btn-gray">글쓰기</button>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <div class="comment-list">
                            <ul>
                                <li>
                                    <p class="user-name">홍길동111 <span class="date">(2016-03-27 오후 6:00:00)</span></p>
                                    <p class="comment-content">
                                        댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.
                                    </p>
                                    <div class="btn-area">
                                        <p>
                                            <a href="" class="btn btn-modify" role="button">
                                                <i class="icon-pencil-alt">
                                                    <span class="sr-only">수정하기</span>
                                                </i>
                                            </a>
                                            <a href="" class="btn btn-delete" role="button">
                                                <i class="icon-trash">
                                                    <span class="sr-only">삭제하기</span>
                                                </i>
                                            </a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <p class="user-name">홍길동111 <span class="date">(2016-03-27 오후 6:00:00)</span></p>
                                    <p class="comment-content">
                                        댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.
                                    </p>
                                    <div class="btn-area">
                                        <p>
                                            <a href="" class="btn btn-modify" role="button">
                                                <i class="icon-pencil-alt">
                                                    <span class="sr-only">수정하기</span>
                                                </i>
                                            </a>
                                            <a href="" class="btn btn-delete" role="button">
                                                <i class="icon-trash">
                                                    <span class="sr-only">삭제하기</span>
                                                </i>
                                            </a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>