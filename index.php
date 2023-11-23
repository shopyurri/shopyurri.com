<?php
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */    
               /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */ 
               /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */ 
               /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
               /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */ 
                                                                          /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
                                                                          /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
                                                                          /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
                                                                          /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
                                                                          /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
                                                                          /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
                                                                          /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
                                                                          /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 *//* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
                                                                          /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
                                                                          /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
                                                                          /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */                    /* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 *//* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 *//* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */
/* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 *//* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 *//* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 *//* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 *//* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 *//* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 *//* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 *//* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 *//* SIEUTHICODES.COM - PHÁT TRIỂN MÃ NGUỒN 2022 - 2023 */


    require_once(__DIR__."/core/config.php");
    require_once(__DIR__."/core/function.php");

    $title = 'HOME | '.$TUANORI->site('tenweb');
    require_once(__DIR__."/pages/client/Head.php");
    require_once(__DIR__."/pages/client/Header.php");
?>
<div class="card border-0 shadow mb-5">
        <div class="card-body">    
    <div class="hk-pg-wrapper">
				    <marquee width="100%" behavior="scroll" class="marquee-noti">
            			<b>Mua Hosting, Reseller & Domain Giá Rẻ Tại https://sieuthicodes.com :)):))</b>
            		</marquee>
				</div>
				</div>
				</div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4"></div>
    <?php if(isset($getUser['username'])) { ?>
    <div class="row">
       
                <div class="col-12 col-sm-3 mb-4 mb-xxl-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h4 class="fw-normal">Số dư</h2>
                            <h5 class="fw-extrabold mb-1"><?=number_format($getUser['money']);?>đ</h3>
                            <div class="d-flex align-items-center">
                                <span>Tổng số tiền của bạn</span>
                            </div> 
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-3 mb-4 mb-xxl-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h4 class="fw-normal">Nạp hôm nay</h2>
                            <h5 class="fw-extrabold mb-1"><?=format_cash(
                            $TUANORI->get_row("SELECT SUM(`sotien`) FROM `napatm` WHERE `username` = '".$getUser['username']."' AND `thoigian` >= DATE(NOW()) AND `thoigian` < DATE(NOW()) + INTERVAL 1 DAY ")['SUM(`sotien`)'] +
                            $TUANORI->get_row("SELECT SUM(`thucnhan`) FROM `napcard` WHERE `username` = '".$getUser['username']."' AND `status` = 'thanhcong' AND `thoigian` >= DATE(NOW()) AND `thoigian` < DATE(NOW()) + INTERVAL 1 DAY ")['SUM(`thucnhan`)']
                            );?>đ</h3>
                            <div class="d-flex align-items-center">
                                <span>Tổng số tiền nạp hôm nay</span>
                            </div> 
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-3 mb-4 mb-xxl-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h4 class="fw-normal">Hosting đang có</h2>
                            <h5 class="fw-extrabold mb-1"><?=format_cash($TUANORI->num_rows("SELECT * FROM `historyhost` WHERE `username` = '".$getUser['username']."' AND `status` = 'hoatdong' "));?> host</h3>
                            <div class="d-flex align-items-center">
                                <span>Đang hoạt động</span>
                            </div> 
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-3 mb-4 mb-xxl-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h4 class="fw-normal">VPS đang có</h2>
                            <h5 class="fw-extrabold mb-1"><?=format_cash($TUANORI->num_rows("SELECT * FROM `listvps` WHERE `username` = '".$getUser['username']."' AND `status` = 'hoatdong' "));?> VPS</h3>
                            <div class="d-flex align-items-center">
                                <span>Đang hoạt động</span>
                            </div> 
                        </div>
                      </div>
                </div>
      

    </div>
    <?php } ?>
    <br>
<div class="c-content-title-1">
    <h5 class="c-center c-font-uppercase c-font-bold"><i class="fa fa-code"></i> Dịch Vụ Của Chúng Tôi Mang Đến Cho Bạn</h5>
    <div class="c-line-center c-theme-bg"></div>
</div>
    <div class="row">
        <div class="col-12 col-xl-6 mb-4">
            <div class="row">
                <div class="col-12 col-xxl-6 mb-4 mb-xxl-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="text-center">
                                <span class="display-5"><i class="fa fa-shopping-cart"></i></span>
                                <h2 class="mt-3">HOSTING</h2>
                                <p>Hosting chất lượng, máy chủ Việt Nam.</p>
                                <a href="<?=BASE_URL('host');?>" class="btn btn-info">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xxl-6 mb-4 mb-xxl-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="text-center">
                                <span class="display-5"><i class="fa fa-shopping-cart"></i></span>
                                <h2 class="mt-3">RESELLER</h2>
                                <p>Reseller chất lượng, không giới hạn tài khoản</p>
                                <a href="<?=BASE_URL('reseller');?>" class="btn btn-danger">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 mb-4">
            <div class="row">
                <div class="col-12 col-xxl-6 mb-4 mb-xxl-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="text-center">
                                <span class="display-5"><i class="fa fa-shopping-cart"></i></span>
                                <h2 class="mt-3">TÊN MIỀN</h2>
                                <p>Tên miền chính chủ. Không bị gián đoạn sử dụng</p>
                                <a href="<?=BASE_URL('Mua-mien');?>" class="btn btn-warning">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xxl-6 mb-4 mb-xxl-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="text-center">
                                <span class="display-5"><i class="fa fa-money"></i></span>
                                <h2 class="mt-3">NẠP TIỀN</h2>
                                <p>NẠP TIỀN VÀO TÀI KHOẢN</p>
                                <a href="<?=BASE_URL('Banking');?>" class="btn btn-success">Nạp ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <br>
    	<div class="card">
      <div class="card-body">
        <h5 class="mb-0 text-uppercase">Thông Báo Quan Trọng</h5>
        <div class="my-3 border-top"></div>
        <div class="content-body">
          <p>
              <p><strong>Thông Báo : Tham Gia Box Chat Của Hệ Thống Để Nhận Nhiều Mã Giảm Giá Lên Đến 99%&nbsp;<strong><a href="https://zalo.me/g/qkxboe185"><span style="color:#ff0000">Tại Đ&acirc;y</span></a></strong></div>
                    					</strong></p>

