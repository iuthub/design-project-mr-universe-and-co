<!-- Services -->
@if(isset($services) && is_object($services))
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
            @foreach($services as $service)
                <div class="col-md-4">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa {{ $service->icon }} fa-stack-1x fa-inverse"></i>
                  </span>
                  <h4 class="service-heading">{{ $service->name }}</h4>
                  <p class="text-muted">{{ $service->text }}</p>
                </div>
            @endforeach
        </div>
      </div>
    </section>
@endif

<!-- Portfolio Grid -->
@if(isset($portfolios) && is_object($portfolios)) 
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
            @foreach($portfolios as $k=>$portfolio)
                <div class="col-md-4 col-sm-6 portfolio-item">
                  <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$k+1}}">
                    <div class="portfolio-hover">
                      <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                      </div>
                    </div>
                    {{Html::image('assets/img/portfolio/'.$portfolio->images, '', ['class'=>'img-fluid'])}}
                    
                  </a>
                  <div class="portfolio-caption">
                    <h4>{{$portfolio->name}}</h4>
                    <p class="text-muted">{{$portfolio->filter}}</p>
                  </div>
                </div>
            @endforeach
        </div>
      </div>
    </section>
@endif

    <!-- About -->
@if(isset($about) && is_object($about)) 
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
                @foreach($about as $k=>$item)
                    @if ($k%2 == 0)
                        <li>                     
                    @else
                       <li class="timeline-inverted">           
                    @endif
                            <div class="timeline-image">
                                {!! Html::image('assets/img/'.$item->image, '', array('class'=>'rounded-circle img-fluid')) !!} 
                            </div>
                                <div class="timeline-panel">
                                  <div class="timeline-heading">
                                    {!!$item->name!!}
                                  </div>
                                  <div class="timeline-body">
                                    <p class="text-muted">{{$item->description}}</p>
                                </div>
                            </div>
                        </li>
                @endforeach  
                <li class="timeline-inverted">
                    <div class="timeline-image">
                      <h4>Be Part
                        <br>Of Our
                        <br>Story!</h4>
                    </div>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
@endif

@if(isset($people) && is_object($people))     
<!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
            @foreach($people as $member)
                <div class="col-sm-4">
                  <div class="team-member">
                      {{Html::image('assets/img/team/'.$member->images, '', ['class'=>'mx-auto rounded-circle'])}}
                  
                    <h4>{{$member->name}}</h4>
                    <p class="text-muted">{{$member->position}}</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
            @endforeach
        </div>
          
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
        </div>
          
      </div>
    </section>
@endif
    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/logos/envato.jpg')}}" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/logos/designmodo.jpg')}}" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/logos/themeforest.jpg')}}" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/logos/creative-market.jpg')}}" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
              
            <form action="{{route('home')}}" method="post" id="contactForm" name="sentMessage">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="name" class="form-control" id="name" type="text" placeholder="Your Name *">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input name="email" class="form-control" id="email" type="email" placeholder="Your Email *">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input name="phone" class="form-control" id="phone" type="tel" placeholder="Your Phone *">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea name="text" class="form-control" id="message" placeholder="Your Message *"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                
                <div class="col-lg-12 text-center">
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div id="success"></div>
                        <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
                {{ csrf_field() }}
                
              </div>
            </form>
              
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    @foreach($portfolios as $k=>$portfolio)
    <div class="portfolio-modal modal fade" id="portfolioModal{{$k+1}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                   {{Html::image('assets/img/portfolio/'.$portfolio->images, '', ['class'=>'img-fluid d-block mx-auto'])}}
                                      

                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: {{$portfolio->name}}</li>
                    <li>Category: {{$portfolio->filter}}</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    