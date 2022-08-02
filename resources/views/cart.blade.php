
@extends('layouts.layoutmain')

@section('content')
<div id="container">
            <nav>  
                <ul id="mega-menu-3" class="mega-menu">
                    <li class="first"><a href="index" class="current">Trang chủ</a></li>
                    <li><a href="phan-mem.html">Mặc Hàng Ngày</a>
                        <ul>
                           <li><a href="phan-mem.html"> Outfit of The Season</a>
                                
                                <ul>
                                    <li><a href="chi-tiet-san-pham-combo03">Quần short Outdoor</a></li>
                                    <li><a href="chi-tiet-san-pham-quan02">Quần ống Suông</a></li>
                                    <li><a href="#">Quần Short Thể Thao</a></li>
                                    <li><a href="#">Áo Lỡ Tay</a></li>
                                    <li><a href="#">Áo Sơ Mi</a></li>
                                    <li><a href="#">Áo Polo Công nghệ</a></li>
                                </ul>
                            </li>
                        
                        </ul>
                    </li>
               
                <li><a href="linh-kien.html">Phụ kiện</a>
                    <ul>
                        <li><a href="#">Đồng Hồ đeo tay</a></li>
                        <li><a href="linh-kien-chuot.html">Mắt Kính</a></li>
                        <li><a href="#">Vòng Đeo Tay</a></li>
                        <li><a href="#">Nước Hoa Bỏ túi</a></li>
                        <li><a href="#">Ví</a></li>
                        <li><a href="#">Thắt Lưng</a></li>
                    </ul>
                </li>
                <li><a href="phan-mem.html">Quần lót Nam</a>
                    <ul>
                        <li>
                        <ul>
                            <li><a href="#">Quần Brief</a></li>
                            <li><a href="#">Quần Trunk</a></li>
                            <li><a href="#">Quần Boxer</a></li>
                        </ul>
                        
                        </li>
                        
                        </ul>
                </li>

                 <li><a href="phan-mem.html">áo Nam</a>
                    <ul>
                        <li>
                        <ul>
                            <li><a href="#">T shirt</a></li>
                            <li><a href="#">Áo Lỡ Tay </a></li>
                            <li><a href="#">áo Polo</a></li>
                            <li><a href="#">áo In Hình  </a></li>
                            <li><a href="#">áo khoác Thể Thao  </a></li>
                        </ul>
                        
                        </li>
                        
                        </ul>
                </li>
                 <li><a href="phan-mem.html">quần  Nam</a>
                    <ul>
                        <li>
                        <ul>
                            <li><a href="#">quần Dài</a></li>
                            <li><a href="#">Quần Short </a></li>
                            <li><a href="#">Quần jean</a></li>
                          
                        </ul>
                        
                        </li>
                        
                        </ul>
                </li>
              
