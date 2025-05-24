<?php
/**
 * Template Name: Ana Sayfa Şablonu
 *
 * @package Yurtdisibasin
 */

get_header();
?>

<!-- Orijinal index.html içeriğini buraya ekliyoruz -->
<main>
    <div class="container">
        <!-- Featured Sites Section -->
        <section class="featured-sites">
            <div class="section-title">
                <h2>Premium Tanıtım Yazısı Siteleri</h2>
                <p>En yüksek kaliteli ve en çok tercih edilen siteler</p>
            </div>
            
                    <!-- Filters -->
        <div class="search-filters">
            <h2 class="filter-title"><i class="fas fa-filter"></i> Filtreleme Seçenekleri</h2>
            <div class="filters">
                <div class="filter-item">
                    <div class="filter-icon">
                        <i class="fas fa-globe"></i>
                        <span>Site Adı</span>
                    </div>
                    <input type="text" id="filter-site" placeholder="Site Adı" aria-label="Site Adı">
                </div>
                <div class="filter-item">
                    <div class="filter-icon">
                        <i class="fab fa-google"></i>
                        <span>Google Index</span>
                    </div>
                    <input type="text" id="filter-index" placeholder="Min Index" aria-label="Minimum Index">
                </div>
                <div class="filter-item">
                    <div class="filter-icon">
                        <i class="fas fa-check-circle"></i>
                        <span>Kayıtlı/Kayıt</span>
                    </div>
                    <select id="filter-kayit" aria-label="Kayıt Durumu">
                        <option value="">Tümü</option>
                        <option value="Kayıtlı">Kayıtlı</option>
                        <option value="Kayıtsız">Kayıtsız</option>
                    </select>
                </div>
                <div class="filter-item">
                    <div class="filter-icon">
                        <i class="fas fa-chart-line"></i>
                        <span>Moz DA</span>
                    </div>
                    <input type="text" id="filter-da" placeholder="Min DA" aria-label="Minimum DA">
                </div>
                <div class="filter-item">
                    <div class="filter-icon">
                        <i class="fas fa-chart-bar"></i>
                        <span>Moz PA</span>
                    </div>
                    <input type="text" id="filter-pa" placeholder="Min PA" aria-label="Minimum PA">
                </div>
                <div class="filter-item">
                    <div class="filter-icon">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Site Yaşı</span>
                    </div>
                    <input type="text" id="filter-age" placeholder="Min Yaş" aria-label="Minimum Yaş">
                </div>
                <div class="filter-item">
                    <div class="filter-icon">
                        <i class="fas fa-link"></i>
                        <span>Link Türü</span>
                    </div>
                    <select id="filter-link" aria-label="Link Türü">
                        <option value="">Tümü</option>
                        <option value="Dofollow">Dofollow</option>
                        <option value="Nofollow">Nofollow</option>
                        <option value="Link Yok">Link Yok</option>
                    </select>
                </div>
                <div class="filter-item">
                    <div class="filter-icon">
                        <i class="fas fa-tag"></i>
                        <span>Ürün Fiyatı</span>
                    </div>
                    <input type="text" id="filter-price" placeholder="Min Ürün Fiy." aria-label="Minimum Fiyat">
                </div>
            </div>

            <div class="filter-actions">
                <button id="apply-filters" class="btn btn-primary">
                    <i class="fas fa-filter"></i> Filtreleri Uygula
                </button>
                <button id="clear-filters" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Filtreleri Temizle
                </button>
            </div>
        </div>

        <!-- Data Table -->
        <div class="data-table-container">
            <table class="data-table" id="sites-table">
                <thead>
                    <tr>
                        <th data-sort="site" class="sortable">Site Adı <i class="fas fa-sort"></i></th>
                        <th data-sort="index" class="sortable">Google Index <i class="fas fa-sort"></i></th>
                        <th data-sort="kayit">Kayıt</th>
                        <th data-sort="da" class="sortable">DA <i class="fas fa-sort"></i></th>
                        <th data-sort="pa" class="sortable">PA <i class="fas fa-sort"></i></th>
                        <th data-sort="age" class="sortable">Yaş <i class="fas fa-sort"></i></th>
                        <th data-sort="link">Link Türü</th>
                        <th data-sort="price" class="sortable">Fiyat <i class="fas fa-sort"></i></th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="site-info">
                                <img src="https://www.google.com/s2/favicons?domain=businessinsider.com&sz=32" alt="BusinessInsider" width="24" height="24">
                                <span>Business Insider</span>
                            </div>
                        </td>
                        <td data-value="8980000">8.980.000</td>
                        <td><span class="badge success">Kayıtlı</span></td>
                        <td data-value="94">94</td>
                        <td data-value="74">74</td>
                        <td data-value="27">27</td>
                        <td><span class="badge primary">Dofollow</span></td>
                        <td data-value="1500"><span class="price">1.500 $</span></td>
                        <td>
                            <a href="<?php echo esc_url(home_url('/businessinsider-com-tanitim-yazisi')); ?>" class="btn-circle success" data-tippy-content="Detayları Görüntüle" aria-label="Detayları Görüntüle">
                                <i class="fas fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                                        <tr>
                        <td>
                            <div class="site-info">
                                <img src="https://www.thesun.co.uk/wp-content/uploads/2016/04/icon-e1459786005667.png?strip=all" alt="BusinessInsider" width="24" height="24">
                                <span>The Sun</span>
                            </div>
                        </td>
                        <td data-value="8980000">43.600.000</td>
                        <td><span class="badge success">Kayıtlı</span></td>
                        <td data-value="94">94</td>
                        <td data-value="74">75</td>
                        <td data-value="27">30</td>
                        <td><span class="badge primary">Dofollow</span></td>
                        <td data-value="1500"><span class="price">4.000 $</span></td>
                        <td>
                            <a href="<?php echo esc_url(home_url('/thesun-co-uk')); ?>" class="btn-circle success" data-tippy-content="Detayları Görüntüle" aria-label="Detayları Görüntüle">
                                <i class="fas fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=forbes.com&sz=32" alt="Forbes" width="24" height="24">
            <span>Forbes</span>
        </div>
    </td>
    <td>19.300.000</td><td><span class="badge success">Kayıtlı</span></td><td>94
