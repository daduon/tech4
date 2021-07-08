<aside id="sidebar-wrapper">
    <div class="sidebar-brand text-left pl-3">
        <a href="{{ url('/')  }}" class="d-flex align-items-center">
            <span class="img-logo">
{{--                <img src="{{ url(setting('logo')) }}" class="img-fluid p-2"--}}
                {{--                     alt="logo">--}}
                 <img src="{{ url('images/logo/logo-icon.png') }}" class="img-fluid p-2"
                      alt="logo">
            </span>
            <span class="text-dark ml-2 text-uppercase">Tech For Kid</span>
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm overflow-hidden">
        <a href="{{ url('/') }}">
            {{--            <img src="{{ url('images/logo/logo.png') }}" class="w-75 img-fluid"--}}
            {{--                                            alt="logo">--}}
            <span class="img-logo">
                <img src="{{ url(setting('logo')) }}" class="img-fluid p-2"
                     alt="logo">
            </span>
        </a>
    </div>

    <ul class="sidebar-menu">
        @php
            $navigations = [
                [
                    'name' => 'Home Page',
                    'icon' => 'fas fa-home',
                    'permission' => 'home_page',
                    'children' => [
                      [
                            'name' => 'Home Content',
                            'permission' => 'home',
                            'url' => route('home.index'),
                            'isActive' => (Request::segment(1) == 'home')
                        ],
                        [
                            'name' => 'Slide',
                            'permission' => 'slide',
                            'url' => route('slides.index'),
                            'isActive' => (Request::segment(1) == 'slides')
                        ],

                        [
                            'name' => 'Why Us',
                            'permission' => 'why_us',
                            'url' => route('why-us.index'),
                            'isActive' => (Request::segment(1) == 'why-us')
                        ],
                        [
                            'name' => 'Mentor',
                            'permission' => 'mentor',
                            'url' => route('mentors.index'),
                            'isActive' => (Request::segment(1) == 'mentors')
                        ],
                        [
                            'name' => 'Testimonial',
                            'permission' => 'testimonial',
                            'url' => route('testimonials.index'),
                            'isActive' => (Request::segment(1) == 'testimonials')
                        ],
                         [
                            'name' => 'Partner',
                            'permission' => 'partner',
                            'url' => route('partners.index'),
                            'isActive' => (Request::segment(1) == 'partners')
                        ]
                    ]
                ],
                [
                    'name' => 'Parent Page',
                    'icon' => 'far fa-user-friends',
                    'permission' => 'Parent_page',
                    'children' => [
                        [
                            'name' => 'Benefit',
                            'permission' => 'parent_benefit',
                            'url' => route('parent.benefit'),
                            'isActive' => (Request::segment(1) == 'parent_benefit')
                        ],

                        ]
                 ],
                 [
                    'name' => 'Content Page',
                    'icon' => 'far fa-user-friends',
                    'permission' => 'Content_page',
                    'children' => [
                        [
                            'name' => 'Benefit',
                            'permission' => 'benefit',
                            'url' => route('benefits.index'),
                            'isActive' => (Request::segment(1) == 'benefits')
                        ],
                        [
                            'name' => 'gallery',
                            'permission' => 'gallery',
                            'url' => route('galleries.index'),
                            'isActive' => (Request::segment(1) == 'galleries')
                        ],
                        ]
                 ],
                 [
                    'name' => 'Blog Page',
                    'icon' => 'far fa-id-badge',
                    'permission' => 'blog_page',
                    'children' => [
                    [
                            'name' => 'Blog content',
                            'permission' => 'blog_page',
                            'url' => route('blog-page.index'),
                            'isActive' => (Request::segment(1) == 'blog_page')
                        ],
                        [
                            'name' => 'Blog',
                            'permission' => 'blog',
                            'url' => route('blogs.index'),
                            'isActive' => (Request::segment(1) == 'blog_page')
                        ],
                        ]
                 ],
                 [
                    'name' => 'Press Page',
                    'icon' => 'far fa-id-badge',
                    'permission' => 'press_page',
                    'children' => [
                    [
                            'name' => 'Press content',
                            'permission' => 'press_page',
                            'url' => route('press-page.index'),
                            'isActive' => (Request::segment(1) == 'press_page')
                        ],
                        [
                            'name' => 'Press',
                            'permission' => 'press',
                            'url' => route('presses.index'),
                            'isActive' => (Request::segment(1) == 'presses')
                        ],
                        ]
                 ],
                 [
                    'name' => 'Mini Challenge',
                    'icon' => 'fas fa-school',
                    'permission' => 'parent_page',
                    'children' => [
                        [
                            'name' => 'Challenge Content',
                            'permission' => 'mini_challeng_content',
                            'url' => route('mini-challenge-page.index'),
                            'isActive' => (Request::segment(1) == 'mini-challenge-page')
                        ],
                        //  [
                        //     'name' => 'Social Value',
                        //     'permission' => 'social_value',
                        //     'url' => route('social-values.index'),
                        //     'isActive' => (Request::segment(1) == 'social-values')
                        // ],
                        ]
                 ],
                 [
                    'name' => 'Social Value Page',
                    'icon' => 'fas fa-school',
                    'permission' => 'parent_page',
                    'children' => [
                        [
                            'name' => 'Social Value Content',
                            'permission' => 'social_value_content',
                            'url' => route('social-page.index'),
                            'isActive' => (Request::segment(1) == 'social-page')
                        ],
                         [
                            'name' => 'Social Value',
                            'permission' => 'social_value',
                            'url' => route('social-values.index'),
                            'isActive' => (Request::segment(1) == 'social-values')
                        ],
                        ]
                 ],
                 [
                    'name' => 'Job Page',
                    'icon' => 'fas fa-school',
                    'permission' => 'parent_page',
                    'children' => [
                        [
                            'name' => 'Job Content',
                            'permission' => 'job_content',
                            'url' => route('job-page.index'),
                            'isActive' => (Request::segment(1) == 'job-page')
                        ],
                         [
                            'name' => 'Jobs',
                            'permission' => 'job',
                            'url' => route('job-opportunities.index'),
                            'isActive' => (Request::segment(1) == 'job-opportunities')
                        ],
                        ]
                 ],
                 [
                    'name' => 'Program',
                    'icon' => 'fas fa-window-restore',
                    'permission' => 'program',
                    'url' => route('programs.index'),
                    'isActive' => (Request::segment(1) == 'programs'),
                    'children' => []
                 ],
                 [
                    'name' => 'Course',
                    'icon' => 'fas fa-graduation-cap',
                    'permission' => 'course',
                    'url' => route('courses.index'),
                    'isActive' => (Request::segment(1) == 'courses'),
                    'children' => []
                 ],
                 [
                    'name' => 'Setting',
                    'icon' => 'fas fa-cog',
                    'permission' => 'setting',
                    'children' => [
                        [
                            'name' => 'General',
                            'permission' => 'general',
                            'url' => route('settings.index'),
                            'isActive' => (Request::segment(1) == 'settings')
                        ],
                         [
                            'name' => 'Footer',
                            'permission' => 'footer',
                            'url' => route('footer.index'),
                            'isActive' => (Request::segment(1) == 'footer')
                        ],

                        ]
                 ],




            ];
        @endphp

        @foreach($navigations as $i => $nav)
            @php
                if(count($nav['children']) > 0) {
                    $isActive = count(array_filter($nav['children'], function($child) {
                        return $child['isActive']  == true;
                    }));
                } else {
                    $isActive = isset($nav['isActive']) ? $nav['isActive'] : false;
                }
            @endphp

            @authorize($nav['permission'], 'read')
            @if(count($nav['children']) > 0)
                <li class="dropdown {{ $isActive ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown"><i
                                class="{{ $nav['icon'] }}"></i><span>{{ $nav['name'] }}</span></a>
                    <ul class="dropdown-menu">
                        @foreach($nav['children'] as $subNav)
                            @authorize($subNav['permission'], 'read')
                            <li class="{{ $subNav['isActive'] ? 'active' : '' }}"><a class="nav-link"
                                                                                     href="{{ $subNav['url'] }}">{{ $subNav['name'] }}</a>
                            </li>
                            @endauthorize
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="{{ $isActive ? 'active' : '' }}">
                    <a href="{{ $nav['url'] }}" class="nav-link"><i
                                class="{{ $nav['icon'] }}"></i><span>{{ $nav['name'] }}</span></a>
                </li>
            @endif
            @endauthorize
        @endforeach
    </ul>
</aside>
