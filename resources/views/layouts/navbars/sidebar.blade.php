<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Niovi\'s Dashboard') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
        <li class="nav-item">
            @if(in_array($activePage, ['cms.home','cms.banners']))
                    <a class="nav-link" data-toggle="collapse" href="#contentManagment" aria-expanded="true">
            @else
                     <a class="nav-link collapsed" data-toggle="collapse" href="#contentManagment" aria-expanded="false">
            @endif
                {{--<i><img style="width:25px" src="{{ asset('material') }}/img/supervised_user_circle.svg"></i>--}}
                <i class="material-icons">dvr</i>
                <p>{{ __('Content Managment') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse @if(in_array($activePage, ['cms.home','cms.banners','cms.pricing'])) {{'show'}} @endif" id="contentManagment">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'cms.home' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('cms.home') }}">
                            <span class="sidebar-mini"> H </span>
                            <span class="sidebar-normal">{{ __('Home') }} </span>
                        </a>
                    </li>
                    {{--<li class="nav-item{{ $activePage == 'about' ? ' active' : '' }}">--}}
                        {{--<a class="nav-link" href="{{ route('user.index') }}">--}}
                            {{--<span class="sidebar-mini"> A </span>--}}
                            {{--<span class="sidebar-normal"> {{ __('About') }} </span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item{{ $activePage == 'services' ? ' active' : '' }}">--}}
                        {{--<a class="nav-link" href="{{ route('user.index') }}">--}}
                            {{--<span class="sidebar-mini"> S </span>--}}
                            {{--<span class="sidebar-normal"> {{ __('Services') }} </span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item{{ $activePage == 'contact' ? ' active' : '' }}">--}}
                        {{--<a class="nav-link" href="{{ route('user.index') }}">--}}
                            {{--<span class="sidebar-mini"> C </span>--}}
                            {{--<span class="sidebar-normal"> {{ __('Contact') }} </span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li class="nav-item{{ $activePage == 'cms.banners' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('cms.banners') }}">
                            <span class="sidebar-mini"> B </span>
                            <span class="sidebar-normal"> {{ __('Banners') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'cms.pricing' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('cms.pricing') }}">
                            <span class="sidebar-mini"> P </span>
                            <span class="sidebar-normal"> {{ __('Pricing') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            @if(in_array($activePage, ['doc_category','doc_subcategory']))
                <a class="nav-link" data-toggle="collapse" href="#docrepo" aria-expanded="true">
                    @else
                        <a class="nav-link collapsed" data-toggle="collapse" href="#docrepo" aria-expanded="false">
                            @endif
                            <i class="material-icons">library_books</i>
                            <p>{{ __('Document Repository') }}
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse @if(in_array($activePage, ['doc_category','doc_subcategory','docs'])) {{'show'}} @endif" id="docrepo">
                            <ul class="nav">
                                <li class="nav-item{{ $activePage == 'doc_category' ? ' active' : '' }}">
                                    <a class="nav-link" href="{{ route('doc.category') }}">
                                        <span class="sidebar-mini"> C </span>
                                        <span class="sidebar-normal">{{ __('Categories') }} </span>
                                    </a>
                                </li>
                                <li class="nav-item{{ $activePage == 'doc_subcategory' ? ' active' : '' }}">
                                    <a class="nav-link" href="{{ route('doc.subcategory') }}">
                                        <span class="sidebar-mini"> SC </span>
                                        <span class="sidebar-normal"> {{ __('Sub Categories') }} </span>
                                    </a>
                                </li>
                                <li class="nav-item{{ $activePage == 'docs' ? ' active' : '' }}">
                                    <a class="nav-link" href="{{ route('docs') }}">
                                        <span class="sidebar-mini"> D </span>
                                        <span class="sidebar-normal"> {{ __('Documents') }} </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
        </li>
        <li class="nav-item">
            @if(in_array($activePage, ['blog_categories','blog_posts', 'blog_tags','blog_comments']))
                <a class="nav-link" data-toggle="collapse" href="#blog" aria-expanded="true">
                    @else
                        <a class="nav-link collapsed" data-toggle="collapse" href="#blog" aria-expanded="false">
                            @endif
                            <i class="material-icons">launch</i>
                            <p>{{ __('Blog') }}
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse @if(in_array($activePage, ['blog_categories','blog_posts', 'blog_tags','blog_comments'])) {{'show'}} @endif" id="blog">
                            <ul class="nav">
                                <li class="nav-item{{ $activePage == 'blog_posts' ? ' active' : '' }}">
                                    <a class="nav-link" href="{{ url('admin/posts') }}">
                                        <span class="sidebar-mini"> BP </span>
                                        <span class="sidebar-normal">{{ __('Blog Posts') }} </span>
                                    </a>
                                </li>
                                <li class="nav-item{{ $activePage == 'blog_comments' ? ' active' : '' }}">
                                    <a class="nav-link" href="{{ url('admin/comments') }}">
                                        <span class="sidebar-mini"> BC </span>
                                        <span class="sidebar-normal">{{ __('Blog Comments') }} </span>
                                    </a>
                                </li>
                                <li class="nav-item{{ $activePage == 'blog_tags' ? ' active' : '' }}">
                                    <a class="nav-link" href="{{ url('admin/tags') }}">
                                        <span class="sidebar-mini"> BT </span>
                                        <span class="sidebar-normal"> {{ __('Blog Tags') }} </span>
                                    </a>
                                </li>
                                <li class="nav-item{{ $activePage == 'blog_categories' ? ' active' : '' }}">
                                    <a class="nav-link" href="{{ route('categories.index') }}">
                                        <span class="sidebar-mini"> BC </span>
                                        <span class="sidebar-normal"> {{ __('Blog Categories') }} </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
        </li>
      <li class="nav-item">
          @if(in_array($activePage, ['profile','user-management']))
              <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          @else
              <a class="nav-link collapsed" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
          @endif
            <i class="material-icons">supervised_user_circle</i>
          <p>{{ __('User Control') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse @if(in_array($activePage, ['profile','user-management'])) {{'show'}} @endif" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
        <li class="nav-item{{ $activePage == 'leads' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('leads') }}">
            <i class="material-icons">contact_mail</i>
            <p>{{ __('Leads') }}</p>
            </a>
        </li>
        <li class="nav-item{{ $activePage == 'appointments' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('appointments.index') }}">
            <i class="material-icons">calendar_today</i>
            <p>{{ __('Appointments') }}</p>
            </a>
        </li>
        <li class="nav-item{{ $activePage == 'faqs' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('faqs.index') }}">
                <i class="material-icons">question_answer</i>
                <p>{{ __('FAQs') }}</p>
            </a>
        </li>
      {{--<li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">--}}
        {{--<a class="nav-link" href="{{ route('table') }}">--}}
          {{--<i class="material-icons">content_paste</i>--}}
            {{--<p>{{ __('Table List') }}</p>--}}
        {{--</a>--}}
      {{--</li>--}}
      {{--<li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">--}}
        {{--<a class="nav-link" href="{{ route('typography') }}">--}}
          {{--<i class="material-icons">library_books</i>--}}
            {{--<p>{{ __('Typography') }}</p>--}}
        {{--</a>--}}
      {{--</li>--}}
      {{--<li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">--}}
        {{--<a class="nav-link" href="{{ route('icons') }}">--}}
          {{--<i class="material-icons">bubble_chart</i>--}}
          {{--<p>{{ __('Icons') }}</p>--}}
        {{--</a>--}}
      {{--</li>--}}
      {{--<li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">--}}
        {{--<a class="nav-link" href="{{ route('map') }}">--}}
          {{--<i class="material-icons">location_ons</i>--}}
            {{--<p>{{ __('Maps') }}</p>--}}
        {{--</a>--}}
      {{--</li>--}}
      {{--<li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">--}}
        {{--<a class="nav-link" href="{{ route('notifications') }}">--}}
          {{--<i class="material-icons">notifications</i>--}}
          {{--<p>{{ __('Notifications') }}</p>--}}
        {{--</a>--}}
      {{--</li>--}}
      {{--<li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">--}}
        {{--<a class="nav-link" href="{{ route('language') }}">--}}
          {{--<i class="material-icons">language</i>--}}
          {{--<p>{{ __('RTL Support') }}</p>--}}
        {{--</a>--}}
      {{--</li>--}}
      {{--<li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">--}}
        {{--<a class="nav-link" href="{{ route('upgrade') }}">--}}
          {{--<i class="material-icons">unarchive</i>--}}
          {{--<p>{{ __('Upgrade to PRO') }}</p>--}}
        {{--</a>--}}
      {{--</li>--}}
    </ul>
  </div>
</div>
