<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <nav class="not-home nav-home grey">

<!--     <div class="menu-svg">
      <svg viewBox="0 0 60 16">
          <g transform="translate(-44.000000, -891.000000)" stroke-width="4">
              <g id="menu" transform="translate(46.000000, 891.000000)">
                  <path d="M0.5,2 L55.5,2" id="Line"></path>
                  <path d="M0.5,14 L55.5,14" id="Line"></path>
              </g>
          </g>
      </svg>
    </div> -->
    <div class="svg-logo">
      <a href=<?php echo home_url(); ?>>     
      <svg viewBox="0 0 545 85" fill="#FFFFFF">
          <path d="M0.940233308,1.23852666 L24.3023552,1.23852666 C36.0416953,1.23852666 44.8798121,5.24727795 44.8798121,14.4409272 C44.8798121,22.5200081 38.2848362,27.1999636 22.5686974,27.1999636 L10.3198742,27.1999636 L10.3198742,41.4615119 L0.940233308,41.4615119 L0.940233308,1.23852666 Z M10.3198742,19.4226166 L19.6603979,19.4226166 C25.3850068,19.4226166 29.2273586,18.3080483 29.2273586,14.299297 C29.2273586,10.8447509 26.2553738,9.06513632 20.8208873,9.06513632 L10.3198742,9.06513632 L10.3198742,19.4226166 Z" id="Shape"></path>
          <path d="M53.9868227,1.23852666 L85.6667658,1.23852666 C98.1632544,1.23852666 105.27479,4.74849323 105.27479,11.7684264 C105.27479,16.891746 99.8898361,20.4571331 92.1272947,21.5162809 L92.1272947,21.6271219 C96.5074343,21.848804 100.61868,22.6308492 102.324033,25.1370885 C104.836068,28.8317901 105.154495,37.2803412 107.277341,41.4615119 L91.2356993,41.4615119 C89.5798792,37.5636017 89.8204684,31.7690779 88.3627806,28.9795782 C87.4287282,27.1322274 85.1289781,26.1962363 79.1000946,26.1962363 L69.0731838,26.1962363 L69.0731838,41.4615119 L53.9868227,41.4615119 L53.9868227,1.23852666 Z M69.0661077,18.394258 L81.0955701,18.394258 C87.9877444,18.394258 90.2167331,16.7193266 90.2167331,13.658882 C90.2167331,9.76097179 86.2682389,9.03434714 79.0081046,9.03434714 L69.1014885,9.03434714 L69.1014885,18.394258 L69.0661077,18.394258 Z" id="Shape"></path>
          <path d="M147.993533,0.179378858 C171.012264,0.179378858 180.699519,9.20676655 180.699519,21.3500193 C180.699519,33.493272 171.01934,42.5206597 147.993533,42.5206597 C124.967727,42.5206597 115.294624,33.493272 115.294624,21.3500193 C115.294624,9.20676655 124.967727,0.179378858 147.993533,0.179378858 Z M147.993533,34.2753172 C160.185747,34.2753172 164.233308,28.4253729 164.233308,21.3438615 C164.233308,14.26235 160.192824,8.41240569 147.993533,8.41240569 C135.794243,8.41240569 131.753759,14.26235 131.753759,21.3438615 C131.753759,28.4253729 135.815472,34.2753172 147.993533,34.2753172 Z" id="Shape"></path>
          <polygon id="Shape" points="203.003557 20.5125536 183.154944 1.23852666 200.887787 1.23852666 212.542213 14.0529835 223.934822 1.23852666 239.941083 1.23852666 220.09247 20.5125536 241.540294 41.4615119 223.361653 41.4615119 210.74487 27.4216457 198.198849 41.4615119 181.683104 41.4615119"></polygon>
          <rect id="Rectangle-path" x="249.720328" y="1.23852666" width="13.4376171" height="40.2229853"></rect>
          <polygon id="Shape" points="276.30544 1.23852666 294.668061 1.23852666 306.73998 31.0978738 319.49121 1.23852666 337.231129 1.23852666 337.231129 41.4615119 326.008349 41.4615119 326.008349 8.70798182 325.89513 8.70798182 312.351371 41.4615119 300.109624 41.4615119 286.509255 8.70798182 286.396037 8.70798182 286.396037 41.4615119 276.30544 41.4615119"></polygon>
          <rect id="Rectangle-path" x="349.586095" y="1.23852666" width="13.4446933" height="40.2229853"></rect>
          <polygon id="Shape" points="388.681848 9.48386917 370.892396 9.48386917 370.892396 1.23852666 419.923069 1.23852666 419.923069 9.48386917 402.126541 9.48386917 402.126541 41.4615119 388.681848 41.4615119"></polygon>
          <polygon id="Shape" points="432.454939 27.144543 411.651045 1.23852666 428.166789 1.23852666 440.005195 18.394258 451.723307 1.23852666 466.703526 1.23852666 445.899632 27.144543 445.899632 41.4615119 432.454939 41.4615119"></polygon>
          <polygon id="Shape" points="432.454939 27.144543 411.651045 1.23852666 428.166789 1.23852666 440.005195 18.394258 451.723307 1.23852666 466.703526 1.23852666 445.899632 27.144543 445.899632 41.4615119 432.454939 41.4615119"></polygon>
          <polygon id="Shape" points="446.699237 84.5909958 446.699237 64.2701367 460.547271 64.2701367 460.547271 66.6901663 449.93304 66.6901663 449.93304 73.0820002 459.903341 73.0820002 459.903341 75.5020297 449.93304 75.5020297 449.93304 84.5971536 446.699237 84.5971536"></polygon>
          <polygon id="Shape" points="466.979496 84.5909958 466.979496 64.2701367 470.213298 64.2701367 470.213298 84.5909958"></polygon>
          <polygon id="Shape" points="478.117363 84.5909958 478.117363 64.2701367 481.351165 64.2701367 481.351165 82.1709662 492.227215 82.1709662 492.227215 84.5909958"></polygon>
          <polygon id="Shape" points="518.302843 66.289907 518.239158 66.289907 510.759663 84.5909958 507.723993 84.5909958 500.237421 66.289907 500.173736 66.289907 500.173736 84.5909958 496.939933 84.5909958 496.939933 64.2701367 502.728228 64.2701367 509.436422 81.0009774 509.507183 81.0009774 516.109235 64.2455054 521.508341 64.2455054 521.508341 84.5663645 518.274539 84.5663645 518.274539 66.289907"></polygon>
          <path d="M530.537514,78.6548418 C530.6012,81.5243934 532.511761,82.5958569 535.653574,82.5958569 C538.307132,82.5958569 541.540934,81.9184949 541.540934,79.0735747 C541.540934,77.1030671 539.658677,76.2840749 537.726887,75.9453939 C533.870383,75.2126115 527.466463,74.4551976 527.466463,69.8922411 C527.466463,65.4709148 532.094268,63.8390882 536.467332,63.8390882 C540.44413,63.8390882 544.357244,65.3847051 544.357244,69.3257202 L540.96069,69.3257202 C540.826243,67.0473208 538.632635,66.2468021 536.297504,66.2468021 C533.962373,66.2468021 530.863017,66.9795846 530.863017,69.3996142 C530.863017,71.7088027 532.738198,71.8627486 534.776131,72.410796 C539.078433,73.6423633 544.937488,73.6423633 544.937488,78.7472094 C544.937488,83.3655864 540.182313,84.997413 535.462518,84.997413 C530.579971,84.997413 527.013589,83.193167 527.14096,78.6363683 L530.54459,78.6363683 L530.537514,78.6548418 Z" id="Shape"></path>
      </svg>
      </a>
    </div>
    <div class="menu-main">
      <?php wp_nav_menu(); ?>
    </div>
  </nav>
</header><!--/.header-->
