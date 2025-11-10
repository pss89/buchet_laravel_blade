<!-- <header class="py-4 bg-slate-900 text-white dark:bg-slate-900">
    <div class="md:container md:mx-auto pl-2 pr-2 flex justify-between">
        <div>Logo</div>
        <div>
            <button type="button" id="naviBtn"><i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</header>
<div class="container md:container md:mx-auto pl-2 pr-2 top-14">
    <ul id="menuList" class="text-right hidden">
        @foreach($headerData as $menu)
            <li><a href="{{ $menu['url'] }}">{{ $menu['title'] }}</a></li>
        @endforeach
    </ul>
</div> -->

<header class="bg-slate-900 sticky top-0 left-0 right-0 z-50 flex items-center justify-between p-4">
    <!-- 왼쪽 상단 로고 -->
    <a class="font-bold text-lg" href="/">
        <img src="{{ asset('images/common/buchet_icon.png') }}" alt="Logo" class="w-14" />
    </a>

    {{-- 로그인 한 유저 표시 --}}
    <div class="text-white hidden md:block">
        @auth
            {{ Auth::user()->name }} 님 환영합니다.
        @endauth
    </div>

    <!-- 햄버거 아이콘 (작은 화면에서만 보임) -->
    <button type="button" id="naviBtn" class="text-white">
        <i class="fa-solid fa-bars"></i>
    </button>

    <div id="menuList" class="bg-slate-900 md:hidden absolute top-16 right-0 text-white rounded shadow-md p-6 space-y-2">
        <a href="{{ route('crud.index') }}" class="hover:text-gray-300 block">crud 테스트</a>
        {{-- 로그인 --}}
        @guest
            {{-- 다시 돌아오기 위해 url 및 쿼리스트링 같이 넘기기 --}}
            <a href="{{ route('login', ['redirectTo' => request()->fullUrl()]) }}" class="hover:text-gray-300 block">로그인</a>
            {{-- 회원가입 --}}
            <a href="{{ route('register', ['redirectTo' => request()->fullUrl()]) }}" class="hover:text-gray-300 block">회원가입</a>
        @endguest
        {{-- 로그아웃 --}}
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="hover:text-gray-300 block">로그아웃</button>
            </form>
        @endauth
    </div>
    <!-- 모바일 메뉴 (작은 화면에서만 보임) -->
</header>