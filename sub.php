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
                        <li><a href="#">커뮤니티</a></li>
                        <li class="active">공지사항</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container">
            <section>
                <div class="section-header">
                    <h3 class="section-title">취 · 창업지원실 소개</h3>
                    <p class="section-summary">
                        <i>백제예술대학교 취 · 창업지원실</i>에서는 학생들의 활발한<br>
                        Art Work 및 취 · 창업활성화를 위한 각종 프로그램 운영과 지원 그리고 이에 대한 제반 업무를 담당하고 있습니다.
                    </p>
                </div>
                <div class="section-content">
                    
                    <!-- 제목 -->
                    <h4 class="sub-title">Art Work란?</h4>
                    <h5 class="content-title">Art Work의 개념</h5>
                    
                    <!-- 검색폼 -->
                    <div class="search-area">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>제목</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="serarch" class="form-control">
                                <label for="serarch" class="sr-only">검색하기</label>
                                <p class=" btn-search">
                                    <button type="submit" class="btn">검색</button>
                                </p>
                            </div>
                        </form>
                    </div>
                    
                    <br><br>
                    
                    <!-- 버튼 목록 -->
                    <div class="btn-area">
                        <p>
                            <a href="" class="btn btn-red" role="button">목록</a>
                            <a href="" class="btn btn-black" role="button">댓글달기</a>
                            <button type="submit" class="btn btn-gray">글쓰기</button>
                        </p>
                    </div>
                    
                    <br><br>
                    
                    <!-- pagination -->
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">10</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    
                    <br><br>
                    
                    <!-- 리스트 항목 -->
                    <ul class="angle-list">
                        <li>
                            <h6 class="angle-title">취업 특강 실시</h6>
                            <p class="dot">전공분야 전문가 및 졸업생을 초청하여 직무역량 강화 및 멘토링 특강 실시</p>
                        </li>
                        <li>
                            <h6 class="angle-title">자격증 취득 지원</h6>
                            <p class="dot">전공관련 자격증 취득을 위한 자격증 취득 지원반 운영</p>
                        </li>
                        <li>
                            <h6 class="angle-title">외부오디션 유치</h6>
                            <p class="dot"><b>슈퍼스타K, K-POP과 같은 외부 오디션 대회 및 FNC, DSP, 나무엑터스와 같은 대형기획사 오디션 교내 유치</b></p>
                        </li>
                    </ul>
                    
                    <br><br>
                    
                    <!-- 테이블 -->
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>파일</th>
                                    <th>작성자</th>
                                    <th>작성일</th>
                                    <th>조회</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td class="title">
                                        <a href="#">
                                            NCS기반 교육과정 가이드 라인 개정판
                                            <i class="lock"><span class="sr-only">비밀글</span></i>
                                        </a>
                                    </td>
                                    <td><i class="file"><span class="sr-only">첨부파일</span></i></td>
                                    <td>홍길동</td>
                                    <td>201607-20</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="title">
                                        <a href="#">NCS기반 교육과정 가이드 라인 개정판</a>
                                    </td>
                                    <td></td>
                                    <td>홍길동</td>
                                    <td>201607-20</td>
                                    <td>10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>