</td><td>79</td><td>31</td>
    <td><span class="badge primary">Nofollow</span></td><td><span class="price">10.000 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/forbes')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=ibtimes.com&sz=32" alt="IB Times" width="24" height="24">
            <span>IB Times</span>
        </div>
    </td>
    <td>15.300.000</td><td><span class="badge success">Kayıtlı</span></td><td>91</td><td>70</td><td>20</td>
    <td><span class="badge primary">Dofollow</span></td><td><span class="price">2.500 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/ib-times')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=latimes.com&sz=32" alt="LA Times" width="24" height="24">
            <span>LA Times</span>
        </div>
    </td>
    <td>18.800.000</td><td><span class="badge success">Kayıtlı</span></td><td>93</td><td>74</td><td>34</td>
    <td><span class="badge primary">Dofollow</span></td><td><span class="price">10.000 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/la-times')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=laweekly.com&sz=32" alt="LA Weekly" width="24" height="24">
            <span>LA Weekly</span>
        </div>
    </td>
    <td>8.600.000</td><td><span class="badge success">Kayıtlı</span></td><td>79</td><td>68</td><td>22</td>
    <td><span class="badge primary">Dofollow</span></td><td><span class="price">2.000 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/la-weekly')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=menshealth.com.au&sz=32" alt="Men's Health Australia" width="24" height="24">
            <span>Men's Health Australia</span>
        </div>
    </td>
    <td>1.800.000</td><td><span class="badge success">Kayıtlı</span></td><td>62</td><td>52</td><td>30</td>
    <td><span class="badge primary">Dofollow</span></td><td><span class="price">2.500 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/mens-health-australia')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=msn.com&sz=32" alt="MSN" width="24" height="24">
            <span>MSN</span>
        </div>
    </td>
    <td>33.000.000</td><td><span class="badge success">Kayıtlı</span></td><td>94</td><td>79</td><td>30</td>
    <td><span class="badge primary">Dofollow</span></td><td><span class="price">1.400 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/msn')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=okmagazine.com&sz=32" alt="OK Magazine" width="24" height="24">
            <span>OK Magazine</span>
        </div>
    </td>
    <td>5.400.000</td><td><span class="badge success">Kayıtlı</span></td><td>82</td><td>61</td><td>21</td>
    <td><span class="badge primary">Dofollow</span></td><td><span class="price">2.500 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/ok-magazine')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=reuters.com&sz=32" alt="Reuters" width="24" height="24">
            <span>Reuters</span>
        </div>
    </td>
    <td>18.800.000</td><td><span class="badge success">Kayıtlı</span></td><td>94</td><td>83</td><td>32</td>
    <td><span class="badge primary">Dofollow</span></td><td><span class="price">2.500 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/reuters')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=rollingstone.com&sz=32" alt="Rolling Stone" width="24" height="24">
            <span>Rolling Stone (400.000 Gösterim Garanti)</span>
        </div>
    </td>
    <td>3.600.000</td><td><span class="badge success">Kayıtlı</span></td><td>92</td><td>77</td><td>31</td>
    <td><span class="badge primary">Nofollow</span></td><td><span class="price">15.000 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/rolling-stone-tanitim-yazisi')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=independent.co.uk&sz=32" alt="The Independent" width="24" height="24">
            <span>The Independent</span>
        </div>
    </td>
    <td>28.400.000</td><td><span class="badge success">Kayıtlı</span></td><td>94</td><td>80</td><td>28</td>
    <td><span class="badge primary">Dofollow</span></td><td><span class="price">3.000 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/the-independent')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=washingtontimes.com&sz=32" alt="Washington Times" width="24" height="24">
            <span>Washington Times</span>
        </div>
    </td>
    <td>18.800.000</td><td><span class="badge success">Kayıtlı</span></td><td>89</td><td>71</td><td>27</td>
    <td><span class="badge primary">Dofollow</span></td><td><span class="price">2.000 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/washington-times')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=womenshealth.com.au&sz=32" alt="Women's Health Australia" width="24" height="24">
            <span>Women's Health Australia</span>
        </div>
    </td>
    <td>1.200.000</td><td><span class="badge success">Kayıtlı</span></td><td>59</td><td>50</td><td>10</td>
    <td><span class="badge primary">Dofollow</span></td><td><span class="price">2.500 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/womens-health-australia')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
    <td>
        <div class="site-info">
            <img src="https://www.google.com/s2/favicons?domain=yahoo.com&sz=32" alt="Yahoo" width="24" height="24">
            <span>Yahoo</span>
        </div>
    </td>
    <td>26.000.000</td><td><span class="badge success">Kayıtlı</span></td><td>93</td><td>79</td><td>30</td>
    <td><span class="badge primary">Dofollow</span></td><td><span class="price">1.750 $</span></td>
    <td><a href="<?php echo esc_url(home_url('/yahoo')); ?>" class="btn-circle success"><i class="fas fa-plus"></i></a></td>
