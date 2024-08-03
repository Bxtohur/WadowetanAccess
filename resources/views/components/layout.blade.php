<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet">
  <style>
    .slick-prev,
    .slick-next {
      z-index: 1;
      top: 50%;
      transform: translateY(-50%);
    }

    .slick-prev {
      left: 10px;
    }

    .slick-next {
      right: 30px;
    }

    .slick-prev:before,
    .slick-next:before {
      color: #fff;
      font-size: 40px;
    }

    .slick-dots li button:before {
      color: #048BD8;
      font-size: 12px;
    }

    .slick-dots li.slick-active button:before {
      color: #048BD8;
    }

    body::-webkit-scrollbar {
      display: none;
    }
  </style>
  <title>Desa Wadowetan</title>
</head>

<body class="bg-white text-gray-900">
  <x-navbar></x-navbar>
  <div class="container mx-auto py-24 px-5 mt-48">
    {{ $slot }}
  </div>
  <x-footer></x-footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.carousel').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000,
      });
    });
  </script>
</body>

</html>
