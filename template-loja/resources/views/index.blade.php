@extends('layouts.layout')
@section('title','GAME$TORE')
@section('content')

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <x-nav/>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Bem-vindo a GAME$TORE</h6>
                  <h4><em>NAVEGUE </em>POR NOSSOS JOGOS POPULARES AQUI</h4>
                  <div class="main-button">
                    <a href="/jogos">Navegue Agora</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Mais populares</em> agora</h4>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="{{asset('storage/images/popular-01.jpg')}}" alt="">
                      <h4>Fortnite<br><span>Battlegrounds PVP</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="{{asset('storage/images/popular-02.jpg')}}" alt="">
                      <h4>PubG<br><span>Battlegrounds PVP</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="{{asset('storage/images/popular-03.jpg')}}" alt="">
                      <h4>Dota2<br><span>Steam</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="{{asset('storage/images/popular-04.jpg')}}" alt="">
                      <h4>CS-GO<br><span>FPS PVP</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="item">
                      <div class="row">
                        <div class="col-lg-6 col-sm-6">
                          <div class="item inner-item">
                            <img src="{{asset('storage/images/popular-05.jpg')}}" alt="">
                            <h4>Minicraft<br><span>Mundo a berto</span></h4>
                            <ul>
                              <li><i class="fa fa-star"></i> 4.8</li>
                              <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                          <div class="item">
                            <img src="{{asset('storage/images/popular-06.jpg')}}" alt="">
                            <h4>Eagles Fly<br><span>Matrix Games</span></h4>
                            <ul>
                              <li><i class="fa fa-star"></i> 4.8</li>
                              <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="{{asset('storage/images/popular-07.jpg')}}" alt="">
                      <h4>Warface<br><span>Simulação em 3D</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="{{asset('storage/images/popular-08.jpg')}}" alt="">
                      <h4>Warcraft<br><span>Lendário</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="/jogos">Jogos Populares</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Sua</em> biblioteca de jogos</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="{{asset('storage/images/game-01.jpg')}}" alt="" class="templatemo-item"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Data de compra</h4><span>24/08/2036</span></li>
                  <li><h4>Horas jogadas</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Status</h4><span>Baixar</span></li>
                  <li><div class="main-border-button"><a href="/">Baixar</a></div></li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="{{asset('storage/images/game-02.jpg')}}" alt="" class="templatemo-item"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Data de compra</h4><span>22/06/2036</span></li>
                  <li><h4>Horas jogadas</h4><span>740 H 52 Mins</span></li>
                  <li><h4>Status</h4><span>Baixado</span></li>
                  <li><div class="main-border-button border-no-active"><a href="/">Jogar</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="{{asset('storage/images/game-03.jpg')}}" alt="" class="templatemo-item"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Data de compra</h4><span>21/04/2036</span></li>
                  <li><h4>Horas jogadas</h4><span>892 H 14 Mins</span></li>
                  <li><h4>Status</h4><span>Baixado</span></li>
                  <li><div class="main-border-button border-no-active"><a href="/">Jogar</a></div></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="/perfil">Veja sua biblioteca</a>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <x-footer/>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  
  @endsection
