<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - {{ config('app.name') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('/elegant/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('/elegant/css/style.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/elegant/css/style.min.css.map') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  {{--
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> --}}

</head>

<body>

  <div class="page-flex">
    <!-- ! Sidebar -->
   @include('shared.side-left')
    <div class="main-wrapper">
      <!-- ! Main nav -->
      @include('shared.menu-superior')
      <!-- ! Main -->
      <main class="main users chart-page" id="skip-target">
        <div class="container">
          <h2 class="main-title">@yield('module')</h2>
          {{-- <div class="row stat-cards">
            <div class="col-md-6 col-xl-3">
              <article class="stat-cards-item">
                <div class="stat-cards-icon primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bar-chart-2" aria-hidden="true">
                    <line x1="18" y1="20" x2="18" y2="10"></line>
                    <line x1="12" y1="20" x2="12" y2="4"></line>
                    <line x1="6" y1="20" x2="6" y2="14"></line>
                  </svg>
                </div>
                <div class="stat-cards-info">
                  <p class="stat-cards-info__num">1478 286</p>
                  <p class="stat-cards-info__title">Total visits</p>
                  <p class="stat-cards-info__progress">
                    <span class="stat-cards-info__profit success">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-trending-up" aria-hidden="true">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                        <polyline points="17 6 23 6 23 12"></polyline>
                      </svg>4.07%
                    </span>
                    Last month
                  </p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-3">
              <article class="stat-cards-item">
                <div class="stat-cards-icon warning">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-file" aria-hidden="true">
                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                    <polyline points="13 2 13 9 20 9"></polyline>
                  </svg>
                </div>
                <div class="stat-cards-info">
                  <p class="stat-cards-info__num">1478 286</p>
                  <p class="stat-cards-info__title">Total visits</p>
                  <p class="stat-cards-info__progress">
                    <span class="stat-cards-info__profit success">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-trending-up" aria-hidden="true">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                        <polyline points="17 6 23 6 23 12"></polyline>
                      </svg>0.24%
                    </span>
                    Last month
                  </p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-3">
              <article class="stat-cards-item">
                <div class="stat-cards-icon purple">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-file" aria-hidden="true">
                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                    <polyline points="13 2 13 9 20 9"></polyline>
                  </svg>
                </div>
                <div class="stat-cards-info">
                  <p class="stat-cards-info__num">1478 286</p>
                  <p class="stat-cards-info__title">Total visits</p>
                  <p class="stat-cards-info__progress">
                    <span class="stat-cards-info__profit danger">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-trending-down" aria-hidden="true">
                        <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                        <polyline points="17 18 23 18 23 12"></polyline>
                      </svg>1.64%
                    </span>
                    Last month
                  </p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-3">
              <article class="stat-cards-item">
                <div class="stat-cards-icon success">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-feather" aria-hidden="true">
                    <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                    <line x1="16" y1="8" x2="2" y2="22"></line>
                    <line x1="17.5" y1="15" x2="9" y2="15"></line>
                  </svg>
                </div>
                <div class="stat-cards-info">
                  <p class="stat-cards-info__num">1478 286</p>
                  <p class="stat-cards-info__title">Total visits</p>
                  <p class="stat-cards-info__progress">
                    <span class="stat-cards-info__profit warning">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-trending-up" aria-hidden="true">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                        <polyline points="17 6 23 6 23 12"></polyline>
                      </svg>0.00%
                    </span>
                    Last month
                  </p>
                </div>
              </article>
            </div>
          </div> --}}
          <div class="row">
            <div class="col-lg-12">
              {{-- <div class="chart">
                <canvas id="myChart" aria-label="Site statistics" role="img"
                  style="display: block; box-sizing: border-box; height: 368px; width: 737px;" width="737"
                  height="368"></canvas>
              </div> --}}
              @yield('content')
            </div>
            {{-- <div class="col-lg-3">
              <article class="customers-wrapper">
                <canvas id="customersChart" aria-label="Customers statistics" role="img" width="232" height="256"
                  style="display: block; box-sizing: border-box; height: 256px; width: 232px;"></canvas>
                <!--              <p class="customers__title">New Customers <span>+958</span></p>
              <p class="customers__date">28 Daily Avg.</p>
              <picture><source srcset="./img/svg/customers.svg" type="image/webp"><img src="./img/svg/customers.svg" alt=""></picture> -->
              </article>
              <article class="white-block">
                <div class="top-cat-title">
                  <h3>Top categories</h3>
                  <p>28 Categories, 1400 Posts</p>
                </div>
                <ul class="top-cat-list">
                  <li>
                    <a href="##">
                      <div class="top-cat-list__title">
                        Lifestyle <span>8.2k</span>
                      </div>
                      <div class="top-cat-list__subtitle">
                        Dailiy lifestyle articles <span class="purple">+472</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="##">
                      <div class="top-cat-list__title">
                        Tutorials <span>8.2k</span>
                      </div>
                      <div class="top-cat-list__subtitle">
                        Coding tutorials <span class="blue">+472</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="##">
                      <div class="top-cat-list__title">
                        Technology <span>8.2k</span>
                      </div>
                      <div class="top-cat-list__subtitle">
                        Dailiy technology articles <span class="danger">+472</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="##">
                      <div class="top-cat-list__title">
                        UX design <span>8.2k</span>
                      </div>
                      <div class="top-cat-list__subtitle">
                        UX design tips <span class="success">+472</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="##">
                      <div class="top-cat-list__title">
                        Interaction tips <span>8.2k</span>
                      </div>
                      <div class="top-cat-list__subtitle">
                        Interaction articles <span class="warning">+472</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="##">
                      <div class="top-cat-list__title">
                        App development <span>8.2k</span>
                      </div>
                      <div class="top-cat-list__subtitle">
                        Mobile development articles <span class="warning">+472</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="##">
                      <div class="top-cat-list__title">
                        Nature <span>8.2k</span>
                      </div>
                      <div class="top-cat-list__subtitle">
                        Wildlife animal articles <span class="warning">+472</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="##">
                      <div class="top-cat-list__title">
                        Geography <span>8.2k</span>
                      </div>
                      <div class="top-cat-list__subtitle">
                        Geography articles <span class="primary">+472</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </article>
            </div> --}}
          </div>
        </div>
      </main>
      <!-- ! Footer -->
      <footer class="footer">
        <div class="container footer--flex">
          <div class="footer-start">
            <p>2021 © Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank"
                rel="noopener noreferrer">elegant-dashboard.com</a></p>
          </div>
          <ul class="footer-end">
            <li><a href="##">About</a></li>
            <li><a href="##">Support</a></li>
            <li><a href="##">Puchase</a></li>
          </ul>
        </div>
      </footer>
    </div>
  </div>

  {{-- @yield('content') --}}
  <!-- Styles -->

  <script src="{{ asset('/elegant/plugins/feather.min.js.map') }}" defer></script>
  <script src="{{ asset('/elegant/plugins/chart.min.js') }}" defer></script>
  <script src="{{ asset('/elegant/plugins/feather.min.js') }}" defer></script>
  <script src="{{ asset('/elegant/js/script.js') }}" defer></script>
  <script src="{{ asset('js/app.js') }}" defer></script>


  </div>
  </div>
  </div>
</body>

</html>