<div class="container-2">
                    <div style="clear:both; display:block; height:40px"></div>
                        <div class="ctrl">
                            <form class="left">
                                Sort By :&nbsp;
                                <select>
                                  <option>Position</option>
                                  <option>Name</option>
                                  <option>Price</option>
                                  <option>Rating </option>
                                  <option>Color</option>
                                </select>
                                &nbsp;&nbsp;
                                Show:&nbsp;
                                <select>
                                  <option>6</option>
                                  <option>10</option>
                                  <option>25</option>
                                </select>
                            </form>
                            <span class="list-style-buttons">
                                <a href="#" id="gridview" class="switcher"><img src="images/grid-view.png" alt="Grid"></a>
                                <a href="#" id="listview" class="switcher active"><img src="images/list-view-active.png" alt="List"></a>
                            </span>
                        </div>
                        <ul id="products" class="list clearfix">
                            <li class="da-thumbs item">
                                <div class="product-thumb-hover">
                                    <section class="left">
                                        <img src="images/products/quan.jpg" alt="">
                                        <p class="sale">Sale</p>
                                        <article class="da-animate da-slideFromRight" style="display: block;">
                                            <h3>Quần Jogger thể thao</h3>
                                            <p>
                                            <a href="product-detail.html" class="link tip" title="View Detail"></a>&nbsp;
                                            <a href="cart.html" class="cart tip" title="Add to cart"></a>&nbsp;&nbsp;
                                            <a href="images/preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a></p>
                                        </article>
                                    </section>
                                </div>
                                <section class="center">
                                    <h3>Quần Jogger thể thao</h3>
                                    <em>Category: <a href="laptop-cu-doi-moi">quần thể thao</a></em>
                                </section>
                                <section class="right">
                                    <span class="price"><small>320.000VNĐ</small>&nbsp;&nbsp; 200.000VNĐ</span>
                                    <ul class="menu-button">
                                        <li><a href="cart.html" class="cart tip" title="Add to Cart"></a></li>
                                        <li><a href="images/preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
                                        <li><a href="wishlist.html" class="wishlist tip" title="Add to Wishlist"></a></li>
                                        <li><a href="compare.html" class="compare tip" title="Compare"></a></li>
                                        <li><a href="product-detail.html" class="link tip" title="View Detail"></a></li>
                                    </ul>
                                </section>
                            </li>
                            <li class="da-thumbs item">
                                <div class="product-thumb-hover">
                                    <section class="left">
                                        <img src="images/products/quan1.jpg" alt="">
                                        <p class="new">New</p>
                                        <article class="da-animate da-slideFromRight" style="display: block;">
                                            <h3>CoolActive Box</h3>
                                            <p>
                                            <a href="product-detail.html" class="link tip" title="View Detail"></a>&nbsp;
                                            <a href="cart.html" class="cart tip" title="Add to cart"></a>&nbsp;&nbsp;
                                            <a href="images/preview/work_2_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a></p>
                                        </article>
                                    </section>
                                </div>
                                <section class="center">
                                    <h3>CoolActive Box</h3>
                                    <em>Category: <a href="laptop-cu.html">CoolActive Box AAA</a></em>
                                </section>
                                <section class="right">
                                    <span class="price">600.000VNĐ</span>
                                    <ul class="menu-button">
                                        <li><a href="cart.html" class="cart tip" title="Add to Cart"></a></li>
                                        <li><a href="images/preview/work_2_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
                                        <li><a href="wishlist.html" class="wishlist tip" title="Add to Wishlist"></a></li>
                                        <li><a href="compare.html" class="compare tip" title="Compare"></a></li>
                                        <li><a href="product-detail.html" class="link tip" title="View Detail"></a></li>
                                    </ul>
                                </section>
                            </li>
                            <li class="da-thumbs item">
                                <div class="product-thumb-hover">
                                    <section class="left">
                                        <img src="images/products/quan2.jpg" alt="">
                                        <p class="new">New</p>
                                        <article class="da-animate da-slideFromRight" style="display: block;">
                                            <h3>combo Quần áo Hàng ngày</h3>
                                            <p>
                                            <a href="product-detail.html" class="link tip" title="View Detail"></a>&nbsp;
                                            <a href="cart.html" class="cart tip" title="Add to cart"></a>&nbsp;&nbsp;
                                            <a href="images/preview/work_3_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a></p>
                                        </article>
                                    </section>
                                </div>
                                <section class="center">
                                    <h3>combo Quần áo Hàng ngày</h3>
                                    <em>Category: <a href="#">combo Quần áo Hàng ngày 2</a></em>
                                </section>
                                <section class="right">
                                    <span class="price">300.000VNĐ</span>
                                    <ul class="menu-button">
                                        <li><a href="cart.html" class="cart tip" title="Add to Cart"></a></li>
                                        <li><a href="images/preview/work_3_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
                                        <li><a href="wishlist.html" class="wishlist tip" title="Add to Wishlist"></a></li>
                                        <li><a href="compare.html" class="compare tip" title="Compare"></a></li>
                                        <li><a href="product-detail.html" class="link tip" title="View Detail"></a></li>
                                    </ul>
                                </section>
                            </li>
                            <li class="da-thumbs item">
                                <div class="product-thumb-hover">
                                    <section class="left">
                                        <img src="images/products/quan3.jpg" alt="">
                                        <article class="da-animate da-slideFromRight" style="display: block;">
                                            <h3>Quần Kaki Dài</h3>
                                            <p>
                                            <a href="product-detail.html" class="link tip" title="View Detail"></a>&nbsp;
                                            <a href="cart.html" class="cart tip" title="Add to cart"></a>&nbsp;&nbsp;
                                            <a href="images/preview/work_4_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a></p>
                                        </article>
                                    </section>
                                </div>
                                <section class="center">
                                    <h3>Quần Kaki Dài</h3>
                                    <em>Category: <a href="linh-kien-dell.html">Quần Dài mặc Hàng Ngày</a></em>
                                </section>
                                <section class="right">
                                    <span class="price">900.000VNĐ</span>
                                    <ul class="menu-button">
                                        <li><a href="cart.html" class="cart tip" title="Add to Cart"></a></li>
                                        <li><a href="images/preview/work_4_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
                                        <li><a href="wishlist.html" class="wishlist tip" title="Add to Wishlist"></a></li>
                                        <li><a href="compare.html" class="compare tip" title="Compare"></a></li>
                                        <li><a href="product-detail.html" class="link tip" title="View Detail"></a></li>
                                    </ul>
                                </section>
                            </li>
                        </ul><!--end:products-->
                        <ul id="pagination">
                            <li><a class="current" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">next</a></li>
                        </ul>
                </div><!--end:container-2-->
            </div><!--end:content-wrap-->
            <footer>
                <div class="content-wrap">
                    <div class="one-fourth first">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="/about.html">About Us</a></li>
                            <li><a href="#">Delivery Info</a></li>
                            <li><a href="#">Quanlity Policies</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                    <div class="one-fourth">
                        <h4>Map Website</h4>
                        <ul>
                            <li><a href="sitemap.html">Sitemap</a></li>
                            
                        </ul>
                    </div>
                                      
                    <div class="one-fourth">
                        <h4>Accounts</h4>
                        <ul>
                            <li><a href="#">My Accounts</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="content-wrap">
                    <div style="clear:both; display:block;" class="social-wrap"></div>
                    <ul class="social">
                        <li><a href="#" class="tip" title="Facebook"><img src="images/social-icon-facebook.png" alt="Facebook"></a></li>
                        
                    </ul>
                    <ul class="payment">
                        <li><a href="#" class="tip" title="Paypal"><img src="images/payment-icon-paypal.png" alt="Paypal"></a></li>
                        <li><a href="#" class="tip" title="Master Card"><img src="images/payment-icon-mastercard.png" alt="Master Card"></a></li>
                        <li><a href="#" class="tip" title="Visa"><img src="images/payment-icon-visa.png" alt="Visa"></a></li>
                    </ul>
                    <p style="clear:both; display:block;">&copy; 2022 <a href="index.html">Fashion Cool Mate</a>, Designed by: <a href="#">Trịnh Ngọc Sơn PBIT1702 </a></p>
                </div>
            </footer>
        </div><!--end:container-->
    </div><!--end:page_wrap-->


@endsection

