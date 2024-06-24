<!DOCTYPE html>
<html lang="en" class=" scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }

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
  <!-- Tailwind end -->

  <title>메인</title>
</head>

<body class="relative">