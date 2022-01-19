 <!-- OffCanvas Menu Start -->
 <div class="offcanvas-menu-wrapper" id="offcanvasMenu">
  <div class="offcanvas-menu-inner">
      <a href="" class="btn-close">
          <img src="assets/img/icons/icon-cross.png" alt="Cross">
      </a>
      <nav class="offcanvas-navigation">
          <ul class="offcanvas-menu">
              <li class="menu-item-has-children active">
                  <a href="{{route('index')}}">
                      <span class="mm-text">Home</span>
                  </a>
                  <ul class="sub-menu">
                      <li>
                          <a href="#">
                              <span class="mm-text">Homepage 01</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="mm-text">Homepage 02</span>
                          </a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="{{route('about')}}">
                      <span class="mm-text">About</span>
                  </a>
              </li>
              <li>
                  <a href="{{route('services')}}">
                      <span class="mm-text">Services</span>
                  </a>
              </li>
              <li>
                  <a href="{{route('project')}}">
                      <span class="mm-text">Projects</span>
                  </a>
              </li>
              <li class="menu-item-has-children">
                  <a href="{{route('blog')}}">
                      <span class="mm-text">Blog</span>
                  </a>
                  <ul class="sub-menu">
                      <li class="menu-item-has-children">
                          <a href="#">
                              <span class="mm-text">Blog</span>
                          </a>
                          <ul class="sub-menu">
                              <li>
                                  <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                              </li>
                              <li>
                                  <a href="blog.html">Blog Right Sidebar</a>
                              </li>
                              <li>
                                  <a href="blog-01-column.html">Blog 01 column</a>
                              </li>
                              <li>
                                  <a href="blog-02-columns.html">Blog 02 columns</a>
                              </li>
                              <li>
                                  <a href="blog-03-columns.html">Blog 03 columns</a>
                              </li>
                          </ul>
                      </li>
                      <li class="menu-item-has-children">
                          <a href="#">
                              <span class="mm-text">Blog Details</span>
                          </a>
                          <ul class="sub-menu">
                              <li>
                                  <a href="blog-details-audio.html">Audio Blog Details</a>
                              </li>
                              <li>
                                  <a href="blog-details-gallery.html">Gallery Blog Details</a>
                              </li>
                              <li>
                                  <a href="blog-details-image.html">image Blog Details</a>
                              </li>
                              <li>
                                  <a href="blog-details-video.html">Video Blog Details</a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <li class="menu-item-has-children">
                  <a href="contact.html">
                      <span class="{{route('contact')}}">Contact Us</span>
                  </a>
              </li>
          </ul>
          <div class="site-info vertical">
              <div class="site-info__item">
                  <a href="tel:+01223566678"><strong>+01 2235 666 78</strong></a>
                  <a href="mailto:Support@contixs.com">Support@contixs.com</a>
              </div>
          </div>
      </nav>
  </div>
</div>
<!-- OffCanvas Menu End -->