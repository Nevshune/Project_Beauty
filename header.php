<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <!-- 폰트어썸 -->
  <script src="https://kit.fontawesome.com/1821147619.js" crossorigin="anonymous"></script>
  <!-- sweet Alert -->
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script>



  <!-- sweet alert -->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

<!-- aos -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<!-- aos js -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

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


</head>

<body class=" relative transition-all duration-100  font-[GmarketSansMedium] min-w-[370px]">