<p><strong class="text-danger">WEB KHÔNG CÒN LỖI NẠP AUTO NỮA </strong></p>

<p>Mọi Thắc Mắc Xin Li&ecirc;n Hệ: <a href="//zalo.me/0776550825" target="_blank"><span style="color:#9b59b6">Zalo Tại Đ&acirc;y</span></a></p>
<p><span style="color:#e67e22">V&agrave;o nh&oacute;m zalo để nhận được những th&ocirc;ng b&aacute;o v&agrave; khuyến m&atilde;i nhanh nhất nh&eacute;</span></p>


          </p>
        </div>
      </div>
    </div>
			
			<div class="site-section">
<div class="container mt-5">
<h2 class="section__title">
Quyền Lợi Khi Sử Dụng Dịch Vụ Bên Chúng Tôi
</h2>
<p class="section__subtitle p-1">
Website Đã Vận Hành Nhiều Năm Trong Lĩnh Vực Dịch Vụ. Mang Lại Sự Hài Lòng Về Chất Lượng Của Mỗi Sản
Phẩm.
</p>
<div class="section__content">
<div class="row row--eq-height features features--centered">
<div class="col-lg-4 col-sm-12">
<div class="feature">
<div class="feature__body ">
<div class="feature__icon">
<svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#mback2-clip0)">
<path d="M57.3 68.1L51.1 72.4L44 68.2H57C57.1 68.2 57.2 68.2 57.3 68.1Z" fill="#D2EAE4"></path>
<path d="M62.2 63V62.2C62.2 60.1 61 58.4 59.2 57.5L68.2 53.8C70.7 52.8 73.7 53.5 75.3 55.7L76.8 54.7L61.7 65C62 64.4 62.2 63.7 62.2 63Z" fill="#D2EAE4"></path>
<path d="M77.2 54.3L76.9 54.5L61.7 65C62 64.4 62.1 63.7 62.1 62.9V62.1C62.1 60 60.9 58.3 59.1 57.4L57.7 58C59.7 58.4 61.1 60.1 61.1 62.1V63C61.1 65.3 59.2 67.1 57 67.1H31.1V68.1H42.1V68.2L51.2 73.7L80.2 53.5C79.1 53.5 78.1 53.7 77.2 54.3ZM51.2 72.4L44.1 68.2H57.1C57.2 68.2 57.3 68.2 57.4 68.2L51.2 72.4Z" fill="#67BDA0"></path>
<path d="M83.6 62.1C83.4 62.3 83.3 62.4 83.1 62.5L50.7 86C49.5 86.9 47.9 87.4 46.4 87.4C45.7 87.4 44.9 87.3 44.1 87L18.4 78.5C15.1 77.4 11.5 77.7 8.3 79.1C7.7 79.4 7.2 79.5 6.5 79.6L5.4 79.7C3.5 79.9 2 78.5 2 76.6V62.1C2 61.6 2.3 61.2 2.7 61L18.3 55.2C21.4 54.1 24.8 53.7 28.1 54.1L56.3 57.3L56.9 57.4H57C57.1 57.4 57.2 57.4 57.3 57.5C59.3 57.9 60.7 59.6 60.7 61.6V62.5C60.7 64.8 58.8 66.6 56.6 66.6H30.8V67.6H41.8V67.7L50.9 73.2L79.9 53C81.3 53 82.7 53.6 83.7 54.6C85.8 56.8 85.7 60.2 83.6 62.1Z" fill="url(#mback2-paint0_linear)"></path>
<path d="M60 27.5C60 36.6127 52.6127 44 43.5 44C34.3873 44 27 36.6127 27 27.5C27 18.3873 34.3873 11 43.5 11C52.6127 11 60 18.3873 60 27.5Z" fill="url(#mback2-paint1_linear)"></path>
<path d="M60.6995 44.8981C69.2394 36.4605 70.5303 22.8611 63.2813 12.9345C55.2379 2.11458 39.9456 -0.267798 29.0225 7.77273C28.0294 8.46759 27.0364 9.26172 26.242 10.1551C17.7021 18.5927 16.5105 32.0928 23.7595 42.0194C29.8169 50.1592 39.9456 53.5342 49.2799 51.3504" stroke="#3D2B77" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M45.1429 30.2454C45.1429 29.7769 45 29.3755 44.7143 28.974C44.4286 28.6394 43.9286 28.3717 43.1429 28.171C42.4286 27.9033 41.7857 27.7026 41.2143 27.4349C40.7143 27.1673 40.2857 26.8327 39.8571 26.632C39.5 26.2974 39.1429 25.8959 39 25.4275C38.8571 25.026 38.6429 24.4238 38.6429 23.8216C38.6429 22.7509 39 21.881 39.7143 21.2119C40.4286 20.5428 41.4286 20.1413 42.5714 20.0074V18H44.2143V20.0074C45.3571 20.1413 46.3571 20.6097 47 21.4796C47.6429 22.2156 47.9286 23.2862 47.9286 24.4907H45.0714C45.0714 23.7546 44.9286 23.1524 44.5714 22.8178C44.2143 22.4833 43.7857 22.2156 43.2143 22.2156C42.6429 22.2156 42.2857 22.3494 41.9286 22.6171C41.5714 22.8848 41.5 23.2862 41.5 23.8216C41.5 24.3569 41.6429 24.6245 41.9286 25.026C42.2143 25.2937 42.7143 25.6283 43.5714 25.8959C44.3571 26.2305 45 26.4981 45.5714 26.6989C46.0714 26.9665 46.5 27.3011 46.9286 27.5688C47.2857 27.9033 47.5714 28.3048 47.7143 28.7732C47.8571 29.1747 48 29.6431 48 30.3123C48 31.3829 47.6429 32.2528 46.9286 32.9219C46.2143 33.5911 45.2143 33.9926 44 34.1264V36H42.3571V34.1264C41 33.9926 39.9286 33.5242 39.1429 32.7881C38.4286 32.052 38 30.9145 38 29.71H40.8571C40.8571 30.4461 41 31.0483 41.3571 31.3829C41.7143 31.7844 42.2143 31.9851 43 31.9851C43.6429 31.9851 44.0714 31.8513 44.4286 31.5836C45 31.1822 45.1429 30.7138 45.1429 30.2454Z" fill="white"></path>
<path d="M60 37V45H68" stroke="#3D2B77" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
</path>
</g>
<defs>
<linearGradient id="mback2-paint0_linear" x1="2" y1="70.4273" x2="85.2259" y2="70.4273" gradientUnits="userSpaceOnUse">
<stop stop-color="#C7E8DF"></stop>
<stop offset="1" stop-color="#E8F5F2"></stop>
</linearGradient>
<linearGradient id="mback2-paint1_linear" x1="27" y1="32.8804" x2="60" y2="32.8804" gradientUnits="userSpaceOnUse">
<stop stop-color="#00915E"></stop>
<stop offset="1" stop-color="#1EAC7A"></stop>
</linearGradient>
<clipPath id="mback2-clip0">
<rect width="88" height="88" fill="white"></rect>
</clipPath>
</defs>
</svg>
</div>
<h4 class="feature__title h6">
Thanh Toán Nạp Tiền Nhanh Chóng
</h4>
<p class="feature__desc">
Đã Tích Hợp Nhiều Hình Thức Thanh Toán Vô Cùng Tiện Lợi.
</p>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-12">
<div class="feature">
<div class="feature__body ">
<div class="feature__icon">
<svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#onec8-clip0)">
<path d="M53 21H63" stroke="url(#onec8-paint0_linear)" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"></path>
<path d="M20 21H30" stroke="#35226F" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"></path>
<path d="M41 2V11" stroke="#35226F" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"></path>
<path d="M57 6L49 14" stroke="url(#onec8-paint1_linear)" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round">
</path>
<path d="M26 6L34 14" stroke="url(#onec8-paint2_linear)" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round">
</path>
<path d="M62.3 80.9L36.7 81.2C36.6 78.8 36.5 76.4 36.4 74.5C36.4 73.6 35.8 72.9 34.9 72.6C32.9 71.5 31.2 70.3 29.5 68.8C27.9 67.4 26.3 65.8 24.7 64.1C23.9 63.3 23 62.4 22.2 61.5C21.1 60.5 20.2 59.6 19.3 58.8C16.2 56 13.8 53.8 16.5 50.5C17.2 49.6 18.4 49.1 19.8 48.9C22.6 48.6 26.3 49.4 29.9 52C30.8 52.7 33.9 53.6 34.2 53.8C34.5 53.2 35.2 51.5 35.4 46.7L36.1 20.9C36 18.3 36.9 15.5 41.4 15.4C44.2 15.4 46.2 17.6 46.3 20.6L46.7 34.2C47.3 34 48 33.9 48.6 33.9C50.8 33.9 52.8 34.7 54 36C54.6 35.7 55.3 35.5 56 35.4C56.4 35.3 56.7 35.3 57.1 35.3C59.3 35.2 61.3 36.1 62.5 37.4C63.1 37.1 63.8 36.9 64.5 36.8C64.8 36.8 65.2 36.7 65.5 36.7C69 36.6 71.9 38.7 72 41.4L73 48C73.1 48.1 73.1 48.2 73.1 48.3C74.1 53.2 74.1 53.3 74.1 59.9V60.4C74.1 62.7 73.3 67 72.9 68.3C72.5 69.3 71.7 70.2 70.7 70.9C70.7 70.9 70.6 71 70.4 71.2C70 71.7 69.8 72.4 69.8 73C69.9 74.9 70.5 79.4 70.5 79.4L62.3 80.9Z" fill="url(#onec8-paint3_linear)"></path>
<path d="M73.9001 88.4L72.0001 74L33.0001 77V88L73.9001 88.4Z" fill="url(#onec8-paint4_linear)"></path>
<path d="M48.1 52C47.9 52 47.8 52 47.6 51.9C47.3 51.8 47.1 51.5 47.1 51.1L46.7 34.3C47.3 34.1 48 34 48.6 34L49 51.1C49.1 51.5 48.7 52 48.1 52Z" fill="url(#onec8-paint5_linear)"></path>
<path d="M55.5 52.2C55.3 52.2 55.2 52.2 55 52.1C54.7 51.9 54.5 51.7 54.5 51.3L54.2 36.1C54.8 35.8 55.5 35.6 56.2 35.5L56.5 51.3C56.4 51.8 56 52.2 55.5 52.2Z" fill="url(#onec8-paint6_linear)"></path>
<path d="M63.9 52C63.7 52 63.6 52 63.4 51.9C63.1 51.8 62.9 51.5 62.9 51.1L62.6 37.5C63.2 37.2 63.9 37 64.6 36.9L64.9 51.1C64.9 51.6 64.4 52 63.9 52Z" fill="url(#onec8-paint7_linear)"></path>
</g>
<defs>
<linearGradient id="onec8-paint0_linear" x1="57.2187" y1="22" x2="57.2187" y2="21" gradientUnits="userSpaceOnUse">
<stop offset="1.81145e-07" stop-color="#2090F8"></stop>
<stop offset="1" stop-color="#336BFD"></stop>
</linearGradient>
<linearGradient id="onec8-paint1_linear" x1="52.375" y1="14" x2="52.375" y2="6" gradientUnits="userSpaceOnUse">
<stop offset="1.81145e-07" stop-color="#2090F8"></stop>
<stop offset="1" stop-color="#336BFD"></stop>
</linearGradient>
<linearGradient id="onec8-paint2_linear" x1="29.375" y1="14" x2="29.375" y2="6" gradientUnits="userSpaceOnUse">
<stop offset="1.81145e-07" stop-color="#2090F8"></stop>
<stop offset="1" stop-color="#336BFD"></stop>
</linearGradient>
<linearGradient id="onec8-paint3_linear" x1="44.714" y1="15.4" x2="44.714" y2="81.2" gradientUnits="userSpaceOnUse">
<stop stop-color="#B1D0FF"></stop>
<stop offset="1" stop-color="#DBEDFD"></stop>
</linearGradient>
<linearGradient id="onec8-paint4_linear" x1="50.2547" y1="88.4" x2="50.2547" y2="74" gradientUnits="userSpaceOnUse">
<stop offset="1.81145e-07" stop-color="#2090F8"></stop>
<stop offset="1" stop-color="#336BFD"></stop>
</linearGradient>
<linearGradient id="onec8-paint5_linear" x1="47.6768" y1="52" x2="47.6768" y2="34" gradientUnits="userSpaceOnUse">
<stop offset="1.81145e-07" stop-color="#2090F8"></stop>
<stop offset="1" stop-color="#336BFD"></stop>
</linearGradient>
<linearGradient id="onec8-paint6_linear" x1="55.1703" y1="52.2" x2="55.1703" y2="35.5" gradientUnits="userSpaceOnUse">
<stop offset="1.81145e-07" stop-color="#2090F8"></stop>
<stop offset="1" stop-color="#336BFD"></stop>
</linearGradient>
<linearGradient id="onec8-paint7_linear" x1="63.5703" y1="52" x2="63.5703" y2="36.9" gradientUnits="userSpaceOnUse">
<stop offset="1.81145e-07" stop-color="#2090F8"></stop>
<stop offset="1" stop-color="#336BFD"></stop>
</linearGradient>
<clipPath id="onec8-clip0">
<rect width="88" height="88" fill="white"></rect>
</clipPath>
</defs>
</svg>
</div>
<h4 class="feature__title h6">
Dễ Dàng Sử Dụng
</h4>
<p class="feature__desc">
Giao Diện Đẹp Mắt Dễ Dùng Mang Lại Sự Thoải Mái Cho Khách Hàng.
</p>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-12">
<div class="feature">
<div class="feature__body ">
<div class="feature__icon">
<svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#sde8-clip0)">
<path d="M84.4001 39.2L4.00006 49C2.80006 41.6 2 29 10.6001 19.5L10.7001 19.4C14.9001 12.3 30.1001 4.3 45.3001 4.3C52.7001 4.3 59.9001 6.5 66.6001 10.8L67.4001 11.3C75.8001 16.5 84.4001 22.5 84.4001 39.2Z" fill="url(#sde8-paint0_linear)"></path>
<path d="M44 86C20.804 86 2 67.196 2 44C2 20.804 20.804 2 44 2C67.196 2 86 20.804 86 44C86 54.757 81.956 64.5694 75.3055 72" stroke="#3D2B77" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M74 62V73H84" stroke="#3D2B77" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M31 67.4C30.5 67.9 29.9 68.1 29.1 68.1C28.2 68.1 27.5 67.8 27 67.2C26.5 66.6 26.2 65.8 26.2 64.8C26.2 64.2 26.3 63.6 26.6 63.1C26.9 62.5 27.2999 62.1 27.7999 61.9C28.2999 61.6 28.9 61.5 29.6 61.5C30.2 61.5 30.8 61.7 31.4 62C31.9 62.3 32.2999 62.8 32.5999 63.4C32.8999 64 33 64.7 33 65.5V66.1C33 67.6 32.5999 69 31.7999 69.9C30.9999 70.8 29.8 71.3 28.4 71.3H27.9V69.8H28.2999C29.7999 69.6 30.8 68.8 31 67.4ZM29.5 66.7C29.8 66.7 30.0999 66.6 30.2999 66.5C30.4999 66.4 30.6999 66.1 30.7999 65.9V65.1C30.7999 64.4 30.7 63.9 30.4 63.7C30.1 63.3 29.8 63.2 29.4 63.2C28.9999 63.2 28.6999 63.4 28.4 63.7C28.1 64 28 64.5 28 65C28 65.5 28.1 66 28.4 66.3C28.9 66.5 29 66.7 29.5 66.7Z" fill="#6B4DC4"></path>
<path d="M38.8 67.4C38.3 67.9 37.7 68.1 36.9 68.1C36 68.1 35.3 67.8 34.8 67.2C34.3 66.6 34 65.8 34 64.8C34 64.2 34.1 63.6 34.4 63.1C34.7 62.5 35.1 62.1 35.6 61.9C36.1 61.6 36.7 61.5 37.4 61.5C38 61.5 38.6 61.7 39.2 62C39.8 62.3 40.1 62.8 40.4 63.4C40.7 64 40.8 64.7 40.8 65.5V66.1C40.8 67.6 40.4 69 39.6 69.9C38.8 70.8 37.6 71.3 36.2 71.3H35.7V69.8H36.1C37.8 69.6 38.7 68.8 38.8 67.4ZM37.5 66.7C37.8 66.7 38.1 66.6 38.3 66.5C38.5 66.4 38.7 66.1 38.8 65.9V65.1C38.8 64.4 38.7 63.9 38.4 63.7C38.1 63.3 37.8 63.2 37.4 63.2C37 63.2 36.7 63.4 36.4 63.7C36 64 35.9 64.5 35.9 65C35.9 65.5 36 66 36.3 66.3C36.7 66.5 37 66.7 37.5 66.7Z" fill="#6B4DC4"></path>
<path d="M42.2999 70.4C42.2999 70.1 42.3999 69.8 42.5999 69.6C42.7999 69.4 43.0999 69.3 43.3999 69.3C43.6999 69.3 43.9999 69.4 44.1999 69.6C44.3999 69.8 44.4999 70 44.4999 70.4C44.4999 70.7 44.3999 71 44.1999 71.1C43.9999 71.3 43.6999 71.4 43.3999 71.4C43.0999 71.4 42.7999 71.3 42.5999 71.1C42.2999 70.9 42.2999 70.7 42.2999 70.4Z" fill="#6B4DC4"></path>
<path d="M50.5 67.4C50 67.9 49.3999 68.1 48.5999 68.1C47.6999 68.1 47 67.8 46.5 67.2C46 66.6 45.7 65.8 45.7 64.8C45.7 64.2 45.7999 63.6 46.0999 63.1C46.3999 62.5 46.7999 62.1 47.2999 61.9C47.7999 61.6 48.3999 61.5 49.0999 61.5C49.6999 61.5 50.3 61.7 50.9 62C51.5 62.3 51.7999 62.8 52.0999 63.4C52.3999 64 52.5 64.7 52.5 65.5V66.1C52.5 67.6 52.0999 69 51.2999 69.9C50.4999 70.8 49.1 71.2 47.7 71.3H47.2V69.8H47.5999C49.4999 69.6 50.3 68.8 50.5 67.4ZM49.2999 66.7C49.5999 66.7 49.8999 66.6 50.0999 66.5C50.2999 66.4 50.4999 66.1 50.5999 65.9V65.1C50.5999 64.4 50.5 63.9 50.2 63.7C49.9 63.3 49.6 63.2 49.2 63.2C48.8 63.2 48.5 63.4 48.2 63.7C47.9 64 47.7999 64.5 47.7999 65C47.7999 65.5 47.9 66 48.2 66.3C48.5 66.5 48.7999 66.7 49.2999 66.7Z" fill="#6B4DC4"></path>
<path d="M53.7999 63.3C53.7999 62.7 53.9999 62.2 54.3999 61.9C54.7999 61.5 55.2999 61.3 55.8999 61.3C56.4999 61.3 57.0999 61.5 57.3999 61.9C57.6999 62.3 57.9999 62.8 57.9999 63.3V63.8C57.9999 64.4 57.7999 64.9 57.3999 65.2C56.9999 65.5 56.4999 65.7 55.8999 65.7C55.2999 65.7 54.7999 65.5 54.3999 65.1C53.9999 64.7 53.7999 64.2 53.7999 63.7V63.3ZM54.9999 63.9C54.9999 64.2 55.0999 64.4 55.1999 64.5C55.2999 64.6 55.5999 64.7 55.7999 64.7C56.0999 64.7 56.1999 64.6 56.3999 64.5C56.5999 64.4 56.5999 64.1 56.5999 63.8V63.3C56.5999 63 56.4999 62.8 56.3999 62.6C56.2999 62.4 55.9999 62.4 55.7999 62.4C55.5999 62.4 55.3999 62.5 55.1999 62.6C54.9999 62.8 54.9999 63 54.9999 63.3V63.9ZM56.2999 70.6L55.3999 70.1L60.1999 62.6L61.0999 63.1L56.2999 70.6ZM58.4999 68.8C58.4999 68.2 58.6999 67.7 59.0999 67.4C59.4999 67 59.9999 66.8 60.5999 66.8C61.1999 66.8 61.6999 67 62.0999 67.3C62.4999 67.7 62.6999 68.2 62.6999 68.7V69.4C62.6999 70 62.4999 70.5 62.0999 70.8C61.7999 71.2 61.2999 71.5 60.6999 71.5C60.0999 71.5 59.4999 71.3 59.1999 70.9C58.7999 70.5 58.5999 70 58.5999 69.5L58.4999 68.8ZM59.7999 69.4C59.7999 69.6 59.8999 69.9 59.9999 70C60.1999 70.2 60.3999 70.3 60.5999 70.3C61.0999 70.3 61.3999 70 61.3999 69.4V68.9C61.3999 68.6 61.2999 68.4 61.1999 68.3C60.8999 68.1 60.6999 68.1 60.4999 68.1C60.2999 68.1 59.9999 68.2 59.8999 68.3C59.6999 68.5 59.6999 68.7 59.6999 69L59.7999 69.4Z" fill="#6B4DC4"></path>
<path d="M58 34H52V42C52 43.1 51.1 44 50 44H37C35.8 44 35 43.1 35 42V34H29C27.6 34 27.1 32.7 28 31.5L42 11C42.7 10 43.8 9.4 45 11L60.2 31.5C61 32.8 59.6 34 58 34Z" fill="url(#sde8-paint1_linear)"></path>
<path d="M36 47H51" stroke="#7D64C7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M36 51H51" stroke="#7D64C7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M36 55H51" stroke="#7D64C7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
</g>
<defs>
<linearGradient id="sde8-paint0_linear" x1="3.27592" y1="23.0988" x2="84.4102" y2="23.0988" gradientUnits="userSpaceOnUse">
<stop stop-color="#E4DFF1"></stop>
<stop offset="1" stop-color="#E4DFF1" stop-opacity="0.4"></stop>
</linearGradient>
<linearGradient id="sde8-paint1_linear" x1="43.9899" y1="9.9382" x2="43.9899" y2="44" gradientUnits="userSpaceOnUse">
<stop offset="0.0103002" stop-color="#5A3BC5"></stop>
<stop offset="0.9927" stop-color="#9C74F7"></stop>
</linearGradient>
<clipPath id="sde8-clip0">
<rect width="88" height="88" fill="white"></rect>
</clipPath>
</defs>
</svg>
</div>
<h4 class="feature__title h6">
Tốc Độ Vượt Trội
</h4>
<p class="feature__desc">
Hệ Thống Xử Lý Tốc Độ. Với Những Công Nghệ Mới Nhất Đem Lại Sự Tối Ưu Cho Từng Sản
Phẩm
</p>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-12">
<div class="feature">
<div class="feature__body ">
<div class="feature__icon">
<svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M50 58V21.5842C50 14.1579 45.949 7 36.6615 7H23.817C16.671 7 11 11.9211 11 18.6316V34.7368" stroke="#F6DACD" stroke-width="8" stroke-miterlimit="10" stroke-linecap="round"></path>
<rect y="30" width="60" height="53" rx="8" fill="url(#freesslo-0_linear)">
</rect>
<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M0 38V63L60 41V38C60 33.5817 56.4183 30 52 30H8C3.58172 30 0 33.5817 0 38Z" fill="url(#freesslo-1_linear)"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M34 57.1973C35.7934 56.1599 37 54.2208 37 52C37 48.6863 34.3137 46 31 46C27.6863 46 25 48.6863 25 52C25 54.2208 26.2066 56.1599 28 57.1973V63C28 64.6569 29.3431 66 31 66C32.6569 66 34 64.6569 34 63V57.1973Z" fill="white"></path>
<circle cx="67" cy="67" r="19" fill="white" stroke="#3D2B77" stroke-width="4">
</circle>
<path d="M60 68L66 73L74 62" stroke="#F35E2D" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
</path>
<defs>
<linearGradient id="freesslo-0_linear" x1="30" y1="83" x2="30" y2="30" gradientUnits="userSpaceOnUse">
<stop stop-color="#F67A3C"></stop>
<stop offset="0.9942" stop-color="#F6693C"></stop>
</linearGradient>
<linearGradient id="freesslo-1_linear" x1="1.31671e-07" y1="47.8026" x2="60" y2="47.8026" gradientUnits="userSpaceOnUse">
<stop stop-color="#FDC2A6"></stop>
<stop offset="1" stop-color="#E6B29A" stop-opacity="0"></stop>
</linearGradient>
</defs>
</svg>
</div>
<h4 class="feature__title h6">
Độ Bảo Mật Cao
</h4>
<p class="feature__desc">
Với Chương Trình Được Mã Hóa Đảm Bảo Thông Tin Cho Khách Hàng.
</p>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-12">
<div class="feature">
<div class="feature__body ">
<div class="feature__icon">
<svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M56 63.6L77.7 86.6C79.5 88.4 82.7 88.4 84.6 86.6L86.6 84.6C88.5 82.8 88.4 80.3 86.6 78.6L84.6 76.6L80.6 72.6L64.8 56.6L64.5 56L56 63.6Z" fill="#9C74F7"></path>
<path d="M75 37.5C75 45.8 71.8 53.7 65.9 59.7C60 65.7 52.2 69 44 69C26.7 69 12 54.6 12 37.5C12 20.7 26.4 7 44 7C52.3 7 60.1 10.1 65.9 15.9C71.7 21.6 75 29.3 75 37.5Z" fill="url(#fdd8-paint0_linear)"></path>
<path d="M44 3C24.6 3 8 18.1 8 37.5C8 56.9 24.7 73 44 73C63.3 73 79 56.8 79 37.5C79 18.2 63.3 3 44 3ZM44 69C26.7 69 12 54.6 12 37.5C12 20.7 26.4 7 44 7C52.3 7 60.1 10.1 65.9 15.9C71.7 21.6 75 29.3 75 37.5C75 45.8 71.8 53.7 65.9 59.7C60 65.7 52.2 69 44 69Z" fill="#3D2B77"></path>
<path d="M88 30.0201V46.9799C88 49.3668 86.2 51 84 51H4C1.8 51 0 49.2412 0 46.9799V30.0201C0 27.8844 1.7 26 4 26H84C86.2 26 88 28.0101 88 30.0201Z" fill="url(#fdd8-paint1_linear)"></path>
<path d="M42.9 40.8L44.6 33.4H47.1L44.1 44.2H42.1L39.8 36.8L37.4 44.2H35.4L32.4 33.4H34.8L36.6 40.8L38.8 33.4H40.6L42.9 40.8Z" fill="white"></path>
<path d="M58.3 40.8L60 33.4H62.4001L59.4001 44.2H57.4001L55.1 36.8L52.8 44.2H50.8L47.8 33.4H50.2001L52 40.8L54.2001 33.4H56L58.3 40.8Z" fill="white"></path>
<path d="M73.6 40.8L75.3 33.4H77.7L74.7 44.2H72.7L70.4 36.8L68.1 44.2H66.1L63.1 33.4H65.5L67.3 40.8L69.5 33.4H71.3L73.6 40.8Z" fill="white"></path>
<path d="M10.8 44H13.3C14.8 44 15.6 43.5 15.6 42.1V35.4C15.6 34 14.6 32.5 13 32.5H11C9.5 32.5 8.5 34 8.5 35.4V42.1C8.5 43.7 9.1 44 10.8 44Z" stroke="white" stroke-miterlimit="10"></path>
<path d="M16 37H8C7.4 37 7 37.6 7 38.3V44C7 44.6 7 45 7.8 45H16.3C16.9 45 17 44.7 17 44V38.2C17 37.7 16.6 37 16 37ZM12 39.2C12.5 39.2 13 39.6 13 40.2C12.9 40.6 12.8 41 12.4 41.2V42.2C12.4 42.5 12.2 42.7 12 42.7C11.7 42.7 11.6 42.4 11.6 42.2V41.2C11.3 41.1 11 40.6 11 40.2C11 39.6 11.4 39.2 12 39.2Z" fill="white"></path>
<path d="M26 26H24V51H26V26Z" fill="#3D2B77"></path>
<defs>
<linearGradient id="fdd8-paint0_linear" x1="52.7982" y1="6.99879" x2="52.7982" y2="59.0788" gradientUnits="userSpaceOnUse">
<stop stop-color="#DDD8EC"></stop>
<stop offset="1" stop-color="#F2F0F8"></stop>
</linearGradient>
<linearGradient id="fdd8-paint1_linear" x1="-4.82851e-07" y1="38.5628" x2="88" y2="38.5628" gradientUnits="userSpaceOnUse">
<stop offset="0.0103002" stop-color="#5A3BC5"></stop>
<stop offset="0.9927" stop-color="#9C74F7"></stop>
</linearGradient>
</defs>
</svg>
</div>
<h4 class="feature__title h6">
Tìm Kiếm Dễ Dàng
</h4>
<p class="feature__desc">
Có Thể Tìm Hiểu Và Xem Về Website Trên Mọi Nền Tảng MXH.
</p>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-12">
<div class="feature">
<div class="feature__body ">
<div class="feature__icon">
<svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M41.0001 88C3.90005 74.5 4.50005 45 5.00005 19C5.00005 17.4 5.00005 15.5 5.00005 14C19.4001 13.4 31.1001 8.6 41.0001 0C50.9001 8.6 62.6001 13.3 77.0001 14C77.0001 15.5 76.9001 17.4 77.0001 19C77.6001 45 78.1001 74.5 41.0001 88Z" fill="url(#rcl8-paint0_linear)"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M76.8333 39.0285L6.85054 50.9992C4.5838 40.6439 4.79674 29.5719 4.99874 19.0681L5.00005 19V14C19.4001 13.4 31.1001 8.6 41.0001 0C50.9001 8.6 62.6001 13.3 77.0001 14C77.0001 14.0202 77 14.0404 77 14.0607C76.9992 14.5265 76.9893 15.0295 76.979 15.5492C76.9564 16.6916 76.9323 17.9143 77 18.9991V14.0607M77 36.0728C76.9563 37.0593 76.9013 38.0449 76.8333 39.0285L77 39V36.0728Z" fill="url(#rcl8-paint1_linear)"></path>
<path d="M37.1 62H44.9C49.9 62 54 58.1 54 53V29.5C54 24.6 50.2 20 45 20H37C32 20 28 24 28 29.1V53.1C28 58.1 32.1 62 37.1 62Z" stroke="#35226F" stroke-width="4" stroke-miterlimit="10"></path>
<path d="M54.9 36H27.1C24.9 36 23 37.8259 23 40.2963V60.7037C23 63.0667 24.8 65 27.1 65H54.9C57.1 65 59 63.1741 59 60.7037V40.2963C59 37.9333 57.1 36 54.9 36ZM42 49.963V53.1852C42 54.1519 41.9 54.7963 41 54.7963C40.1 54.7963 40 54.1519 40 53.1852V49.963C38.5 49.4259 38 48.137 38 46.7407C38 44.8074 39.2 43.5185 41 43.5185C42.8 43.5185 44 44.8074 44 46.7407C44 48.137 43.6 49.2111 42 49.963Z" fill="url(#rcl8-paint2_linear)"></path>
<path d="M52.2344 79C47.7732 79 45 75.9444 45 71.6667C45 67.2667 48.4966 64.9444 52.8372 64.9444C53.4401 64.9444 54.0429 64.8222 54.6458 64.9444C56.3338 60.7889 60.5539 57 65.4973 57C70.3202 57 74.6609 60.6667 76.3489 64.9444C76.9517 64.8222 77.5546 64.9444 78.1575 64.9444C82.6187 64.9444 85.9947 67.3889 85.9947 71.6667C86.1153 75.5778 84.1861 78.6333 79.9661 79H52.2344Z" fill="white" stroke="#35226F" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"></path>
<defs>
<linearGradient id="rcl8-paint0_linear" x1="41.0141" y1="0" x2="41.0141" y2="88" gradientUnits="userSpaceOnUse">
<stop stop-color="#C7E8DF"></stop>
<stop offset="1" stop-color="#E0F4EF"></stop>
</linearGradient>
<linearGradient id="rcl8-paint1_linear" x1="4.88098" y1="24.7269" x2="77.0001" y2="24.7269" gradientUnits="userSpaceOnUse">
<stop stop-color="#B7E0D6"></stop>
<stop offset="1" stop-color="#C7E8DF" stop-opacity="0"></stop>
</linearGradient>
<linearGradient id="rcl8-paint2_linear" x1="23" y1="55.2282" x2="59" y2="55.2282" gradientUnits="userSpaceOnUse">
<stop stop-color="#00915E"></stop>
<stop offset="1" stop-color="#1EAC7A"></stop>
</linearGradient>
</defs>
</svg>
</div>
<h4 class="feature__title h6">
Chống Ddos Toàn Diện
</h4>
<p class="feature__desc">
Với Hệ Thông Chống Ddos Chất Lượng Cao Loại Đảm Bảo Sự Yên Tâm Cho Khách Hàng.
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 <script>
      document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = document.querySelectorAll('.lazy-load');
        lazyImages.forEach(function(img) {
          img.addEventListener('load', function() {
            
          });
          img.src = img.getAttribute('data-src');
        });
      });
    </script>

