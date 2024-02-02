<!DOCTYPE html>
<html lang="cs">

<head>
    <title>Summit Bikes</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="data/css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="data/css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="data/css/jquery-ui.structure.css" rel="stylesheet" type="text/css">
    <link href="data/css/jquery-ui.theme.css" rel="stylesheet" type="text/css">
    <link href="data/css/fonts.css" rel="stylesheet" type="text/css">
    <link href="data/css/styles.css" rel="stylesheet" type="text/css">
    <link href="data/css/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="data/css/slick.css" rel="stylesheet" type="text/css">

    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="data/css/jquery-reanimator.css" /> -->

    <script type="text/javascript" src="data/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="data/js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="data/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="data/js/scripts.js"></script>
    <script type="text/javascript" src="data/js/slick.min.js"></script>
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <!-- <script type="text/javascript" src="data/js/jquery-reanimator.js"></script> -->
    <!-- <script type="text/javascript" src="data/js/jquery.easeScroll.js"></script> -->

    <!-- <link rel="apple-touch-icon" sizes="180x180" href="data/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="data/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="data/fav/favicon-16x16.png">
    <link rel="manifest" href="data/fav/site.webmanifest"> -->

</head>

<body>
    <h1 class="screenReaderElement">Summit Bikes</h1>
    <header class="header" id="header">
        <div class="upper-part">
            <div class="container">
                <div class="flex-block">
                    <div class="left">
                        <a class="phone" href="tel:+420 566 466 180">566 466 180</a>
                        <span>Po - Pá: 10:00 - 16:30</span>
                    </div>
                    <div class="right">
                        <nav aria-label="Hlavní navigace" id="links">
                            <h2 class="screenReaderElement">Hlavní navigace</h2>

                            <ul>
                                <li><a href="">Věrnostní program</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Poradna</a></li>
                                <li><a href="">O nás</a></li>
                                <li><a href="">Kontakty</a></li>
                                <li><a href="" class="compare">Porovnat <span>(2)</span></a></li>
                                <li><a href="" class="login">Přihlášení</a></li>
                            </ul>
                        </nav>

                        <div class="dropdown">
                            <span class="active">CZ <img class="arrow" src="data/images/arrow-white-down.svg" alt=""></span>

                            <div class="menu">
                                <a href="">EN</a>
                                <a href="">DE</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="mid-part">
            <div class="container">
                <div class="flex-block">
                    <a href="" class="logo"><img src="data/images/logo.svg" alt="SummitBikes"></a>
                    <div class="holder" id="search-form">
                        <form action="" class="search-form">
                            <input type="search" placeholder='Hledejte například "Kola Trek"' id="search-input">
                            <button>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.64453 13.405L19.6445 13.405M19.6445 13.405L13.1445 19.905M19.6445 13.405L13.1445 6.905" stroke="#F06432" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </form>
                    </div>

                    <div class="basket-part">
                        <a href="" class="basket">
                            <div class="icon">
                                <img src="data/images/shop-big.svg" alt="">
                                <span class="count">3</span>
                            </div>
                            <span class="cost">16 590 Kč</span>
                        </a>
                        <div class="shipping">
                            <span>Nakupte ještě za <strong>3 410 Kč</strong> pro dopravu zdarma</span>
                            <div class="progress-bar">
                                <div class="whole-bar"></div>
                                <div class="current-state" style="width: 82.95%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-nav">
                        <a href="" class="fake-search" id="fake-search">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.8545 20.195L17.4545 16.805C18.5515 15.4075 19.1467 13.6817 19.1445 11.905C19.1445 10.3228 18.6753 8.77603 17.7963 7.46044C16.9172 6.14485 15.6678 5.11947 14.206 4.51397C12.7442 3.90847 11.1357 3.75004 9.58381 4.05872C8.03196 4.3674 6.6065 5.12933 5.48768 6.24815C4.36886 7.36697 3.60693 8.79243 3.29825 10.3443C2.98957 11.8961 3.148 13.5047 3.7535 14.9665C4.359 16.4283 5.38438 17.6777 6.69997 18.5568C8.01557 19.4358 9.56228 19.905 11.1445 19.905C12.9212 19.9072 14.647 19.312 16.0445 18.215L19.4345 21.615C19.5275 21.7087 19.6381 21.7831 19.76 21.8339C19.8818 21.8847 20.0125 21.9108 20.1445 21.9108C20.2765 21.9108 20.4073 21.8847 20.5291 21.8339C20.651 21.7831 20.7616 21.7087 20.8545 21.615C20.9483 21.522 21.0227 21.4114 21.0734 21.2896C21.1242 21.1677 21.1503 21.037 21.1503 20.905C21.1503 20.773 21.1242 20.6423 21.0734 20.5204C21.0227 20.3986 20.9483 20.288 20.8545 20.195ZM5.14453 11.905C5.14453 10.7183 5.49643 9.55828 6.15572 8.57158C6.81501 7.58489 7.75208 6.81585 8.84843 6.36173C9.94479 5.9076 11.1512 5.78878 12.3151 6.02029C13.479 6.2518 14.5481 6.82325 15.3872 7.66236C16.2263 8.50148 16.7977 9.57057 17.0292 10.7345C17.2608 11.8983 17.1419 13.1047 16.6878 14.2011C16.2337 15.2975 15.4647 16.2345 14.478 16.8938C13.4913 17.5531 12.3312 17.905 11.1445 17.905C9.55324 17.905 8.02711 17.2729 6.90189 16.1476C5.77668 15.0224 5.14453 13.4963 5.14453 11.905Z" fill="#3C3C3C" />
                            </svg>
                        </a>
                        <a href="" class="basket">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 7H16V6C16 4.93913 15.5786 3.92172 14.8284 3.17157C14.0783 2.42143 13.0609 2 12 2C10.9391 2 9.92172 2.42143 9.17157 3.17157C8.42143 3.92172 8 4.93913 8 6V7H5C4.73478 7 4.48043 7.10536 4.29289 7.29289C4.10536 7.48043 4 7.73478 4 8V19C4 19.7956 4.31607 20.5587 4.87868 21.1213C5.44129 21.6839 6.20435 22 7 22H17C17.7956 22 18.5587 21.6839 19.1213 21.1213C19.6839 20.5587 20 19.7956 20 19V8C20 7.73478 19.8946 7.48043 19.7071 7.29289C19.5196 7.10536 19.2652 7 19 7ZM10 6C10 5.46957 10.2107 4.96086 10.5858 4.58579C10.9609 4.21071 11.4696 4 12 4C12.5304 4 13.0391 4.21071 13.4142 4.58579C13.7893 4.96086 14 5.46957 14 6V7H10V6ZM18 19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H7C6.73478 20 6.48043 19.8946 6.29289 19.7071C6.10536 19.5196 6 19.2652 6 19V9H8V10C8 10.2652 8.10536 10.5196 8.29289 10.7071C8.48043 10.8946 8.73478 11 9 11C9.26522 11 9.51957 10.8946 9.70711 10.7071C9.89464 10.5196 10 10.2652 10 10V9H14V10C14 10.2652 14.1054 10.5196 14.2929 10.7071C14.4804 10.8946 14.7348 11 15 11C15.2652 11 15.5196 10.8946 15.7071 10.7071C15.8946 10.5196 16 10.2652 16 10V9H18V19Z" fill="#3C3C3C" />
                            </svg>

                        </a>
                        <a href="" class="compare">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                            </svg>
                        </a>
                        <div class="hamburger">
                            <div class="hold">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="category-part">
            <div class="container">
                <div class="flex-block">
                    <nav aria-label="Navigace kategorií" id="categories">
                        <h2 class="screenReaderElement">Navigace kategorií</h2>
                        <ul>
                            <li><a href="https://cssgradient.io/" class="main-link">Jízdní kola <div class="arrow arrow-main"><img src="data/images/arrow-black-small.svg" alt="" /></div></a>

                                <div class="categories-navigation ">
                                    <div class="bg-categroy"></div>
                                    <div class="holder">
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>

                                                <span>Horská kola <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                    <li><a href="" class="child">dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                    <li><a href="" class="child">Dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                </ul> -->
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Silniční kola <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                    <li><a href="" class="child">dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                    <li><a href="" class="child">Dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                </ul> -->
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Gravel kola <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                    <li><a href="" class="child">dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                    <li><a href="" class="child">Dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                </ul> -->
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Městská kola <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                    <li><a href="" class="child">dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                    <li><a href="" class="child">Dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                </ul> -->
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Elektrokola <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                    <li><a href="" class="child">dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                    <li><a href="" class="child">Dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="https://cssgradient.io/" class="main-link">Cyklistické oblečení <div class="arrow arrow-main"><img src="data/images/arrow-black-small.svg" alt="" /></div></a>

                                <div class="categories-navigation ">
                                    <div class="bg-categroy"></div>
                                    <div class="holder">
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Pánské <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Dresy</a></li>
                                                <li><a href="" class="child">Šortky</a></li>
                                                <li><a href="" class="child">Kalhoty</a></li>
                                                <li><a href="" class="child">Bundy</a></li>
                                                <li><a href="" class="child">Vesty</a></li>
                                                <li><a href="" class="child">Rukavice</a></li>
                                                <li><a href="" class="child">Ponožky</a></li>
                                                <li><a href="" class="child">Termoprádlo</a></li>
                                                <li><a href="" class="child">Spodní prádlo</a></li>
                                                <li><a href="" class="child">Návleky</a></li>
                                                <li><a href="" class="child">Doplňky</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Dámské <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Dresy</a></li>
                                                <li><a href="" class="child">Šortky</a></li>
                                                <li><a href="" class="child">Kalhoty</a></li>
                                                <li><a href="" class="child">Bundy</a></li>
                                                <li><a href="" class="child">Vesty</a></li>
                                                <li><a href="" class="child">Rukavice</a></li>
                                                <li><a href="" class="child">Ponožky</a></li>
                                                <li><a href="" class="child">Termoprádlo</a></li>
                                                <li><a href="" class="child">Spodní prádlo</a></li>
                                                <li><a href="" class="child">Návleky</a></li>
                                                <li><a href="" class="child">Doplňky</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Dětské <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Dresy</a></li>
                                                <li><a href="" class="child">Šortky</a></li>
                                                <li><a href="" class="child">Kalhoty</a></li>
                                                <li><a href="" class="child">Bundy</a></li>
                                                <li><a href="" class="child">Vesty</a></li>
                                                <li><a href="" class="child">Rukavice</a></li>
                                                <li><a href="" class="child">Ponožky</a></li>
                                                <li><a href="" class="child">Termoprádlo</a></li>
                                                <li><a href="" class="child">Návleky</a></li>
                                                <li><a href="" class="child">Doplňky</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li><a href="https://cssgradient.io/" class="main-link">Cyklistická obuv <div class="arrow arrow-main"><img src="data/images/arrow-black-small.svg" alt="" /></div></a>

                                <div class="categories-navigation ">
                                    <div class="bg-categroy"></div>
                                    <div class="holder">
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Pánská <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                    <li><a href="" class="child">dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                    <li><a href="" class="child">Dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                </ul> -->
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Dámská <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                    <li><a href="" class="child">dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                    <li><a href="" class="child">Dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                </ul> -->
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Dětské <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                    <li><a href="" class="child">dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                    <li><a href="" class="child">Dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                </ul> -->
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Doplňky <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                    <li><a href="" class="child">dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                    <li><a href="" class="child">Dlouhý rukáv</a></li>
                                                    <li><a href="" class="child">Krátký rukáv</a></li>
                                                </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="https://cssgradient.io/" class="main-link">Cyklistické vybavení <div class="arrow arrow-main"><img src="data/images/arrow-black-small.svg" alt="" /></div></a>

                                <div class="categories-navigation ">
                                    <div class="bg-categroy"></div>
                                    <div class="holder">
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Batohy na kolo <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Batohy</a></li>
                                                <li><a href="" class="child">Ledvinky</a></li>
                                                <li><a href="" class="child">Rezervoáry a příslušenství</a></li>
                                                <li><a href="" class="child">Voděodolné vaky</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Chrániče na kolo <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Kolenní chrániče</a></li>
                                                <li><a href="" class="child">Loketní chrániče</a></li>
                                                <li><a href="" class="child">Chrániče páteře a hrudníku</a></li>
                                                <li><a href="" class="child">Holenní chrániče</a></li>
                                                <li><a href="" class="child">Návleky</a></li>
                                                <li><a href="" class="child">Dětské chrániče</a></li>
                                                <li><a href="" class="child">Batohy s chráničem</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Helmy <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">MTB, enduro přilby</a></li>
                                                <li><a href="" class="child">Downhill, freeride přilby</a></li>
                                                <li><a href="" class="child">Silniční přilby</a></li>
                                                <li><a href="" class="child">BMX přilby</a></li>
                                                <li><a href="" class="child">Dětské přilby</a></li>
                                                <li><a href="" class="child">Doplňky</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Brýle <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Cyklistické brýle</a></li>
                                                <li><a href="" class="child">Sjezdové brýle</a></li>
                                                <li><a href="" class="child">Lifestyle brýle</a></li>
                                                <li><a href="" class="child">Dětské brýle</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Stany, spacáky, karimatky <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Stany</a></li>
                                                <li><a href="" class="child">Spací pytle</a></li>
                                                <li><a href="" class="child">Karimatky</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="https://cssgradient.io/" class="main-link">Cyklo komponenty <div class="arrow arrow-main"><img src="data/images/arrow-black-small.svg" alt="" /></div></a>

                                <div class="categories-navigation ">
                                    <div class="bg-categroy"></div>
                                    <div class="holder">
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>ŘÍZENÍ <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">omotávky</a></li>
                                                <li><a href="" class="child">gripy</a></li>
                                                <li><a href="" class="child">řídítka</a></li>
                                                <li><a href="" class="child">představce</a></li>
                                                <li><a href="" class="child">rohy</a></li>
                                                <li><a href="" class="child">příslušenství (koncovky, zrcátka, zvonky)</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>BRZDY <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">destičky</a></li>
                                                <li><a href="" class="child">špalíky a gumičky</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>PEDÁLY <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">nášlapné</a></li>
                                                <li><a href="" class="child">platformy</a></li>
                                                <li><a href="" class="child">příslušenství (kufry, díly)</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>SEDLA A SEDLOVKY <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">teleskopické sedlovky</a></li>
                                                <li><a href="" class="child">pevné sedlovky</a></li>
                                                <li><a href="" class="child">sedla</a></li>
                                                <li><a href="" class="child">příslušenství (zámky, potahy, objímky)</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>RÁFKY, PLÁŠTĚ, DUŠE <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">ráfky</a></li>
                                                <li><a href="" class="child">pláště a galusky</a></li>
                                                <li><a href="" class="child">duše a bezdušová řešení</a></li>
                                                <li><a href="" class="child">příslušenství (ventilky, těsnení)</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>ŘETĚZY <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">12</a></li>
                                                <li><a href="" class="child">11</a></li>
                                                <li><a href="" class="child">10</a></li>
                                                <li><a href="" class="child">9</a></li>
                                                <li><a href="" class="child">Příslušenství</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="https://cssgradient.io/" class="main-link">Cyklo příslušenství <div class="arrow arrow-main"><img src="data/images/arrow-black-small.svg" alt="" /></div></a>

                                <div class="categories-navigation ">
                                    <div class="bg-categroy"></div>
                                    <div class="holder">
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>BLATNÍKY <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                            </ul> -->
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>BRAŠNY, VAKY A OBALY <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">brašny na nosič</a></li>
                                                <li><a href="" class="child">brašny na rám</a></li>
                                                <li><a href="" class="child">brašny na řidítka</a></li>
                                                <li><a href="" class="child">brašny na sedlovku</a></li>
                                                <li><a href="" class="child">držáky a pouzdra na mobil</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>COMPUTERY A GPS <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">tachometry</a></li>
                                                <li><a href="" class="child">GPS</a></li>
                                                <li><a href="" class="child">držáky</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>OSVĚTLENÍ <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">přední světla</a></li>
                                                <li><a href="" class="child">zadní světla</a></li>
                                                <li><a href="" class="child">sety přední + zadní světlo</a></li>
                                                <li><a href="" class="child">celovky</a></li>
                                                <li><a href="" class="child">reflexní prvky</a></li>
                                                <li><a href="" class="child">držáky na světla</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>PUMPY <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Ruční pumpičky</a></li>
                                                <li><a href="" class="child">Pumpy stojanové</a></li>
                                                <li><a href="" class="child">Hustilky C02</a></li>
                                                <li><a href="" class="child">Pumpy na vidlice a tlumiče</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>NOSIČE A DRŽÁKY <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">stojany a držáky</a></li>
                                                <li><a href="" class="child">nosiče na kolo</a></li>
                                                <li><a href="" class="child">přepravní koše</a></li>
                                                <li><a href="" class="child">strojánky na kolo</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>KOŠÍKY A LÁHVE <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Cyklistické lahve</a></li>
                                                <li><a href="" class="child">Košíky</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>ZÁMKY <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                            </ul> -->
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>DĚTSKÉ SEDAČKY <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <!-- <ul>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                                <li><a href="" class="child"></a></li>
                                            </ul> -->
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>SERVIS, NÁŘADÍ <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">montážní stojany</a></li>
                                                <li><a href="" class="child">maziva a oleje</a></li>
                                                <li><a href="" class="child">nářadí a lepení</a></li>
                                                <li><a href="" class="child">bowdeny a lanka</a></li>
                                                <li><a href="" class="child">příslušenství (koncovky)</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>CYKLOKOSMETIKA <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">odmašťovače</a></li>
                                                <li><a href="" class="child">čístící prostředky</a></li>
                                                <li><a href="" class="child">ochranné fólie</a></li>
                                                <li><a href="" class="child">kartáče</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="https://cssgradient.io/" class="main-link">Sportovní výživa <div class="arrow arrow-main"><img src="data/images/arrow-black-small.svg" alt="" /></div></a>

                                <div class="categories-navigation ">
                                    <div class="bg-categroy"></div>
                                    <div class="holder">
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Rychlá energie <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Energetické tyčinky</a></li>
                                                <li><a href="" class="child">Gely a bombóny</a></li>
                                                <li><a href="" class="child">Iontové nápoje</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Bílkoviny a zdravá výživa <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Proteinové tyčinky</a></li>
                                                <li><a href="" class="child">Sušené maso</a></li>
                                                <li><a href="" class="child">Proteinové nápoje</a></li>
                                            </ul>
                                        </div>
                                        <div class="category">
                                            <a href="" class="icon">
                                                <div class="img">
                                                    <img src="data/images/sub-1.jpg" alt="" />
                                                </div>
                                                <span>Doplňky stravy <div class="arrow child-arrow"><img src="data/images/arrow-black-small.svg" alt="" /></div></span>
                                            </a>
                                            <ul>
                                                <li><a href="" class="child">Aminokyseliny/BCAA</a></li>
                                                <li><a href="" class="child">Vitamíny</a></li>
                                                <li><a href="" class="child">Kreatiny</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-nav"></div>
        <div class="mobile-navigation">
            <div class="container">

                <div class="flex-block">
                    <nav aria-label="Mobilní navigace" id="mobile-navigation">
                        <h2 class="screenReaderElement">Navigace kategorií</h2>

                        <div class="close" id="close-header">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="upper">
                            <a href="" class="login">Přihlášení</a>
                            <div class="dropdown">
                                <span class="active">CZ <img class="arrow" src="data/images/arrow-black-small.svg" alt=""></span>

                                <div class="menu">
                                    <a href="#">EN</a>
                                    <a href="#">DE</a>
                                </div>
                            </div>

                        </div>
                        <ul>
                            <li class="mobile"><a href="">Věrnostní program</a></li>
                            <li class="mobile"><a href="">Blog</a></li>
                            <li class="mobile"><a href="">Poradna</a></li>
                            <li class="mobile"><a href="">O nás</a></li>
                            <li class="mobile"><a href="">Kontakty</a></li>
                            <li><a href="" class="cat" id="categories-dropdownd">Kategorie <img class="arrow" src="data/images/arrow-black-small.svg" alt=""></a>
                                <ul>
                                    <li class="child"><a href="">Jízdní kola</a></li>
                                    <li class="child"><a href="">Cyklo oblečení</a></li>
                                    <li class="child"><a href="">Cyklo obuv</a></li>
                                    <li class="child"><a href="">Cyklo vybavení</a></li>
                                    <li class="child"><a href="">Cyklistické doplňky</a></li>
                                    <li class="child"><a href="">Cyklo komponenty</a></li>
                                    <li class="child"><a href="">Sportovní výživa</a></li>
                                    <li class="child"><a href="">Značky</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="lower">
                            <a class="phone black" href="tel:+420 566 466 180">566 466 180</a>
                            <span>Po - Pá: 10:00 - 16:30</span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>