<?php include 'inc/header.php'; ?>

  <section class="inner-hero bg_img" style="background-image: url('assets/images/frontend/breadcrumb/60b34e2640b681622363686.jpg');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="page-title text-white">All Course</h2>
          <ul class="page-breadcrumb justify-content-center">
            <li><a href="index.php">Home</a></li>
            <li>All Course</li>
          </ul>
        </div>
      </div>
    </div>
</section>    
    <div class="main-wrapper">
        <section class="pt-100 pb-100">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-12 mb-4">
          
        </div> -->
        <div class="col-lg-3 pe-4">
          <button class="action-sidebar-open mb-4"><i class="las la-sliders-h"></i> Filter</button>
          <div class="action-sidebar">
            <button class="action-sidebar-close"><i class="las la-times"></i></button>
            <div class="action-widget pt-0">
              <h4 class="action-widget__title">Course filter by</h4>
              <div class="action-widget__body">
                <select class="select select-sm" onChange="window.location.href=this.value">
                  <option  value="/elab/courses?search=2021&amp;type=" selected>Select type</option>
                  <option value="/elab/courses?search=2021&amp;type=1" >Top Courses</option>
                  <option value="/elab/courses?search=2021&amp;type=2" >Latest Courses</option>
                </select>
              </div>
            </div><!-- action-widget end -->
            <div class="action-widget">
              <h4 class="action-widget__title">Filter by price</h4>
              <div class="action-widget__body">
                <div class="action-widget__body">
                    <select class="select select-sm" onChange="window.location.href=this.value">
                      <option value="/elab/courses?search=2021&amp;value=" selected>All</option>
                      <option value="/elab/courses?search=2021&amp;value=free" >Free</option>
                      <option value="/elab/courses?search=2021&amp;value=premium" >Premium</option>
                    </select>
                  </div>
             
              </div>
            </div><!-- action-widget end -->
            <div class="action-widget">
                <h6 class="action-widget__title">Category</h6>
                <div class="action-widget__body">
                  <div class="action-widget__body">
                      <select class="select select-sm cat" onChange="window.location.href=this.value">
                          <option  value="/elab/courses?search=2021&amp;category=" selected>All</option>
                                                    <option value="/elab/courses?search=2021&amp;category=development" >Development</option>
                                                    <option value="/elab/courses?search=2021&amp;category=it-software" >It &amp; Software</option>
                                                    <option value="/elab/courses?search=2021&amp;category=html" >HTML</option>
                                                    <option value="/elab/courses?search=2021&amp;category=css3" >CSS3</option>
                                                    <option value="/elab/courses?search=2021&amp;category=python" >Python</option>
                                                    <option value="/elab/courses?search=2021&amp;category=java" >Java</option>
                                                    <option value="/elab/courses?search=2021&amp;category=c" >C#</option>
                                                    <option value="/elab/courses?search=2021&amp;category=c" >C++</option>
                                                </select>
                    </div>
               
                </div>
              </div><!-- action-widget css end -->

            <div class="action-widget">
              <h6 class="action-widget__title">Level</h6>
              <div class="action-widget__body">
                <div class="action-widget__body">
                    <select class="select select-sm" onChange="window.location.href=this.value">
                        <option value="/elab/courses?search=2021&amp;level=" selected>All</option>
                                                 <option value="/elab/courses?search=2021&amp;level=beginner" >Beginner</option>
                                                 <option value="/elab/courses?search=2021&amp;level=intermediate" >Certificate</option>
                                                 <option value="/elab/courses?search=2021&amp;level=advance" >Advance</option>
                                                 <option value="/elab/courses?search=2021&amp;level=4" >diploma</option>
                                                 <option value="/elab/courses?search=2021&amp;level=5" >5</option>
                                            </select>
                  </div>
             
              </div>
            </div><!-- action-widget css end -->
          </div><!-- action-sidebar end -->
          <div class="show-img mt-3 rounded-3 overflow-hidden d-lg-block d-none">
            <a class="advert d-block" data-advertid="11" target="_blank" href="https://google.com/"><img src="assets/images/advertisement/615c18f05c63a1633425648.jpg" alt="image" class="w-100"></a>          </div>
          <div class="show-img mt-3 rounded-3 overflow-hidden d-lg-block d-none">
            <a class="advert d-block" data-advertid="11" target="_blank" href="https://google.com/"><img src="assets/images/advertisement/615c18f05c63a1633425648.jpg" alt="image" class="w-100"></a>          </div>
          <div class="show-img mt-3 rounded-3 overflow-hidden d-lg-block d-none">
            <a class="advert d-block" data-advertid="10"  target="_blank" href="https://google.com/"><img src="assets/images/advertisement/615c18ce67dee1633425614.jpg" alt="image" class="w-100"></a>          </div>
        </div>
        <div class="col-lg-9">
          <form class="hero-search-form category-search-form mb-3" action="#" method="GET">
              <i class="las la-search"></i>
              <input type="text" name="search" autocomplete="on" class="form--control" placeholder="title, tags eg. web design, art, skill development...">
              <button type="submit" class="hero-search-form__btn">Search</button>
          </form>
                <div class="course-card list-view">
            <div class="course-card__thumb">
              <img src="assets/course/thumbnail/thumb_614ec7ca40b251632552906.jpg" alt="image">
              <div class="course-type"><i class="las la-file-video"></i></div>
            </div>
            <div class="course-card__content">
              <span class="course-tag fs--12px">Web Development</span>
              <h6 class="course-title mt-2"><a href="course/details/2-the-complete-2021-web-development-bootcamp.html">The Complete 2021 Web Development Bootcamp</a></h6>
              <span class="badge bg--primary font-weight-normal mt-2">Beginner</span>
              <div class="ratings d-flex align-items-center fs--14px mt-1">
                <i class="las la-star fill"></i><i class="las la-star fill"></i><i class="las la-star fill"></i><i class="las la-star fill"></i><i class="las la-star-half-alt fill"></i>                <span class="ms-2">(4.5)</span>
              </div>
              <div class="course-mentor mt-2">
                <div class="left">
                  <div class="teacher">
                    <div class="thumb"><img src="assets/images/user/profile/615983142cb941633256212.jpg" alt="image"></div>
                    <p class="name">Daniel Craig</p>
                  </div>
                </div>
                <div class="right">
                  <span class="fs--14px">3 enrolled</span>
                </div>
              </div>
            </div>
            <div class="course-footer">
              <div class="w-100 text-center">
                                <del class="text-muted fs--14px">$90</del>
                <div class="course-price">$81</div>
                                <a href="course/details/2-the-complete-2021-web-development-bootcamp.html" class="btn btn-sm btn--base w-100 mt-4">View Details</a>
              </div>
            </div>
          </div><!-- course-card end -->
                <div class="course-card list-view">
            <div class="course-card__thumb">
              <img src="assets/course/thumbnail/thumb_616198a3870e51633786019.png" alt="image">
              <div class="course-type"><i class="las la-file-video"></i></div>
            </div>
            <div class="course-card__content">
              <span class="course-tag fs--12px">Basic Web</span>
              <h6 class="course-title mt-2"><a href="course/details/6-the-complete-javascript-course-2021-from-zero-to-expert.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h6>
              <span class="badge bg--primary font-weight-normal mt-2">Beginner</span>
              <div class="ratings d-flex align-items-center fs--14px mt-1">
                <i class="las la-star fill"></i><i class="las la-star fill"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>                <span class="ms-2">(2)</span>
              </div>
              <div class="course-mentor mt-2">
                <div class="left">
                  <div class="teacher">
                    <div class="thumb"><img src="assets/images/user/profile/61619cd3b5a531633787091.jpg" alt="image"></div>
                    <p class="name">Ava Fuller</p>
                  </div>
                </div>
                <div class="right">
                  <span class="fs--14px">5 enrolled</span>
                </div>
              </div>
            </div>
            <div class="course-footer">
              <div class="w-100 text-center">
                                <div class="course-price"> $49 </div>
                                <a href="course/details/6-the-complete-javascript-course-2021-from-zero-to-expert.html" class="btn btn-sm btn--base w-100 mt-4">View Details</a>
              </div>
            </div>
          </div><!-- course-card end -->
                <div class="course-card list-view">
            <div class="course-card__thumb">
              <img src="assets/course/thumbnail/thumb_61619ef6b96011633787638.jpg" alt="image">
              <div class="course-type"><i class="las la-file-video"></i></div>
            </div>
            <div class="course-card__content">
              <span class="course-tag fs--12px">Graphics</span>
              <h6 class="course-title mt-2"><a href="course/details/7-photoshop-2021-masterclass-with-extream-trainings.html">Photoshop 2021 MasterClass with extream trainings</a></h6>
              <span class="badge bg--primary font-weight-normal mt-2">Certificate</span>
              <div class="ratings d-flex align-items-center fs--14px mt-1">
                <i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>                <span class="ms-2">(0)</span>
              </div>
              <div class="course-mentor mt-2">
                <div class="left">
                  <div class="teacher">
                    <div class="thumb"><img src="assets/images/user/profile/6161a5406b3751633789248.jpg" alt="image"></div>
                    <p class="name">Jackson Franks</p>
                  </div>
                </div>
                <div class="right">
                  <span class="fs--14px">34 enrolled</span>
                </div>
              </div>
            </div>
            <div class="course-footer">
              <div class="w-100 text-center">
                                <div class="course-price"> Free </div>
                                <a href="course/details/7-photoshop-2021-masterclass-with-extream-trainings.html" class="btn btn-sm btn--base w-100 mt-4">View Details</a>
              </div>
            </div>
          </div><!-- course-card end -->
                <div class="course-card list-view">
            <div class="course-card__thumb">
              <img src="assets/course/thumbnail/thumb_61619ef6b96011633787638.jpg" alt="image">
              <div class="course-type"><i class="las la-file-video"></i></div>
            </div>
            <div class="course-card__content">
              <span class="course-tag fs--12px">Graphics</span>
              <h6 class="course-title mt-2"><a href="course/details/9-photoshop-2021-masterclass-with-extream-trainings.html">Photoshop 2021 MasterClass with extream trainings</a></h6>
              <span class="badge bg--primary font-weight-normal mt-2">Certificate</span>
              <div class="ratings d-flex align-items-center fs--14px mt-1">
                <i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>                <span class="ms-2">(0)</span>
              </div>
              <div class="course-mentor mt-2">
                <div class="left">
                  <div class="teacher">
                    <div class="thumb"><img src="assets/images/user/profile/6161a5406b3751633789248.jpg" alt="image"></div>
                    <p class="name">Jackson Franks</p>
                  </div>
                </div>
                <div class="right">
                  <span class="fs--14px">2 enrolled</span>
                </div>
              </div>
            </div>
            <div class="course-footer">
              <div class="w-100 text-center">
                                <div class="course-price"> Free </div>
                                <a href="course/details/9-photoshop-2021-masterclass-with-extream-trainings.html" class="btn btn-sm btn--base w-100 mt-4">View Details</a>
              </div>
            </div>
          </div><!-- course-card end -->
                <div class="course-card list-view">
            <div class="course-card__thumb">
              <img src="assets/course/thumbnail/thumb_614ec7ca40b251632552906.jpg" alt="image">
              <div class="course-type"><i class="las la-file-video"></i></div>
            </div>
            <div class="course-card__content">
              <span class="course-tag fs--12px">Web Development</span>
              <h6 class="course-title mt-2"><a href="course/details/10-the-complete-2021-web-development-bootcamp.html">The Complete 2021 Web Development Bootcamp</a></h6>
              <span class="badge bg--primary font-weight-normal mt-2">Beginner</span>
              <div class="ratings d-flex align-items-center fs--14px mt-1">
                <i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>                <span class="ms-2">(0)</span>
              </div>
              <div class="course-mentor mt-2">
                <div class="left">
                  <div class="teacher">
                    <div class="thumb"><img src="assets/images/user/profile/615983142cb941633256212.jpg" alt="image"></div>
                    <p class="name">Daniel Craig</p>
                  </div>
                </div>
                <div class="right">
                  <span class="fs--14px">0 enrolled</span>
                </div>
              </div>
            </div>
            <div class="course-footer">
              <div class="w-100 text-center">
                                <del class="text-muted fs--14px">$90</del>
                <div class="course-price">$81</div>
                                <a href="course/details/10-the-complete-2021-web-development-bootcamp.html" class="btn btn-sm btn--base w-100 mt-4">View Details</a>
              </div>
            </div>
          </div><!-- course-card end -->
                  <div class="text-end mt-4 pagination-md">
            <ul class="pagination d-inline-flex">
                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
    </div>

  <?php include 'inc/footer.php'; ?>