<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "124394060747504");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v17.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <br>
   <a href="https://zalo.me/g/qkxboe185" id="linkzalo" target="_blank" rel="noopener noreferrer"><div id="fcta-zalo-tracking" class="fcta-zalo-mess">
<span id="fcta-zalo-tracking">Chat hỗ trợ</span></div><div class="fcta-zalo-vi-tri-nut"><div id="fcta-zalo-tracking" class="fcta-zalo-nen-nut"><div id="fcta-zalo-tracking" class="fcta-zalo-ben-trong-nut"> <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6" width="35" height="55"><path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"></path></svg></div><div id="fcta-zalo-tracking" class="fcta-zalo-text">Chat ngay</div></div></div></a>

<style>
@keyframes zoom{0%{transform:scale(.5);opacity:0}50%{opacity:1}to{opacity:0;transform:scale(1)}}@keyframes lucidgenzalo{0% to{transform:rotate(-25deg)}50%{transform:rotate(25deg)}}.jscroll-to-top{bottom:100px}.fcta-zalo-ben-trong-nut svg path{fill:#fff}.fcta-zalo-vi-tri-nut{position:fixed;bottom:24px;right:20px;z-index:999}.fcta-zalo-nen-nut,div.fcta-zalo-mess{box-shadow:0 1px 6px rgba(0,0,0,.06),0 2px 32px rgba(0,0,0,.16)}.fcta-zalo-nen-nut{width:50px;height:50px;text-align:center;color:#fff;background:#0068ff;border-radius:50%;position:relative}.fcta-zalo-nen-nut::after,.fcta-zalo-nen-nut::before{content:"";position:absolute;border:1px solid #0068ff;background:#0068ff80;z-index:-1;left:-20px;right:-20px;top:-20px;bottom:-20px;border-radius:50%;animation:zoom 1.9s linear infinite}.fcta-zalo-nen-nut::after{animation-delay:.4s}.fcta-zalo-ben-trong-nut,.fcta-zalo-ben-trong-nut i{transition:all 1s}.fcta-zalo-ben-trong-nut{position:absolute;text-align:center;width:60%;height:60%;left:10px;bottom:25px;line-height:70px;font-size:25px;opacity:1}.fcta-zalo-ben-trong-nut i{animation:lucidgenzalo 1s linear infinite}.fcta-zalo-nen-nut:hover .fcta-zalo-ben-trong-nut,.fcta-zalo-text{opacity:0}.fcta-zalo-nen-nut:hover i{transform:scale(.5);transition:all .5s ease-in}.fcta-zalo-text a{text-decoration:none;color:#fff}.fcta-zalo-text{position:absolute;top:6px;text-transform:uppercase;font-size:12px;font-weight:700;transform:scaleX(-1);transition:all .5s;line-height:1.5}.fcta-zalo-nen-nut:hover .fcta-zalo-text{transform:scaleX(1);opacity:1}div.fcta-zalo-mess{position:fixed;bottom:29px;right:58px;z-index:99;background:#fff;padding:7px 25px 7px 15px;color:#0068ff;border-radius:50px 0 0 50px;font-weight:700;font-size:15px}.fcta-zalo-mess span{color:#0068ff!important}
span#fcta-zalo-tracking{font-family:Roboto;line-height:1.5}.fcta-zalo-text{font-family:Roboto}
</style>

<script>
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )
{document.getElementById("linkzalo").href="https://zalo.me/g/qkxboe185";}
</script>

