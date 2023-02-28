<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head
    prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo get_ogp_type();?>: http://ogp.me/ns/<?php echo get_ogp_type();?>#">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.defer = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?php echo get_vars('site', 'gtm');?>'
        );
    </script>
    <!-- End Google Tag Manager -->
    <meta
        charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <link rel="preload"
        href="<?php echo get_template_directory_uri();?>/fonts/Damion-Regular.woff2"
        as="font" type="font/woff2" crossorigin />
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
            src="https://www.googletagmanager.com/ns.html?id=<?php echo get_vars('site', 'gtm');?>"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="o-container o-container:header">
        <div class="c-header-left">
            <button type="button" aria-label="menu open" aria-controls="sidebar" aria-expanded="false"
                class="c-menu-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"
                        fill="currentColor" />
                </svg>
            </button>
            <a class="c-header-logo" href="<?php echo home_url();?>">
                <svg width="25" height="32" viewBox="0 0 25 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.9269 1.76758C17.0291 2.5492 15.152 3.33082 13.3409 4.23102C11.5326 5.10454 9.80704 6.14432 8.18579 7.33733C6.57735 8.50783 5.18303 9.95466 4.06583 11.6125C3.5185 12.4514 3.0702 13.3526 2.73015 14.2977C2.55854 14.7763 2.4136 15.2642 2.29604 15.7593C2.23561 16.0086 2.18474 16.2594 2.13704 16.5135C2.08934 16.7676 2.05117 17.0225 2.01301 17.2798C1.98995 17.0209 1.982 16.7603 1.97882 16.499C1.97564 16.2376 1.98836 15.9763 2.00585 15.7142C2.04237 15.188 2.11812 14.6654 2.23244 14.1509C2.46598 13.1112 2.84453 12.1106 3.35665 11.1793C3.87175 10.2466 4.49528 9.38004 5.21389 8.59809C5.57007 8.20607 5.9485 7.83664 6.33887 7.48172C6.72924 7.1268 7.1395 6.79689 7.5577 6.47989C9.23822 5.24105 11.0696 4.22787 13.0062 3.46552C14.9179 2.69718 16.9017 2.12827 18.9269 1.76758Z"
                        fill="currentColor" />
                    <path
                        d="M4.41878 15.9819C-0.113018 21.5476 11.3421 31.9636 13.2526 24.4579C14.4452 19.3697 8.95533 11.6173 3.94412 16.2223"
                        fill="currentColor" />
                    <path
                        d="M1.77523 23.1698C1.7323 23.4868 1.67348 23.799 1.61624 24.1095L1.43892 25.0363C1.32205 25.651 1.20836 26.2608 1.12091 26.8674C1.02988 27.4573 0.987327 28.0538 0.993694 28.6508C0.997999 28.9255 1.03159 29.199 1.09388 29.4663C1.12239 29.5858 1.16151 29.7025 1.21075 29.8148C1.22268 29.8406 1.2354 29.8672 1.24812 29.8955L1.26799 29.9317L1.29582 29.9801C1.32285 30.0253 1.35784 30.0802 1.39282 30.127C1.53402 30.3226 1.71279 30.4872 1.91836 30.6109C2.14096 30.747 2.38204 30.8492 2.6339 30.9142C3.19057 31.0524 3.76336 31.1121 4.3361 31.0917C4.94007 31.077 5.5428 31.029 6.14166 30.9481C6.44616 30.9102 6.75147 30.8674 7.05836 30.8207C7.36525 30.7739 7.67293 30.7263 7.98538 30.6835C7.71029 30.8392 7.42885 30.9779 7.13945 31.1062C6.85005 31.2344 6.55828 31.3482 6.26013 31.4579C5.65745 31.6737 5.03579 31.8307 4.40367 31.9265C4.24466 31.9491 4.08089 31.9677 3.9179 31.9814C3.75491 31.9951 3.58956 31.9999 3.42259 31.9999C3.08191 32.002 2.74193 31.9682 2.40811 31.8991C2.05382 31.8258 1.7129 31.6971 1.39758 31.5176C1.06747 31.3241 0.780091 31.0638 0.553247 30.7529C0.496096 30.6734 0.443012 30.5911 0.394227 30.5061L0.360841 30.4464L0.325854 30.3794C0.302797 30.3351 0.282136 30.2899 0.26226 30.2447C0.186645 30.0696 0.128565 29.8872 0.088925 29.7003C0.0188225 29.3533 -0.0100067 28.9991 0.00305806 28.6452C0.0143107 28.3105 0.0491261 27.977 0.107219 27.6474C0.161283 27.3247 0.235216 27.0021 0.318696 26.6932C0.666712 25.465 1.15557 24.2824 1.77523 23.1698Z"
                        fill="currentColor" />
                    <path
                        d="M8.23657 11.9948C8.48145 11.7522 8.74756 11.5327 9.03162 11.339C9.31857 11.1452 9.61911 10.9729 9.93084 10.8236C10.5597 10.5267 11.2214 10.3073 11.9018 10.1702C13.2712 9.90084 14.6759 9.87138 16.0551 10.0831C16.7474 10.1847 17.4307 10.3419 18.0984 10.5534C18.7713 10.7637 19.4247 11.0336 20.0511 11.36C20.6855 11.6904 21.2831 12.089 21.8335 12.549C22.3944 13.0183 22.8867 13.5661 23.2957 14.1759C23.4995 14.4866 23.6767 14.8145 23.8251 15.156C24.2796 16.1934 24.4245 17.3432 24.2418 18.4632C24.1225 19.1899 23.8946 19.8938 23.566 20.5507C23.4068 20.8738 23.2289 21.1871 23.0333 21.4888C22.8382 21.7872 22.6286 22.0756 22.4052 22.3527C21.5143 23.4405 20.4524 24.3715 19.2624 25.1081C18.6765 25.4751 18.0614 25.7916 17.4234 26.0543C17.1054 26.1834 16.7818 26.2963 16.4542 26.3988C16.1271 26.4963 15.7944 26.5736 15.458 26.6303C16.7227 26.1686 17.9084 25.5092 18.9721 24.6758C20.0307 23.8731 20.9682 22.9179 21.7548 21.8405C21.9464 21.5735 22.1253 21.2977 22.2883 21.0153C22.4523 20.7353 22.6004 20.4461 22.7319 20.149C22.9937 19.5674 23.171 18.9504 23.2583 18.3172C23.3846 17.388 23.2516 16.4414 22.8743 15.5851C22.7475 15.2987 22.597 15.0237 22.4243 14.7632C22.0726 14.2342 21.6498 13.7577 21.1681 13.3475C20.6788 12.9262 20.1484 12.5568 19.5852 12.2449C17.2576 10.9785 14.6146 10.4338 11.9844 10.6784C11.3243 10.746 10.673 10.8839 10.0413 11.0898C9.72379 11.1945 9.41401 11.322 9.11431 11.4713C8.80841 11.6218 8.51489 11.7968 8.23657 11.9948Z"
                        fill="currentColor" />
                    <path
                        d="M14.6861 29.7841C14.638 29.7789 14.5902 29.7711 14.543 29.7607C14.4977 29.7486 14.4523 29.7365 14.407 29.7228C14.3182 29.6945 14.2318 29.6589 14.1486 29.6163C14.0628 29.4776 13.9769 29.3413 13.9038 29.1993C13.7619 28.9226 13.6356 28.6379 13.5253 28.3467C13.4148 28.0644 13.3122 27.7877 13.1961 27.5304C13.1401 27.4049 13.0772 27.2826 13.0077 27.1642C13.0133 27.0835 13.0157 27.0029 13.0181 26.9125C13.0181 26.8681 13.0181 26.8246 13.0181 26.7794C13.0181 26.7343 13.0181 26.6875 13.0181 26.6375C13.0657 26.6441 13.113 26.6535 13.1596 26.6657C13.2049 26.6786 13.2494 26.6939 13.2948 26.7109C13.383 26.7449 13.4683 26.7862 13.55 26.8343C13.6318 26.9733 13.7058 27.1168 13.7718 27.2642C13.9014 27.5514 14.0063 27.8369 14.1145 28.1112C14.2159 28.38 14.3321 28.6429 14.4627 28.8984C14.5251 29.021 14.5966 29.1386 14.6765 29.2501L14.6813 29.505L14.6861 29.7841Z"
                        fill="currentColor" />
                    <path
                        d="M11.5838 28.087C11.6236 28.0991 11.6577 28.1144 11.6943 28.1273L11.7945 28.1668C11.8612 28.1926 11.9217 28.2193 11.9805 28.2475C12.0091 28.337 12.0513 28.4217 12.0886 28.5096C12.1681 28.6839 12.2532 28.8589 12.3399 29.0372C12.4266 29.2154 12.5164 29.3961 12.6007 29.5833C12.6428 29.6768 12.6841 29.772 12.7231 29.8688C12.6763 30.0104 12.6131 30.1458 12.5347 30.2721C12.3836 30.2189 12.2636 30.164 12.1371 30.1108C12.1022 30.0237 12.064 29.9366 12.0251 29.8495C11.9455 29.6752 11.8597 29.4994 11.7722 29.3219C11.6848 29.1445 11.5957 28.9622 11.5115 28.775C11.4677 28.6815 11.4319 28.5847 11.3866 28.4895C11.4087 28.4214 11.4353 28.3548 11.4661 28.2902L11.5162 28.1894C11.5417 28.1539 11.5592 28.1217 11.5838 28.087Z"
                        fill="currentColor" />
                    <path
                        d="M20.2498 1.27551C21.4424 -0.418406 23.8276 -0.660393 23.5891 2.00147C22.935 2.27835 22.2103 2.33371 21.5228 2.15932C20.8352 1.98493 20.2215 1.5901 19.7728 1.03352"
                        fill="currentColor" />
                </svg>
            </a>
        </div>
        <form class="c-header-right" method="get"
            action="<?php echo home_url();?>" role="search">
            <input class="c-search" name="s" id="s" type="text" placeholder="キーワードを入力" />
            <label class="c-search__label" for="s">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"
                        fill="currentColor" />
                </svg>
            </label>
        </form>
    </header>
    <aside id="sidebar" class="c-sidebar" aria-hidden="true" tabindex="-1">
        <header class="o-container o-container:header">
            <div class="c-header-left">
                <button type="button" aria-label="menu open" aria-controls="sidebar" aria-expanded="false"
                    class="c-menu-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"
                            fill="currentColor" />
                    </svg>
                </button>
                <a class="c-header-logo"
                    href="<?php echo home_url();?>"
                    aria-label="トップページへ">
                    <svg width="25" height="32" viewBox="0 0 25 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.9269 1.76758C17.0291 2.5492 15.152 3.33082 13.3409 4.23102C11.5326 5.10454 9.80704 6.14432 8.18579 7.33733C6.57735 8.50783 5.18303 9.95466 4.06583 11.6125C3.5185 12.4514 3.0702 13.3526 2.73015 14.2977C2.55854 14.7763 2.4136 15.2642 2.29604 15.7593C2.23561 16.0086 2.18474 16.2594 2.13704 16.5135C2.08934 16.7676 2.05117 17.0225 2.01301 17.2798C1.98995 17.0209 1.982 16.7603 1.97882 16.499C1.97564 16.2376 1.98836 15.9763 2.00585 15.7142C2.04237 15.188 2.11812 14.6654 2.23244 14.1509C2.46598 13.1112 2.84453 12.1106 3.35665 11.1793C3.87175 10.2466 4.49528 9.38004 5.21389 8.59809C5.57007 8.20607 5.9485 7.83664 6.33887 7.48172C6.72924 7.1268 7.1395 6.79689 7.5577 6.47989C9.23822 5.24105 11.0696 4.22787 13.0062 3.46552C14.9179 2.69718 16.9017 2.12827 18.9269 1.76758Z"
                            fill="currentColor" />
                        <path
                            d="M4.41878 15.9819C-0.113018 21.5476 11.3421 31.9636 13.2526 24.4579C14.4452 19.3697 8.95533 11.6173 3.94412 16.2223"
                            fill="currentColor" />
                        <path
                            d="M1.77523 23.1698C1.7323 23.4868 1.67348 23.799 1.61624 24.1095L1.43892 25.0363C1.32205 25.651 1.20836 26.2608 1.12091 26.8674C1.02988 27.4573 0.987327 28.0538 0.993694 28.6508C0.997999 28.9255 1.03159 29.199 1.09388 29.4663C1.12239 29.5858 1.16151 29.7025 1.21075 29.8148C1.22268 29.8406 1.2354 29.8672 1.24812 29.8955L1.26799 29.9317L1.29582 29.9801C1.32285 30.0253 1.35784 30.0802 1.39282 30.127C1.53402 30.3226 1.71279 30.4872 1.91836 30.6109C2.14096 30.747 2.38204 30.8492 2.6339 30.9142C3.19057 31.0524 3.76336 31.1121 4.3361 31.0917C4.94007 31.077 5.5428 31.029 6.14166 30.9481C6.44616 30.9102 6.75147 30.8674 7.05836 30.8207C7.36525 30.7739 7.67293 30.7263 7.98538 30.6835C7.71029 30.8392 7.42885 30.9779 7.13945 31.1062C6.85005 31.2344 6.55828 31.3482 6.26013 31.4579C5.65745 31.6737 5.03579 31.8307 4.40367 31.9265C4.24466 31.9491 4.08089 31.9677 3.9179 31.9814C3.75491 31.9951 3.58956 31.9999 3.42259 31.9999C3.08191 32.002 2.74193 31.9682 2.40811 31.8991C2.05382 31.8258 1.7129 31.6971 1.39758 31.5176C1.06747 31.3241 0.780091 31.0638 0.553247 30.7529C0.496096 30.6734 0.443012 30.5911 0.394227 30.5061L0.360841 30.4464L0.325854 30.3794C0.302797 30.3351 0.282136 30.2899 0.26226 30.2447C0.186645 30.0696 0.128565 29.8872 0.088925 29.7003C0.0188225 29.3533 -0.0100067 28.9991 0.00305806 28.6452C0.0143107 28.3105 0.0491261 27.977 0.107219 27.6474C0.161283 27.3247 0.235216 27.0021 0.318696 26.6932C0.666712 25.465 1.15557 24.2824 1.77523 23.1698Z"
                            fill="currentColor" />
                        <path
                            d="M8.23657 11.9948C8.48145 11.7522 8.74756 11.5327 9.03162 11.339C9.31857 11.1452 9.61911 10.9729 9.93084 10.8236C10.5597 10.5267 11.2214 10.3073 11.9018 10.1702C13.2712 9.90084 14.6759 9.87138 16.0551 10.0831C16.7474 10.1847 17.4307 10.3419 18.0984 10.5534C18.7713 10.7637 19.4247 11.0336 20.0511 11.36C20.6855 11.6904 21.2831 12.089 21.8335 12.549C22.3944 13.0183 22.8867 13.5661 23.2957 14.1759C23.4995 14.4866 23.6767 14.8145 23.8251 15.156C24.2796 16.1934 24.4245 17.3432 24.2418 18.4632C24.1225 19.1899 23.8946 19.8938 23.566 20.5507C23.4068 20.8738 23.2289 21.1871 23.0333 21.4888C22.8382 21.7872 22.6286 22.0756 22.4052 22.3527C21.5143 23.4405 20.4524 24.3715 19.2624 25.1081C18.6765 25.4751 18.0614 25.7916 17.4234 26.0543C17.1054 26.1834 16.7818 26.2963 16.4542 26.3988C16.1271 26.4963 15.7944 26.5736 15.458 26.6303C16.7227 26.1686 17.9084 25.5092 18.9721 24.6758C20.0307 23.8731 20.9682 22.9179 21.7548 21.8405C21.9464 21.5735 22.1253 21.2977 22.2883 21.0153C22.4523 20.7353 22.6004 20.4461 22.7319 20.149C22.9937 19.5674 23.171 18.9504 23.2583 18.3172C23.3846 17.388 23.2516 16.4414 22.8743 15.5851C22.7475 15.2987 22.597 15.0237 22.4243 14.7632C22.0726 14.2342 21.6498 13.7577 21.1681 13.3475C20.6788 12.9262 20.1484 12.5568 19.5852 12.2449C17.2576 10.9785 14.6146 10.4338 11.9844 10.6784C11.3243 10.746 10.673 10.8839 10.0413 11.0898C9.72379 11.1945 9.41401 11.322 9.11431 11.4713C8.80841 11.6218 8.51489 11.7968 8.23657 11.9948Z"
                            fill="currentColor" />
                        <path
                            d="M14.6861 29.7841C14.638 29.7789 14.5902 29.7711 14.543 29.7607C14.4977 29.7486 14.4523 29.7365 14.407 29.7228C14.3182 29.6945 14.2318 29.6589 14.1486 29.6163C14.0628 29.4776 13.9769 29.3413 13.9038 29.1993C13.7619 28.9226 13.6356 28.6379 13.5253 28.3467C13.4148 28.0644 13.3122 27.7877 13.1961 27.5304C13.1401 27.4049 13.0772 27.2826 13.0077 27.1642C13.0133 27.0835 13.0157 27.0029 13.0181 26.9125C13.0181 26.8681 13.0181 26.8246 13.0181 26.7794C13.0181 26.7343 13.0181 26.6875 13.0181 26.6375C13.0657 26.6441 13.113 26.6535 13.1596 26.6657C13.2049 26.6786 13.2494 26.6939 13.2948 26.7109C13.383 26.7449 13.4683 26.7862 13.55 26.8343C13.6318 26.9733 13.7058 27.1168 13.7718 27.2642C13.9014 27.5514 14.0063 27.8369 14.1145 28.1112C14.2159 28.38 14.3321 28.6429 14.4627 28.8984C14.5251 29.021 14.5966 29.1386 14.6765 29.2501L14.6813 29.505L14.6861 29.7841Z"
                            fill="currentColor" />
                        <path
                            d="M11.5838 28.087C11.6236 28.0991 11.6577 28.1144 11.6943 28.1273L11.7945 28.1668C11.8612 28.1926 11.9217 28.2193 11.9805 28.2475C12.0091 28.337 12.0513 28.4217 12.0886 28.5096C12.1681 28.6839 12.2532 28.8589 12.3399 29.0372C12.4266 29.2154 12.5164 29.3961 12.6007 29.5833C12.6428 29.6768 12.6841 29.772 12.7231 29.8688C12.6763 30.0104 12.6131 30.1458 12.5347 30.2721C12.3836 30.2189 12.2636 30.164 12.1371 30.1108C12.1022 30.0237 12.064 29.9366 12.0251 29.8495C11.9455 29.6752 11.8597 29.4994 11.7722 29.3219C11.6848 29.1445 11.5957 28.9622 11.5115 28.775C11.4677 28.6815 11.4319 28.5847 11.3866 28.4895C11.4087 28.4214 11.4353 28.3548 11.4661 28.2902L11.5162 28.1894C11.5417 28.1539 11.5592 28.1217 11.5838 28.087Z"
                            fill="currentColor" />
                        <path
                            d="M20.2498 1.27551C21.4424 -0.418406 23.8276 -0.660393 23.5891 2.00147C22.935 2.27835 22.2103 2.33371 21.5228 2.15932C20.8352 1.98493 20.2215 1.5901 19.7728 1.03352"
                            fill="currentColor" />
                    </svg>
                </a>
            </div>
        </header>
        <div class="c-sidebar-body">
            <?php echo get_reviewing_loop();
echo get_side_loop();
echo get_side_tags();?>
        </div>
    </aside>
    <div class="c-sidebar-bg"></div>
    <?php if (!is_front_page()) {
        echo get_breadcrumb();
    }?>
    <main class="o-container o-container:main">
        <?php if (is_front_page()) {
            echo '<h1 class="c-site-title">memo.kamenwriter.com</h1>';
        } elseif (is_search()) {
            echo '<h1 class="c-large-heading">"' . get_search_query() . '"の検索結果</h1>';
        } elseif (is_404()) {
            echo '<h1 class="c-large-heading">見つかりませんでした。</h1>';
        } elseif (is_tag()) {
            echo '<h1 class="c-large-heading">#' . single_tag_title('', false) . '</h1>';
        }
?>