<?php include("header.php") ?>
<main class="main">
    <section class="subcategory">
        <div class="container">
            <div class="title-holder">
                <img class="bg" src="data/images/sub-cat-main.jpg" alt="">
                <div class="text-block">
                    <h2 class="mark">Jízdní kola</h2>
                </div>
            </div>

            <div class="grid-block">
                <a href="" class="block">
                    <h3 class="small">Horská kola</h3>
                    <img src="data/images/sub-1.jpg" alt="">
                </a>
                <a href="" class="block">
                    <h3 class="small">Silniční kola</h3>
                    <img src="data/images/sub-2.jpg" alt="">
                </a>
                <a href="" class="block">
                    <h3 class="small">Elektro kola</h3>
                    <img src="data/images/sub-3.jpg" alt="">
                </a>
                <a href="" class="block">
                    <h3 class="small">Krosová kola</h3>
                    <img src="data/images/sub-4.jpg" alt="">
                </a>
                <a href="" class="block">
                    <h3 class="small">Trekingová kola</h3>
                    <img src="data/images/sub-5.jpg" alt="">
                </a>
                <a href="" class="block">
                    <h3 class="small">Gravel</h3>
                    <img src="data/images/sub-6.jpg" alt="">
                </a>
                <a href="" class="block">
                    <h3 class="small">Cyklocross</h3>
                    <img src="data/images/sub-7.jpg" alt="">
                </a>
                <a href="" class="block">
                    <h3 class="small">Koloběžky</h3>
                    <img src="data/images/sub-8.jpg" alt="">
                </a>
                <a href="" class="block">
                    <h3 class="small">Trenažery</h3>
                    <img src="data/images/sub-9.jpg" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="flex-holder">
                <div class="wrapper-help">
                    <div class="filtering-holder">
                        <div class="close" id="close">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="bg">
                        </div>
                        <form action="" class="filter-form">
                            <h2>Filter</h2>
                            <div class="part">
                                <h3 class="small">Parametry</h3>
                                <div class="checkbox-block three-rows">
                                    <input value="main-cat" type="checkbox" name="zeny" id="zeny">
                                    <label for="zeny"><span>Ženy</span><span class="quantity">12</span></label>
                                    <input value="main-cat" type="checkbox" name="muzi" id="muzi">
                                    <label for="muzi"><span>Muži</span><span class="quantity">11</span></label>
                                    <input value="main-cat" type="checkbox" name="deti" id="deti">
                                    <label for="deti"><span>Děti</span><span class="quantity">111</span></label>
                                </div>
                            </div>

                            <div class="part">
                                <h3 class="small">Barva</h3>
                                <div class="color-holder">
                                    <input value="color-1" type="checkbox" name="color" id="color-1">
                                    <label for="color-1" style="background-color: #00ACFF;"><span></span></label>
                                    <input value="color-2" type="checkbox" name="color" id="color-2">
                                    <label for="color-2" style="background-color: #3F9532;"><span></span></label>
                                    <input value="color-3" type="checkbox" name="color" id="color-3">
                                    <label for="color-3" style="background-color: #001AFF;"><span></span></label>
                                    <input value="color-4" type="checkbox" name="color" id="color-4">
                                    <label for="color-4" style="background-color: #FF0000;"><span></span></label>
                                    <input value="color-5" type="checkbox" name="color" id="color-5">
                                    <label for="color-5" style="background-color: #F7A400;"><span></span></label>
                                    <input value="color-6" type="checkbox" name="color" id="color-6">
                                    <label for="color-6" style="background-color: #D99000;"><span></span></label>
                                </div>
                            </div>
                            <div class="part">
                                <h3 class="small">Cena od do</h3>
                                <div class="slide-part">
                                    <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                                    <!-- <label for="min_price" class="slider-label">Od:</label> -->
                                    <div class="holder">
                                        <div class="wrapper">
                                            <input type="number" min=0 id="min_price" name="min_price" class="price-range-field left" />
                                            <input type="hidden" min=0 id="min_price_hidden" name="min_price" class="price-range-field" />
                                            <span class="min_price_number_holder hide" data-price="0"></span>
                                            <span>Kč</span>
                                        </div>
                                        <!-- <label for="max_price" class="slider-label">Do:</label> -->
                                        <div class="wrapper">
                                            <input type="number" min=0 id="max_price" name="max_price" class="price-range-field" />
                                            <input type="hidden" min=0 id="max_price_hidden" name="max_price" class="price-range-field" />
                                            <span class="max_price_number_holder hide" data-price="10000"></span>
                                            <span>Kč</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="part">
                                <h3 class="small">Značka</h3>
                                <div class="checkbox-block two-rows">
                                    <input name="brand" type="checkbox" value="fox" id="fox">
                                    <label for="fox"><span>Fox</span><span class="quantity">22</span></label>
                                    <input name="brand" type="checkbox" value="trek" id="trek">
                                    <label for="trek"><span>Trek</span><span class="quantity">22</span></label>
                                    <input name="brand" type="checkbox" value="merida" id="merida">
                                    <label for="merida"><span>Merida</span><span class="quantity">22</span></label>
                                    <input name="brand" type="checkbox" value="bontrager" id="bontrager">
                                    <label for="bontrager"><span>Bontrager</span><span class="quantity">22</span></label>
                                    <input name="brand" type="checkbox" value="poc" id="poc">
                                    <label for="poc"><span>Poc</span><span class="quantity">22</span></label>
                                    <input name="brand" type="checkbox" value="osprey" id="osprey">
                                    <label for="osprey"><span>Osprey</span><span class="quantity">22</span></label>
                                    <input name="brand" type="checkbox" value="maxxis" id="maxxis">
                                    <label for="maxxis"><span>Maxxis</span><span class="quantity">22</span></label>
                                    <input name="brand" type="checkbox" value="canyon" id="canyon">
                                    <label for="canyon"><span>Canyon</span><span class="quantity">22</span></label>
                                    <input name="brand" type="checkbox" value="znacka" id="znacka">
                                    <label for="znacka"><span>Značka</span><span class="quantity">22</span></label>

                                </div>
                                <a href="" class="show-more">Zobrazit další <span class="quantity"></span></a>
                            </div>
                            <div class="part">
                                <h3 class="small">Velikost</h3>
                                <div class="checkbox-block three-rows">
                                    <input name="sizes" type="checkbox" value="XS" id="XS">
                                    <label for="XS"><span>XS</span><span class="quantity">12</span></label>
                                    <input name="sizes" type="checkbox" value="S" id="S">
                                    <label for="S"><span>S</span><span class="quantity">14</span></label>
                                    <input name="sizes" type="checkbox" value="M" id="M">
                                    <label for="M"><span>M</span><span class="quantity">15</span></label>
                                    <input name="sizes" type="checkbox" value="L" id="L">
                                    <label for="L"><span>L</span><span class="quantity">16</span></label>
                                    <input name="sizes" type="checkbox" value="XL" id="XL">
                                    <label for="XL"><span>XL</span><span class="quantity">16</span></label>

                                </div>
                            </div>
                            <div class="part">
                                <h3 class="small">Další parametry</h3>
                                <div class="checkbox-block one-rows">
                                    <input value="brand" type="checkbox" name="loremipsum" id="loremipsum">
                                    <label for="loremipsum"><span>Lorem ipsum</span><span class="quantity">12</span></label>
                                    <input value="brand" type="checkbox" name="lorem" id="lorem">
                                    <label for="lorem"><span>Lorem</span><span class="quantity">12</span></label>
                                    <input value="brand" type="checkbox" name="loremipsumdolor" id="loremipsumdolor">
                                    <label for="loremipsumdolor"><span>Lorem ipsum dolor</span><span class="quantity">12</span></label>

                                </div>
                                <a href="" class="show-more">Zobrazit další <span class="quantity"></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="banners">
                        <div class="banner big" style="background-image: url(./data/images/banner.jpg);">
                            <h3>Jak správně
                                vybrat kolo</h3>
                            <p>Ve 5 jednoduchých krocích zjistite jaké kolo by pro Vás bylo nejlepší v našem
                                jednoduchém průvodci, lorem ipsum dolor sit amet.</p>
                            <a href="" class="btn border-white"><span>spustit průvodce</span></a>
                        </div>
                        <div class="banner blue" style="background-image: url(./data/images/banner-2.jpg);">
                            <img src="data/images/question_mark.svg" alt="">
                            <h3>Nevíte si rady</h3>
                            <p>Zeptejte si našich expertů lorem ipsum dolor sit amet adipsicn lorem ipsum.</p>
                            <a href="mailTo:info@summitbikes.cz" class="mail">info@summitbikes.cz</a>
                            <a href="" class="btn border-white"><span>napište nám dotaz</span></a>
                        </div>
                    </div>
                </div>
                <div class="products-wrapper">
                    <div class="most-selled">
                        <h2 class="mark small">NEJPRODÁVÁNĚJŠÍ</h2>
                        <div class="grid-block">
                            <a href="" class="product">
                                <img src="data/images/sub-1.jpg" alt="">
                                <div class="text">
                                    <h3 class="small">Trek SB1357 Dámské lorem ipsum dolor sit amet</h3>
                                    <span>12 456 Kč</span>
                                </div>
                            </a>
                            <a href="" class="product">
                                <img src="data/images/sub-2.jpg" alt="">
                                <div class="text">
                                    <h3 class="small">Trek SB1357 Dámské lorem ipsum dolor sit amet</h3>
                                    <span>12 456 Kč</span>
                                </div>
                            </a>
                            <a href="" class="product">
                                <img src="data/images/sub-3.jpg" alt="">
                                <div class="text">
                                    <h3 class="small">Trek SB1357 Dámské lorem ipsum dolor sit amet</h3>
                                    <span>12 456 Kč</span>
                                </div>
                            </a>
                        </div>
                        <a href="" class="show-more arrow-button">Zobrazit více</a>
                        <div class="sorting-section">
                            <div class="select-block">
                                <div class="select-item">
                                    <a href="#" id="recommended" data-slug="recommended" class="item-text active">Doporučené</a>
                                </div>
                                <div class="select-item">
                                    <a href="#" id="lowest" data-slug="lowest" class="item-text">Nejlevnější</a>
                                </div>
                                <div class="select-item">
                                    <a href="#" id="highest" data-slug="highest" class="item-text">Nejdražší</a>
                                </div>
                                <div class="select-item">
                                    <a href="#" id="most" data-slug="most" class="item-text">Nejprodávanější</a>
                                </div>
                                <div class="select-item">
                                    <a href="#" id="asc" data-slug="asc" class="item-text">Abecedně</a>
                                </div>
                            </div>
                            <select name="sorting" id="sorting-select">
                                <option>recommended</option>
                                <option>highest</option>
                                <option>lowest</option>
                                <option>newest</option>
                                <option>asc</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid-block">
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
                        <div class="block" style="background-image: url(./data/images/block-bg.jpg);">

                            <h3>Jízdní kola</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-1.jpg" alt="">
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
                                    <h3 class="small">SuperCaliber 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-2.jpg" alt="">
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
                                    <h3 class="small">Slash 99XTR</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-3.jpg" alt="">
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
                                    <h3 class="small">TopFuel 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-1.jpg" alt="">
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
                                    <h3 class="small">SuperCaliber 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-2.jpg" alt="">
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
                                    <h3 class="small">Slash 99XTR</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-3.jpg" alt="">
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
                                    <h3 class="small">TopFuel 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-1.jpg" alt="">
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
                                    <h3 class="small">SuperCaliber 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-2.jpg" alt="">
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
                                    <h3 class="small">Slash 99XTR</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-3.jpg" alt="">
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
                                    <h3 class="small">TopFuel 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-1.jpg" alt="">
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
                                    <h3 class="small">SuperCaliber 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-2.jpg" alt="">
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
                                    <h3 class="small">Slash 99XTR</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-3.jpg" alt="">
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
                                    <h3 class="small">TopFuel 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-1.jpg" alt="">
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
                                    <h3 class="small">SuperCaliber 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-2.jpg" alt="">
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
                                    <h3 class="small">Slash 99XTR</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-3.jpg" alt="">
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
                                    <h3 class="small">TopFuel 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-1.jpg" alt="">
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
                                    <h3 class="small">SuperCaliber 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-2.jpg" alt="">
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
                                    <h3 class="small">Slash 99XTR</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <a href="" class="compare">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4734 9.24167C13.5941 9.36238 13.7579 9.43019 13.9286 9.43019C14.0993 9.43019 14.263 9.36238 14.3837 9.24167C14.5044 9.12096 14.5722 8.95724 14.5722 8.78652C14.5722 8.61581 14.5044 8.45209 14.3837 8.33138L12.909 6.85795H15.2143C15.7258 6.85795 16.2163 7.06114 16.578 7.42282C16.9397 7.7845 17.1429 8.27504 17.1429 8.78652V14.6365C16.3624 14.7958 15.6689 15.2393 15.1968 15.8808C14.7247 16.5224 14.5076 17.3164 14.5877 18.1089C14.6678 18.9014 15.0392 19.636 15.6301 20.1702C16.221 20.7044 16.9892 21.0002 17.7857 21.0002C18.5823 21.0002 19.3504 20.7044 19.9413 20.1702C20.5322 19.636 20.9037 18.9014 20.9837 18.1089C21.0638 17.3164 20.8467 16.5224 20.3746 15.8808C19.9025 15.2393 19.209 14.7958 18.4286 14.6365V8.78652C18.4286 7.93404 18.0899 7.11648 17.4871 6.51368C16.8843 5.91089 16.0668 5.57224 15.2143 5.57224H12.909L14.3837 4.09881C14.5044 3.9781 14.5722 3.81438 14.5722 3.64367C14.5722 3.47296 14.5044 3.30924 14.3837 3.18853C14.263 3.06782 14.0993 3 13.9286 3C13.7579 3 13.5941 3.06782 13.4734 3.18853L10.902 5.75995C10.8421 5.81967 10.7946 5.89061 10.7622 5.96871C10.7298 6.04681 10.7131 6.13054 10.7131 6.2151C10.7131 6.29965 10.7298 6.38338 10.7622 6.46148C10.7946 6.53958 10.8421 6.61052 10.902 6.67024L13.4734 9.24167ZM19.7143 17.7865C19.7143 18.0398 19.6644 18.2906 19.5675 18.5246C19.4706 18.7585 19.3285 18.9711 19.1494 19.1502C18.9703 19.3293 18.7577 19.4714 18.5237 19.5683C18.2898 19.6652 18.039 19.7151 17.7857 19.7151C17.5324 19.7151 17.2817 19.6652 17.0477 19.5683C16.8137 19.4714 16.6011 19.3293 16.422 19.1502C16.2429 18.9711 16.1009 18.7585 16.0039 18.5246C15.907 18.2906 15.8571 18.0398 15.8571 17.7865C15.8571 17.275 16.0603 16.7845 16.422 16.4228C16.7837 16.0611 17.2742 15.858 17.7857 15.858C18.2972 15.858 18.7877 16.0611 19.1494 16.4228C19.5111 16.7845 19.7143 17.275 19.7143 17.7865ZM9.42857 6.2151C9.42872 6.95609 9.17285 7.67437 8.70427 8.24839C8.23568 8.82241 7.58316 9.2169 6.85714 9.3651V15.2151C6.85714 15.7266 7.06033 16.2171 7.42201 16.5788C7.78368 16.9405 8.27422 17.1437 8.78571 17.1437H11.091L9.61628 15.6702C9.49557 15.5495 9.42776 15.3858 9.42776 15.2151C9.42776 15.0444 9.49557 14.8807 9.61628 14.76C9.73699 14.6392 9.90071 14.5714 10.0714 14.5714C10.2421 14.5714 10.4059 14.6392 10.5266 14.76L13.098 17.3314C13.1579 17.3911 13.2054 17.462 13.2378 17.5401C13.2702 17.6182 13.2869 17.702 13.2869 17.7865C13.2869 17.8711 13.2702 17.9548 13.2378 18.0329C13.2054 18.111 13.1579 18.1819 13.098 18.2417L10.5266 20.8131C10.4059 20.9338 10.2421 21.0016 10.0714 21.0016C9.90071 21.0016 9.73699 20.9338 9.61628 20.8131C9.49557 20.6924 9.42776 20.5287 9.42776 20.358C9.42776 20.1872 9.49557 20.0235 9.61628 19.9028L11.091 18.4294H8.78571C7.93323 18.4294 7.11567 18.0907 6.51287 17.4879C5.91007 16.8851 5.57143 16.0676 5.57143 15.2151V9.3651C4.97555 9.24346 4.42641 8.95528 3.98778 8.53401C3.54916 8.11274 3.23904 7.57568 3.09346 6.9852C2.94787 6.39472 2.97279 5.77506 3.16532 5.19818C3.35786 4.62129 3.7101 4.11087 4.18114 3.72619C4.65218 3.3415 5.22269 3.09835 5.82641 3.02496C6.43012 2.95157 7.04228 3.05096 7.59176 3.31159C8.14125 3.57221 8.60552 3.98338 8.93065 4.49733C9.25579 5.01129 9.42844 5.60693 9.42857 6.2151ZM8.14286 6.2151C8.14286 5.96183 8.09297 5.71105 7.99605 5.47706C7.89913 5.24308 7.75707 5.03048 7.57799 4.85139C7.39891 4.67231 7.1863 4.53025 6.95232 4.43333C6.71833 4.33641 6.46755 4.28653 6.21428 4.28653C5.96102 4.28653 5.71024 4.33641 5.47625 4.43333C5.24227 4.53025 5.02966 4.67231 4.85058 4.85139C4.6715 5.03048 4.52944 5.24308 4.43252 5.47706C4.3356 5.71105 4.28571 5.96183 4.28571 6.2151C4.28571 6.72659 4.4889 7.21713 4.85058 7.5788C5.21226 7.94048 5.7028 8.14367 6.21428 8.14367C6.72577 8.14367 7.21631 7.94048 7.57799 7.5788C7.93967 7.21713 8.14286 6.72659 8.14286 6.2151Z" fill="black" stroke="black" stroke-width="0.5" />
                                </svg>
                            </a>

                            <div class="img">
                                <img src="data/images/bike-3.jpg" alt="">
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
                                    <h3 class="small">TopFuel 99</h3>
                                    <span class="stock in">Skladem</span>
                                </div>
                                <div class="lower-text">
                                    <span class="old-cost">45 950 Kč</span>
                                    <span class="final-price">32 850 Kč</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="pagination">
                        <a href="" class="btn border-grey"><span>Načíst další</span></a>
                        <div class="pages">
                            <a href="" class="first">1</a>
                            <div class="holder">
                                <a href="" class="arrow left">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.2783 12.5841L8.33195 9.80633L11.2783 7.02857C11.3486 6.96228 11.4043 6.8836 11.4424 6.797C11.4804 6.7104 11.5 6.61758 11.5 6.52384C11.5 6.43011 11.4804 6.33729 11.4424 6.25069C11.4043 6.16409 11.3486 6.0854 11.2783 6.01912C11.2079 5.95284 11.1245 5.90026 11.0326 5.86439C10.9408 5.82852 10.8423 5.81006 10.7429 5.81006C10.6435 5.81006 10.545 5.82852 10.4532 5.86439C10.3613 5.90026 10.2779 5.95284 10.2076 6.01912L6.72211 9.30519C6.42596 9.58439 6.42596 10.0354 6.72211 10.3146L10.2076 13.6007C10.2778 13.6671 10.3613 13.7197 10.4531 13.7556C10.545 13.7916 10.6435 13.8101 10.7429 13.8101C10.8424 13.8101 10.9408 13.7916 11.0327 13.7556C11.1246 13.7197 11.208 13.6671 11.2783 13.6007C11.5668 13.3215 11.5744 12.8633 11.2783 12.5841Z" fill="#3C3C3C" />
                                    </svg>
                                </a>
                                <span>12</span>
                                <a href="" class="arrow right">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.72175 7.03603L9.66805 9.81379L6.72175 12.5916C6.65145 12.6578 6.59568 12.7365 6.55763 12.8231C6.51958 12.9097 6.5 13.0025 6.5 13.0963C6.5 13.19 6.51958 13.2828 6.55763 13.3694C6.59568 13.456 6.65145 13.5347 6.72175 13.601C6.79205 13.6673 6.87551 13.7199 6.96737 13.7557C7.05922 13.7916 7.15767 13.8101 7.25709 13.8101C7.35652 13.8101 7.45497 13.7916 7.54682 13.7557C7.63868 13.7199 7.72214 13.6673 7.79244 13.601L11.2779 10.3149C11.574 10.0357 11.574 9.5847 11.2779 9.30549L7.79244 6.01942C7.72219 5.95306 7.63875 5.9004 7.54688 5.86448C7.45502 5.82855 7.35655 5.81006 7.25709 5.81006C7.15764 5.81006 7.05917 5.82855 6.96731 5.86448C6.87544 5.9004 6.792 5.95306 6.72175 6.01942C6.43319 6.29863 6.4256 6.75682 6.72175 7.03603Z" fill="#3C3C3C" />
                                    </svg>
                                </a>
                            </div>
                            <a href="" class="last">121</a>
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