<!--Code nút Zalo từ LucidGen.com, anh em tracking Google Tag Manager bằng Click ID chứa fcta-zalo-tracking nhé-->

<style>
	html,body{cursor:url("https://1.bp.blogspot.com/-qbWo9mPKO2Y/YL9utYdQBdI/AAAAAAAAFs4/mtjGu6u2uGwtJsT4gZG4lbhLV1a5lG6OQCLcBGAsYHQ/s0/mouse-f1.png"), auto;}
	a:hover{cursor:url("https://1.bp.blogspot.com/-nYv2dLl3oXY/YL9utYBCh8I/AAAAAAAAFtA/wII4lVw5w4k-4isGMY41heTqk8U4TJujgCLcBGAsYHQ/s0/mouse-f2.png"), auto;}
</style>
    
    <div id="thongbao"></div>
     </div>
        </div>
    </div>
</div>
<center><a href="https://shoplmt.online/host" target="_blank"><img src="https://i.imgur.com/SAYgTy6.png"  alt="SHOPLMT.ONLINE - BÁN HOSTING UY TÍN CHẤT LƯỢNG, GIÁ RẺ, MẠNH NHẤT THỊ TRƯỜNG" title="SHOPLMT.ONLINE - BÁN HOSTING UY TÍN CHẤT LƯỢNG, GIÁ RẺ, MẠNH NHẤT THỊ TRƯỜNG"/></a></center><div class="pt-3">
  
    <br/>
    <div class="c-content-title-1">
        <h3 class="c-center c-font-uppercase c-font-bold"><i class="fa fa-eye"></i>©  Thiết Kế & Vận Hành Bởi Thái Huy
        <div class="c-line-center c-theme-bg"></div>
    </div>
    <div id="bs-example-modal-md" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Thông báo hệ thống
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                                      
                <div class="modal-body">
