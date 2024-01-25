<?php include("header.php") ?>
<main class="main">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li>
                    <a href="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.741 2.31995C12.6472 2.21683 12.533 2.13444 12.4055 2.07806C12.2781 2.02168 12.1403 1.99255 12.001 1.99255C11.8616 1.99255 11.7238 2.02168 11.5964 2.07806C11.4689 2.13444 11.3547 2.21683 11.261 2.31995L2.26095 12.3199C2.12824 12.463 2.04029 12.6418 2.00796 12.8343C1.97563 13.0268 2.00032 13.2245 2.07899 13.4031C2.15766 13.5817 2.28687 13.7334 2.45069 13.8394C2.61452 13.9455 2.8058 14.0013 3.00095 13.9999H5.00095V20.9999C5.00095 21.2652 5.10631 21.5195 5.29384 21.7071C5.48138 21.8946 5.73573 21.9999 6.00095 21.9999H18.0009C18.2662 21.9999 18.5205 21.8946 18.7081 21.7071C18.8956 21.5195 19.0009 21.2652 19.0009 20.9999V13.9999H21.0009C21.2662 13.9999 21.5205 13.8946 21.7081 13.7071C21.8956 13.5195 22.0009 13.2652 22.0009 12.9999C22.0028 12.7487 21.91 12.5059 21.7409 12.3199L12.741 2.31995Z" fill="black" />
                        </svg>
                    </a>
                </li>
                <li><a href="">Jízdní kola</a></li>
                <li>Kolo XYZ</li>
            </ul>
        </div>
    </div>
    <section class="product-detail">
        <div class="container">
            <div class="flex-block">
                <div class="gallery" id="detail-gallery">
                    <div class="selected-img">
                        <div class="perks">
                            <span class="perk new">Novinka</span>
                            <span class="perk best">Bestseller</span>
                            <span class="perk sale">-50%</span>
                        </div>
                        <figure class="zoom" style="background-image: url(./data/images/detail-1.jpg)">
                            <img src="https://i.pinimg.com/originals/2b/de/de/2bdede0647e3cdf75b44ea33723201d9.jpg" class="selected-image" />
                        </figure>
                        <!-- <img src="" alt="" class="selected-image"> -->
                        <img src="data/images/collab-3.svg" alt="" class="logo">
                        <div class="zoom-logo">
                            <img src="data/images/zoom.svg" alt="">
                        </div>
                        <div class="loading"><img src="data/images/loading.svg" alt=""></div>
                    </div>
                    <div class="images-holder">
                        <div class="img">
                            <img src="data/images/detail-1.jpg" alt="">
                        </div>
                        <div class="img"><img src="data/images/bike-1.jpg" alt=""></div>
                        <div class="img"><img src="data/images/bike-2.jpg" alt=""></div>
                        <div class="img"><img src="data/images/bike-3.jpg" alt=""></div>
                    </div>
                </div>
                <div class="texts">
                    <h2>Trek AL7</h2>
                    <span class="serial-num">SS5579/50</span>
                    <div class="rating">
                        <div class="rate">
                            <div class="star full"></div>
                            <div class="star full"></div>
                            <div class="star full"></div>
                            <div class="star full"></div>
                            <div class="star"></div>
                        </div>
                        <a href="" class="rating-switcher">7 hodnocení</a>
                    </div>
                    <p class="desc-short">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="special-banner">
                        <img src="data/images/procento.svg" alt="">
                        <div class="text">
                            <span><strong>DNES AKCE: Zaplatťe 2 654 Kč.</strong></span>
                            <span>Pro slevu 10% zadejte v košíku slevový kód: <a href="" class="copy" id="copy">OUTDOOR10<span class="tooltip" style="display: none;">Kod zkopírován</span></a></span>

                        </div>
                    </div>
                    <a href="" class="link">Jak správně vybrat velikost</a>
                    <form action="" class="add-to-basket" id="to-basket">
                        <div class="form-holder colors">
                            <input value="color-1" type="radio" name="color" id="color-1" required>
                            <label for="color-1" style="background-color: #00ACFF;"><span></span></label>
                            <input value="color-2" type="radio" name="color" id="color-2">
                            <label for="color-2" style="background-color: #3F9532;"><span></span></label>
                            <input value="color-3" type="radio" name="color" id="color-3">
                            <label for="color-3" style="background-color: #001AFF;"><span></span></label>
                            <input value="color-4" type="radio" name="color" id="color-4">
                            <label for="color-4" style="background-color: #FF0000;"><span></span></label>
                            <input value="color-5" type="radio" name="color" id="color-5">
                            <label for="color-5" style="background-color: #F7A400;"><span></span></label>
                            <input value="color-6" type="radio" name="color" id="color-6">
                            <label for="color-6" style="background-color: #D99000;"><span></span></label>
                        </div>
                        <div class="form-holder sizes-holder-form">
                            <input class="input-btn" type="radio" value="size-xs" name="size" id="size-xs" required>
                            <label class="radio-label" for="size-s">XS</label>
                            <input class="input-btn" type="radio" value="size-s" name="size" id="size-s">
                            <label class="radio-label" for="size-s">S</label>
                            <input class="input-btn" type="radio" value="size-m" name="size" id="size-m">
                            <label class="radio-label" for="size-m">M</label>
                            <input class="input-btn" type="radio" value="size-l" name="size" id="size-l">
                            <label class="radio-label" for="size-l">L</label>
                            <input class="input-btn" type="radio" value="size-xl" name="size" id="size-xl">
                            <label class="radio-label" for="size-xl">XL</label>

                        </div>
                        <div class="form-holder stock-holder">
                            <div class="stock in"><span>Skladem</span></div>
                            <a href="" class="shipping-otions">Možnosti dpravy</a>
                        </div>

                        <div class="form-holder send-holder">
                            <div class="price-holder">
                                <span class="new">42 000 Kč</span>
                                <span class="old">47 535 Kč</span>
                            </div>
                            <div class="wrapper">
                                <div class="quantity">
                                    <div class="less" id="less"></div>
                                    <input type="number" value="1" class="number" id="count" readonly />
                                    <div class="more" id="more"></div>
                                </div>
                                <button type="submit" id="send-form">Přidat do košíku</button>
                            </div>

                        </div>
                        <div class="error-holder">
                            <span class="error" id="color-error">Musíte vybrat barvu</span>
                            <span class="error" id="size-error">Musíte vybrat velikost</span>
                        </div>
                    </form>
                    <div class="btn-holder">
                        <a href="" class="compare"><span>Porovnat</span></a>
                        <a href="" class="share"><span>Sdílet</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banners-section">
        <div class="container">
            <div class="banners second">
                <div class="banner" style="background-image: url(./data/images/banner-3.jpg);">
                    <h3>Jak správně
                        vybrat kolo</h3>
                    <p>Ve 5 jednoduchých krocích zjistite jaké kolo by pro Vás bylo nejlepší v našem
                        jednoduchém průvodci, lorem ipsum dolor sit amet.</p>
                    <a href="" class="btn border-white"><span>spustit průvodce</span></a>
                </div>
                <div class="banner blue" style="background-image: url(./data/images/banner-4.jpg);">
                    <!-- <img src="data/images/question_mark.svg" alt=""> -->
                    <h3>Nevíte si rady</h3>
                    <p>Zeptejte si našich expertů lorem ipsum dolor sit amet adipsicn lorem ipsum.</p>
                    <a href="mailTo:info@summitbikes.cz" class="mail">info@summitbikes.cz</a>
                    <a href="" class="btn border-white"><span>napište nám dotaz</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="descriptions">
        <div class="container">
            <div class="switchers-holder">
                <div class="switcher active" id="specifications"><span>Specifikace</span></div>
                <div class="switcher" id="detail"><span>Detailní popis</span></div>
                <div class="switcher" id="geometry"><span>Geometrie</span></div>
                <div class="switcher" id="geometry"><span>Tabulka velikostí</span></div>
                <div class="switcher" id="reviews"><span>Hodnocení</span><span class="quantity">15</span></div>
            </div>
            <div class="content-part specifications active" data-target="specifications">
                <h3>Specifikace</h3>
                <div class="table">
                    <div class="row">
                        <span>Značka</span>
                        <span class="b">SCOTT</span>
                    </div>
                    <div class="row">
                        <span>Model</span>
                        <span class="b">SCOTT Genius</span>
                    </div>
                    <div class="row">
                        <span>Zaměření</span>
                        <span class="b">Trail, enduro</span>
                    </div>
                    <div class="row">
                        <span>Materiál rámu</span>
                        <span class="b">Karbon</span>
                    </div>
                    <div class="row">
                        <span>Určeno pro</span>
                        <span class="b">Unisex, Pánské</span>
                    </div>
                    <div class="row">
                        <span>Brzdy</span>
                        <span class="b">Shimano MT520 4 Piston Disc</span>
                    </div>
                    <div class="row">
                        <span>Odpružení</span>
                        <span class="b">celoodpružená</span>
                    </div>
                    <div class="row">
                        <span>Hmotnost v kg</span>
                        <span class="b">14.6</span>
                    </div>
                    <div class="row">
                        <span>Pedály</span>
                        <span class="b">Nejsou součástí</span>
                    </div>
                    <div class="row">
                        <span>Průměr kol</span>
                        <span class="b">29"</span>
                    </div>
                    <div class="row">
                        <span>Nosnost (hmotnost kola + jezdce + zavazadel)</span>
                        <span class="b">128</span>
                    </div>
                    <div class="row">
                        <span>Rám</span>
                        <span class="b">Genius Carbon / IMP Technology / HMF Main Frame, <br>
                            BB92 / Alloy SL 6011 swingarm, <br>
                            VLK Virtual 4 Link kinematic, <br>
                            27.5" (2.6 & 2.8) and 29" (2.4 & 2.6) tire compatible with Geo-BB adj., <br>
                            SW dropouts for Boost 12x148mm, <br>
                            TBC Trunnion Box Construction</span>
                    </div>
                    <div class="row">
                        <span>Řazení</span>
                        <span class="b">SRAM SX Eagle Trigger</span>
                    </div>
                    <div class="row">
                        <span>Přehazovačka</span>
                        <span class="b">SRAM X1 Eagle DUB, 32T</span>
                    </div>
                </div>

            </div>
            <div class="content-part detail" data-target="detail">
                <h3>Detailní popis</h3>
                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <img src="data/images/detail-popis-1.jpg" alt="" class="full">
                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="holder">
                    <img src="data/images/detail-popis-2.jpg" alt="" class="half">
                    <div class="text">
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.</p>
                    </div>
                </div>

            </div>
            <div class="content-part geometry" data-target="geometry">
                <h3>Geometrie</h3>
                <div class="flex-wrapper">
                    <div class="img"><img src="data/images/geometry.jpg" alt=""></div>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>XS</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A - Výška sedla v MM</td>
                                <td>605 - 731</td>
                                <td>663 - 798</td>
                                <td>708 -843</td>
                                <td>743 - 878</td>
                                <td>783 - 918</td>
                            </tr>
                            <tr>
                                <td>B - Uhel hlavové trubky</td>
                                <td>67°</td>
                                <td>663 - 798</td>
                                <td>708 -843</td>
                                <td>743 - 878</td>
                                <td>783 - 918</td>
                            </tr>
                            <tr>
                                <td>C - Rozovr kol v mm</td>
                                <td>605 - 731</td>
                                <td>663 - 798</td>
                                <td>708 -843</td>
                                <td>743 - 878</td>
                                <td>783 - 918</td>
                            </tr>
                            <tr>
                                <td>D - Výška v CM</td>
                                <td>605</td>
                                <td>663 - 798</td>
                                <td>708 -843</td>
                                <td>743 - 878</td>
                                <td>783 - 918</td>
                            </tr>
                            <tr>
                                <td>E - Výška sedla v MM</td>
                                <td>731</td>
                                <td>663 - 798</td>
                                <td>708 -843</td>
                                <td>743 - 878</td>
                                <td>783 - 918</td>
                            </tr>
                            <tr>
                                <td>F - Uhel hlavové trubky</td>
                                <td>731</td>
                                <td>663 - 798</td>
                                <td>708 -843</td>
                                <td>743 - 878</td>
                                <td>783 - 918</td>
                            </tr>

                            <tr>
                                <td>G - Rozovr kol v mm</td>
                                <td>605 - 731</td>
                                <td>663 - 798</td>
                                <td>708 -843</td>
                                <td>743 - 878</td>
                                <td>783 - 918</td>
                            </tr>

                            <tr>
                                <td>H -Uhel hlavové trubky</td>
                                <td>605 - 731</td>
                                <td>663 - 798</td>
                                <td>708 -843</td>
                                <td>743 - 878</td>
                                <td>783 - 918</td>
                            </tr>
                            <tr>
                                <td>I -Rozovr kol v mm</td>
                                <td>605 - 731</td>
                                <td>663 - 798</td>
                                <td>708 -843</td>
                                <td>743 - 878</td>
                                <td>783 - 918</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="content-part sizes-table" data-target="sizes-table">

            </div> -->
            <div class="content-part reviews" data-target="reviews">
                <h3>Hodnocení</h3>
                <div class="reviews-holder">
                    <div class="block">
                        <div class="text">
                            <span>4.9</span>
                            <span>Z 5</span>
                        </div>
                        <div class="rate">
                            <div class="star full"></div>
                            <div class="star full"></div>
                            <div class="star full"></div>
                            <div class="star full"></div>
                            <div class="star"></div>
                        </div>
                    </div>
                    <div class="block middle">
                        <span>9</span>
                        <span>Hodnocení</span>
                    </div>
                    <div class="block rating">

                        <div class="rate">
                            <span>5</span>
                            <div class="star full"></div>
                            <div class="bar">
                                <div class="progress" style="width: 60%;"></div>
                            </div>
                        </div>
                        <div class="rate">
                            <span>4</span>
                            <div class="star full"></div>
                            <div class="bar">
                                <div class="progress"style="width: 30%;"></div>
                            </div>
                        </div>
                        <div class="rate">
                            <span>3</span>
                            <div class="star full"></div>
                            <div class="bar">
                                <div class="progress"style="width: 5%;"></div>
                            </div>
                        </div>
                        <div class="rate">
                            <span>2</span>
                            <div class="star full"></div>
                            <div class="bar">
                                <div class="progress"style="width: 2%;"></div>
                            </div>
                        </div>
                        <div class="rate">
                            <span>1</span>
                            <div class="star full"></div>
                            <div class="bar">
                                <div class="progress"style="width: 3%;"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="single-review">
                    <div class="left">
                        <div class="star full"></div>
                        <div class="star full"></div>
                        <div class="star full"></div>
                        <div class="star full"></div>
                        <div class="star"></div>
                    </div>
                    <div class="right">
                        <h4>Petr Sagan</h4>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <span class="recomand">Ano, doporučuji tento produkt</span>
                    </div>
                </div>
                <div class="btn-holder">
                    <a href="" class="btn full-dark"><span>Přečíst všechny recenze (45)</span></a>
                    <a href="" class="btn border-dark"><span>Napsat review</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="access-swiper">
        <div class="container">
            <h2 class="mark">LÍDÉ K TOMUTO PRODUKTU DOKUPUJÍ</h2>
            <div class="prod-nav-wrapper">
                <div class="swiper-button-prev prod-prev"></div>
                <div class="swiper-button-next prod-next"></div>
            </div>
            <div class="swiper prod-swiper">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-1.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">Fenix 6 Pro</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-2.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">Vacuum Stainless 1l</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-3.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">AeroComfort Triathlon 3.0 TSA</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-4.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">MET přilba PARACHUTE MCR MIPS</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-1.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">Fenix 6 Pro</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-2.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">Vacuum Stainless 1l</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-3.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">AeroComfort Triathlon 3.0 TSA</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-4.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">MET přilba PARACHUTE MCR MIPS</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="access-swiper">
        <div class="container">
            <h2 class="mark">ALTERNATIVY K TOMUTO PRODUKTU</h2>
            <div class="prod-nav-wrapper">
                <div class="swiper-button-prev prod-prev"></div>
                <div class="swiper-button-next prod-next"></div>
            </div>
            <div class="swiper prod-swiper">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-1.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">Fenix 6 Pro</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-2.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">Vacuum Stainless 1l</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-3.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">AeroComfort Triathlon 3.0 TSA</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-4.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">MET přilba PARACHUTE MCR MIPS</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-1.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">Fenix 6 Pro</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-2.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">Vacuum Stainless 1l</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-3.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">AeroComfort Triathlon 3.0 TSA</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/access-4.jpg" alt="">
                                <!-- <div class="perks">
                                        <span class="perk new">Novinka</span>
                                        <span class="perk best">Bestseller</span>
                                        <span class="perk sale">-50%</span>
                                    </div> -->
                                <div class="hover">
                                    <a href="" class="btn full-orange add-cart"><span>Do košíku</span></a>
                                    <a href="" class="btn border-white"><span>Detail</span></a>
                                    <ul>
                                        <li>XS</li>
                                        <li>S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                        <li>XXL</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="helper">
                                <div class="upper-text">
                                    <h3 class="small">MET přilba PARACHUTE MCR MIPS</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">950</span>
                                    <span class="final-price">16 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefits">

        <div class="container">
            <img src="data/images/row.svg" alt="" class="stroke">
            <div class="grid-block">
                <div class="perk">
                    <img src="data/images/why-us-1.svg" alt="">
                    <h3 class="small">Obrovský výběr <br>
                        cyklistického sortimentu</h3>
                </div>
                <div class="perk">
                    <img src="data/images/why-us-2.svg" alt="">
                    <h3 class="small">15 let na trhu</h3>
                </div>
                <div class="perk">
                    <img src="data/images/why-us-3.svg" alt="">
                    <h3 class="small">u vás doma <br>
                        do 2 dnů</h3>
                </div>
                <div class="perk">
                    <img src="data/images/why-us-4.svg" alt="">
                    <h3 class="small">Doprava zdarma <br>
                        od 1000 Kč</h3>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("footer.php") ?>