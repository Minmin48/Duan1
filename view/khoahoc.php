<section>
    <div id="lgx-courses" class="lgx-courses">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading-title">Offerd Courses</h2>
                            <h4 class="heading-subtitle">Some Trendy And Popular Courses Offerd</h4>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
                <div class="lgx-tab">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-filter-area">
                                <ul id="lgx-filter" class="lgx-filter list-inline text-center">
                                    <li class="active"><a class="lgx-filter-item" href="javascript:void(0)" data-filter="*">All</a></li>
                                    <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".design">Design</a></li>
                                    <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".html">Python</a></li>
                                    <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".wordpress">Wordpres</a></li>
                                    <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".joomla">Joomla</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//. ROW-->

                    <div class="row">
                        <div id="lgx-grid-wrapper" class="lgx-grid-wrapper"> <!--lgx-list-wrapper-->
                            <?php $list_khoa_hoc =join_giangvien(); foreach($list_khoa_hoc as $value): ?>
                            <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 design">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="img/<?php echo $value['hinh'] ?>" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="assets/img/news/author1.jpg" alt="course">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#"><?php echo $value['hinh'] ?></a></h4>
                                                    <h5 class="subtitle"><?php echo $value['thongtin_gv'] ?></h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> <?php echo $value['ten_kh'] ?></a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#"><?php echo number_format($value['hoc_phi']) ?> <span>đ</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//ITEM-->
                                <?php endforeach?>
                            <!-- <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 html">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="assets/img/courses/course2.jpg" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="assets/img/news/author2.jpg" alt="course">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Riaz Sagar</a></h4>
                                                    <h5 class="subtitle">Lecturar of Education plus</h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> Advance Oracle – Learn Intermediate Oracle</a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#">75 <span>$</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 joomla design">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="assets/img/courses/course3.jpg" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="assets/img/news/author5.jpg" alt="course">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Vaskar Roy</a></h4>
                                                    <h5 class="subtitle">Lecturar of Edumaster</h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> Basic PHP – Learn Basic PHP Language</a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#">75 <span>$</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 wordpress">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="assets/img/courses/course4.jpg" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="assets/img/news/author3.jpg" alt="course">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Jonathon Talukdar</a></h4>
                                                    <h5 class="subtitle">Lecturar of Edumaster</h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> Learn Electronics From Education Plus</a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#">75 <span>$</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 html design">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="assets/img/courses/course5.jpg" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="assets/img/news/author4.jpg" alt="course">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Jonathon Doe</a></h4>
                                                    <h5 class="subtitle">Lecturar of Edumaster</h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> Learn Python Interactive Python Code</a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#">75 <span>$</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 joomla">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="assets/img/courses/course6.jpg" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="assets/img/courses/courses-author1.jpg" alt="courses author">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Jonathon Doe</a></h4>
                                                    <h5 class="subtitle">Lecturar of Edumaster</h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> Learn Java Interactive Java Resources</a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#">850 <span>$</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div><!--//. ROW-->
                </div>
            </div>
        </div>
    </div>
</section>