<p style="text-align:center"><span style="color:#3300ff"><strong>Nạp Tiền Tr&ecirc;n 100k + 15% Tiền Nạp Khi Nạp Qua V&iacute; Hoặc Ng&acirc;n H&agrave;ng</strong></span></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><strong><span style="color:#27ae60">Hỗ Trợ &amp; Tư Vấn:</span> <a href="https://zalo.me/0776550825">Li&ecirc;n Hệ</a></strong></p>

<p style="text-align:center"><span style="color:#000000"><strong>Tham Gia Box Chat</strong></span><strong><span style="color:#8e44ad">: </span><a href="https://zalo.me/g/vrmxof656">Tại Đ&acirc;y</a></strong></p>

<p style="text-align:center"><span style="color:#000000"><strong>Admin Ch&uacute;c Bạn Ng&agrave;y Mới Vui Vẻ :D</strong></span></p>

                   <div class="text-dark"><p><big><img src="https://i.imgur.com/HV4dnrq.png" style="height:30px; width:30px" /><strong>Chào Mừng Bạn Đến Với Dịch Vụ Của Chúng Tôi
                </div>
                <div class="modal-footer">
                      <button type="button"  id="close-hourly" class="btn btn-warning text-white font-small waves-effect"
                        data-bs-dismiss="modal">
                        Tắt 2 tiếng
                    </button>
                    <button type="button" class="btn btn-danger text-white font-small waves-effect"
                        data-bs-dismiss="modal">
                        Đóng
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
 
</div>
    </div>

<script>
 window.onload = function() {
    var modalLastClosed1 = localStorage.getItem('modalLastClosed');
    var delayTime =  500 * 2000; 
    if (!modalLastClosed1 || Date.now() - modalLastClosed1 > delayTime) {
        $('#bs-example-modal-md').modal('show');
    }
};

$('#close-hourly').on('click', function() {
    localStorage.setItem('modalLastClosed', Date.now());
});

 </script>
 </style>
<body style="
background: url('https://dichvudark.vn/public/image/background_1698767721.png') 0 / cover fixed;
background-repeat: no-repeat;
">
<style>
    h4 {
        color: red;
    }
    .feature__desc{
        color: yellow;
    }
.section__title{
    color: red;
}.feature__title{
    color: green;
</style>
<?php
    require_once(__DIR__."/pages/client/Footer.php");
?>