</tr>

                </tbody>
            </table>
        </div>

        <!-- Pagination 
        <div class="pagination">
            <div class="pagination-info">
                <span>Toplam <strong>2,345</strong> sonuç arasından 1 - 100 arası gösteriliyor.</span>
            </div>
            <div class="pagination-controls">
                <a href="#" class="disabled" id="prev-page" aria-label="Önceki Sayfa">Önceki</a>
                <a href="#" class="active" aria-current="page">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <span>...</span>
                <a href="#">24</a>
                <a href="#" id="next-page" aria-label="Sonraki Sayfa">Sonraki</a>
            </div>
        </div>-->
            <div class="featured-grid">
                <!-- Featured Site 1 -->
                <div class="featured-card">
                    <div class="featured-badge">Premium</div>
                    <div class="featured-image">
                        <a href="https://yurtdisibasin.com/wp-content/uploads/2025/04/businessinder-full.png" data-lightbox="featured" data-title="BusinessInsider.com">
                            <img src="https://yurtdisibasin.com/wp-content/uploads/2025/04/businessinder-full.png" width="800" height="600" loading="lazy">
                        </a>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <img src="https://www.google.com/s2/favicons?domain=businessinsider.com&sz=64" alt="BusinessInsider" width="32" height="32">
                            <h3>BusinessInsider.com</h3>
                        </div>
                        <div class="featured-metrics">
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fab fa-google"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>Google Index</h4>
                                    <p>8.980.000</p>
                                </div>
                            </div>
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>DA Değeri</h4>
                                    <p>94</p>
                                </div>
                            </div>
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fas fa-link"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>Link Türü</h4>
                                    <p>Dofollow</p>
                                </div>
                            </div>
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>Site Yaşı</h4>
                                    <p>27 Yıl</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-price">1.500 $</div>
                        <div class="featured-actions">
                            <a href="<?php echo esc_url(home_url('/businessinsider-com-tanitim-yazisi')); ?>" class="btn-view-details">Detayları Görüntüle</a>
                        </div>
                    </div>
                </div>

                <!-- Featured Site 2 -->
                <div class="featured-card">
                    <div class="featured-badge">Premium</div>
                    <div class="featured-image">
                        <a href="https://yurtdisibasin.com/wp-content/uploads/2025/04/forbes-full-scaled.png" data-lightbox="featured" data-title="Forbes.com">
                            <img src="https://yurtdisibasin.com/wp-content/uploads/2025/04/forbes-full-scaled.png" alt="Forbes" width="800" height="600" loading="lazy">
                        </a>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <img src="https://www.google.com/s2/favicons?domain=forbes.com&sz=64" alt="Forbes" width="32" height="32">
                            <h3>Forbes.com</h3>
                        </div>
                        <div class="featured-metrics">
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fab fa-google"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>Google Index</h4>
                                    <p>9.450.000</p>
                                </div>
                            </div>
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>DA Değeri</h4>
                                    <p>95</p>
                                </div>
                            </div>
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fas fa-link"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>Link Türü</h4>
                                    <p>Dofollow</p>
                                </div>
                            </div>
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>Site Yaşı</h4>
                                    <p>25 Yıl</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-price">2.500 $</div>
                        <div class="featured-actions">
                            <a href="<?php echo esc_url(home_url('/forbes')); ?>" class="btn-view-details">Detayları Görüntüle</a>
                        </div>
                    </div>
                </div>

                <!-- Featured Site 3 -->
                <div class="featured-card">
                    <div class="featured-badge">Premium</div>
                    <div class="featured-image">
                        <a href="https://yurtdisibasin.com/wp-content/uploads/2025/04/bloomberg-full.png" data-lightbox="featured" data-title="Bloomberg.com">
                            <img src="https://yurtdisibasin.com/wp-content/uploads/2025/04/bloomberg-full.png" alt="Bloomberg" width="800" height="600" loading="lazy">
                        </a>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <img src="https://www.google.com/s2/favicons?domain=bloomberg.com&sz=64" alt="Bloomberg" width="32" height="32">
                            <h3>Bloomberg.com</h3>
                        </div>
                        <div class="featured-metrics">
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fab fa-google"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>Google Index</h4>
                                    <p>7.820.000</p>
                                </div>
                            </div>
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>DA Değeri</h4>
                                    <p>93</p>
                                </div>
                            </div>
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fas fa-link"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>Link Türü</h4>
                                    <p>Dofollow</p>
                                </div>
                            </div>
                            <div class="metric-item">
                                <div class="metric-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="metric-content">
                                    <h4>Site Yaşı</h4>
                                    <p>30 Yıl</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-price">2.200 $</div>
                        <div class="featured-actions">
                            <a href="" class="btn-view-details">Detayları Görüntüle</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recommendations -->
        <div class="recommendations">
            <h2><i class="fas fa-star"></i> Tavsiye Ettiklerimiz <i class="fas fa-star"></i></h2>
            <p>Bu kategoride tavsiye ettiğimiz siteler</p>

            <!-- Swiper Carousel -->
            <div class="swiper recommendation-swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="recommendation-card">
                            <div class="card-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="card-image">
                                <a href="#" data-lightbox="recommendations" data-title="MSN">
                                    <img src="" alt="İHA" width="800" height="600" loading="lazy">
                                </a>
                                <div class="card-overlay">
                                    <a href="<?php echo esc_url(home_url('/msn')); ?>" class="btn-view">Detayları Gör</a>
                                </div>
                            </div>
                            <div class="card-info">
                                <div class="card-logo">
                                    <img src="https://www.google.com/s2/favicons?domain=msn.com&sz=32" alt="MSN" width="32" height="32">
                                </div>
                                <div class="card-metrics">
                                    <div class="metric">
                                        <i class="fab fa-google"></i> Index: 33.000.000
                                    </div>
                                    <div class="card-price">1.400 $</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="recommendation-card">
                            <div class="card-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="card-image">
                                <a href="#" data-lightbox="recommendations" data-title="The Sun">
                                    <img src="#" alt="The Sun" width="800" height="600" loading="lazy">
                                </a>
                                <div class="card-overlay">
                                    <a href="<?php echo esc_url(home_url('/thesun-co-uk')); ?>" class="btn-view">Detayları Gör</a>
                                </div>
                            </div>
                            <div class="card-info">
                                <div class="card-logo">
                                    <img src="https://www.thesun.co.uk/wp-content/uploads/2016/04/icon-e1459786005667.png?strip=all" alt="The Sun" width="32" height="32">
                                </div>
                                <div class="card-metrics">
                                    <div class="metric">
                                        <i class="fab fa-google"></i> Index: 43.600.000
                                    </div>
                                    <div class="card-price">4.000 $</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="recommendation-card">
                            <div class="card-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="card-image">
                                <a href="#" data-lightbox="recommendations" data-title="Yahoo">
                                    <img src="#" alt="Yahoo" width="800" height="600" loading="lazy">
                                </a>
                                <div class="card-overlay">
                                    <a href="<?php echo esc_url(home_url('/yahoo')); ?>" class="btn-view">Detayları Gör</a>
                                </div>
                            </div>
                            <div class="card-info">
                                <div class="card-logo">
                                    <img src="https://www.google.com/s2/favicons?domain=yahoo.com&sz=32" alt="Yahoo" width="32" height="32">
                                </div>
                                <div class="card-metrics">
                                    <div class="metric">
                                        <i class="fab fa-google"></i> Index: 26.000.000
                                    </div>
                                    <div class="card-price">1.750 $</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Swiper Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                
                <!-- Swiper Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="quick-stats">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="stat-content">
                    <h3>Toplam Site</h3>
                    <p>2,556</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-content">
                    <h3>Tamamlanan İşlem</h3>
                    <p>15,789</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <h3>Mutlu Müşteri</h3>
                    <p>3,450</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-content">
                    <h3>Ortalama Puan</h3>
                    <p>4.8/5</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
