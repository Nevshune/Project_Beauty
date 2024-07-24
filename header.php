<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 메타 키워드 (Meta Keywords, 덜 중요하지만 참고) -->
  <meta name="keywords" content="피부 미용, 미용 국비자격시험, 피부 미용 전문교육기관, 뷰티아카데미, 미용사 국가자격취득, 피부 국가자격증 취득, 피부국가자격증, 페이스실무살롱테크닉, 페이스, 얼굴윤곽축소테크닉, 얼굴윤곽, 전신살롱, 아로마, 아로마풋케어, 풋, 케어, 발 관리, 왁싱, 스킨아트, 창업컨설팅, 국제뷰티 EXPO 기능대회 "> 
  <title><?php echo $title; ?></title>
  <!-- 폰트어썸 -->
  <script src="https://kit.fontawesome.com/1821147619.js" crossorigin="anonymous"></script>
  <!-- sweet Alert -->
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script>
  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <!-- aos js -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <link rel="icon" href="./src/icon/favicon2.ico">
  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    /* 웹폰트 */
    @font-face {
    font-family: 'GmarketSansMedium';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansMedium.woff') format('woff');
    font-weight: normal;
    font-style: normal;
     }  

    @font-face {
    font-family: 'NanumSquareRound';
    src: url('https://fastly.jsdelivr.net/gh/projectnoonnu/noonfonts_two@1.0/NanumSquareRound.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    }

    @font-face {
      font-family: 'AppleSDGothicNeo';
      src: url('./font/AppleSDGothicNeoT.ttf') format('truetype');
      font-weight: 100;
      font-style: normal;
    }

    @font-face {
      font-family: 'AppleSDGothicNeo';
      src: url('./font/AppleSDGothicNeoUL.ttf') format('truetype');
      font-weight: 300;
      font-style: normal;
    }

    @font-face {
      font-family: 'AppleSDGothicNeo';
      src: url('./font/AppleSDGothicNeoR.ttf') format('truetype');
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: 'AppleSDGothicNeo';
      src: url('./font/AppleSDGothicNeoM.ttf') format('truetype');
      font-weight: 500;
      font-style: normal;
    }

    @font-face {
      font-family: 'AppleSDGothicNeo';
      src: url('./font/AppleSDGothicNeoSB.ttf') format('truetype');
      font-weight: 600;
      font-style: normal;
    }

    @font-face {
      font-family: 'AppleSDGothicNeo';
      src: url('./font/AppleSDGothicNeoB.ttf') format('truetype');
      font-weight: 700;
      font-style: normal;
    }

    @font-face {
      font-family: 'AppleSDGothicNeo';
      src: url('./font/AppleSDGothicNeoEB.ttf') format('truetype');
      font-weight: 800;
      font-style: normal;
    }

    @font-face {
      font-family: 'AppleSDGothicNeo';
      src: url('./font/AppleSDGothicNeoH.ttf') format('truetype');
      font-weight: 900;
      font-style: normal;
    }
  </style>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
  <!-- Tailwind end -->

  <style>
    /* select 요소의 옵션에 round 클래스 제거 */
    select option {
      border-radius: 0 !important;
      /* 테두리의 모서리를 제거합니다. */
    }
  </style>

  <!-- Swiper CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Swiper CDN End -->

  <!-- Flowbite CDN  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <!-- Flowbite CDN end -->

  <!-- custom list marker -->
  <style>
    .custom-list {
      @apply list-none;
      /* 기본 리스트 스타일 제거 */
    }

    .custom-list li {
      @apply relative;
      /* 상대 위치 설정 */
    }

    .custom-list li::before {
      content: '■';
      /* 커스텀 사각형 기호 */
      color: #0124A2;
      /* 사각형 색상 설정 */
      @apply absolute left-0 text-lg leading-none;
      /* Tailwind CSS 적용 */
      transform: translateY(0.1em);
      /* 사각형 위치 조정 */
    }

    .custom-list_2 {
      @apply list-none;
      /* 기본 리스트 스타일 제거 */
    }

    .custom-list_2 li {
      @apply relative pl-6;
      /* 상대 위치 설정 및 패딩 추가 */
    }

    .custom-list_2 li::before {
      content: '●';
      /* 커스텀 원형 기호 */
      color: #999999;
      /* 원형 색상 설정 */
      @apply absolute left-0 text-lg leading-none;
      /* Tailwind CSS 적용 */
      font-size: 0.75rem;
      /* 원형 크기 조정 */
      transform: translateY(0.1em);
      /* 원형 위치 조정 */
    }

    .custom-list_3 {
      @apply list-none;
      /* 기본 리스트 스타일 제거 */
    }

    .custom-list_3 li {
      @apply relative pl-6;
      /* 상대 위치 설정 및 패딩 추가 */
    }

    .custom-list_3 li::before {
      content: '●';
      /* 커스텀 원형 기호 */
      color: #73AFF6;
      /* 원형 색상 설정 */
      @apply absolute left-0 text-lg leading-none;
      /* Tailwind CSS 적용 */
      font-size: 0.75rem;
      /* 원형 크기 조정 */
      transform: translateY(0.1em);
      /* 원형 위치 조정 */
    }
  </style>


</head>

<body class=" relative transition-all duration-100 font-[AppleSDGothicNeo] min-w-[370px]">