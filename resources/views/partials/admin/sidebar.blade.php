<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset($setting->logo)}}"  style="height: 50px" alt="{{$setting->translate(app()->getLocale())->title}}" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{$setting->translate(app()->getLocale())->title}}</span>
    </a>
    <!-- \Brand Logo -->

    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{url('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
                {{Auth::user()->translate(app()->getLocale())->name}}
            </a>
          </div>
        </div>
    </div>
</aside>
<!-- /.sidebar -->
