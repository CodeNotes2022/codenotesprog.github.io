<?php include 'inc/header.php'; ?>

 <section class="inner-hero bg_img" style="background-image: url('assets/images/frontend/breadcrumb/60b34e2640b681622363686.jpg');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 class="page-title text-white">All Course</h2>
          <ul class="page-breadcrumb justify-content-center">
            <li><a href="https://script.viserlab.com/elab">Home</a></li>
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
                  <option  value="/elab/courses?search=tag.&amp;type=" selected>Select type</option>
                  <option value="/elab/courses?search=tag.&amp;type=1" >Top Courses</option>
                  <option value="/elab/courses?search=tag.&amp;type=2" >Latest Courses</option>
                </select>
              </div>
            </div><!-- action-widget end -->
            <div class="action-widget">
              <h4 class="action-widget__title">Filter by price</h4>
              <div class="action-widget__body">
                <div class="action-widget__body">
                    <select class="select select-sm" onChange="window.location.href=this.value">
                      <option value="/elab/courses?search=tag.&amp;value=" selected>All</option>
                      <option value="/elab/courses?search=tag.&amp;value=free" >Free</option>
                      <option value="/elab/courses?search=tag.&amp;value=premium" >Premium</option>
                    </select>
                  </div>
             
              </div>
            </div><!-- action-widget end -->
            <div class="action-widget">
                <h6 class="action-widget__title">Category</h6>
                <div class="action-widget__body">
                  <div class="action-widget__body">
                      <select class="select select-sm cat" onChange="window.location.href=this.value">
                          <option  value="/elab/courses?search=tag.&amp;category=" selected>All</option>
                                                    <option value="/elab/courses?search=tag.&amp;category=development" >Development</option>
                                                    <option value="/elab/courses?search=tag.&amp;category=it-software" >It &amp; Software</option>
                                                    <option value="/elab/courses?search=tag.&amp;category=html" >HTML</option>
                                                    <option value="/elab/courses?search=tag.&amp;category=css3" >CSS3</option>
                                                    <option value="/elab/courses?search=tag.&amp;category=python" >Python</option>
                                                    <option value="/elab/courses?search=tag.&amp;category=java" >Java</option>
                                                    <option value="/elab/courses?search=tag.&amp;category=c" >C#</option>
                                                    <option value="/elab/courses?search=tag.&amp;category=c" >C++</option>
                                                </select>
                    </div>
               
                </div>
              </div><!-- action-widget css end -->

            <div class="action-widget">
              <h6 class="action-widget__title">Level</h6>
              <div class="action-widget__body">
                <div class="action-widget__body">
                    <select class="select select-sm" onChange="window.location.href=this.value">
                        <option value="/elab/courses?search=tag.&amp;level=" selected>All</option>
                                                 <option value="/elab/courses?search=tag.&amp;level=beginner" >Beginner</option>
                                                 <option value="/elab/courses?search=tag.&amp;level=intermediate" >Certificate</option>
                                                 <option value="/elab/courses?search=tag.&amp;level=advance" >Advance</option>
                                                 <option value="/elab/courses?search=tag.&amp;level=4" >diploma</option>
                                                 <option value="/elab/courses?search=tag.&amp;level=5" >5</option>
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
              <img src="assets/course/thumbnail/thumb_61643cb71d6ee1633959095.jpg" alt="image">
              <div class="course-type"><i class="las la-file-video"></i></div>
            </div>
            <div class="course-card__content">
              <span class="course-tag fs--12px">Basic Web</span>
              <h6 class="course-title mt-2"><a href="course/details/11-html-for-academy.html">HTML for Academy</a></h6>
              <span class="badge bg--primary font-weight-normal mt-2">Certificate</span>
              <div class="ratings d-flex align-items-center fs--14px mt-1">
                <i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>                <span class="ms-2">(0)</span>
              </div>
              <div class="course-mentor mt-2">
                <div class="left">
                  <div class="teacher">
                    <div class="thumb"><img src="placeholder-image/350x350.jpg" alt="image"></div>
                    <p class="name">kostas pap</p>
                  </div>
                </div>
                <div class="right">
                  <span class="fs--14px">3 enrolled</span>
                </div>
              </div>
            </div>
            <div class="course-footer">
              <div class="w-100 text-center">
                                <del class="text-muted fs--14px">$22</del>
                <div class="course-price">$19.8</div>
                                <a href="course/details/11-html-for-academy.html" class="btn btn-sm btn--base w-100 mt-4">View Details</a>
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