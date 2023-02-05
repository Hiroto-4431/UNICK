<div class="px-6 py-4">
    <!-- Logo -->
    <div class="py-2">
        <a href="{{ route('admin.dashboard') }}">
            <x-application-logo class="block invisible md:visible h-9 w-auto fill-current text-gray-100" />
        </a>
        {{-- <button>
            <i class="ph-caret-double-right text-gray-100 text-3xl"></i>
        </button> --}}
    </div>
    <ul class="my-12">
        <li class="py-2">
            <a href="{{ route('admin.dashboard') }}" class="group">
                <div class="flex items-center text-gray-400 group-hover:text-white @if(Request::routeIs('admin.dashboard')) text-gray-100 @endif">
                    <i class="ph-house block leading-none text-3xl pr-3 @if(Request::routeIs('admin.dashboard')) font-black @endif"></i>
                    <p class="hidden md:block text-xl text-current w-full leading-none @if(Request::routeIs('admin.dashboard')) font-black @endif">ホーム</p>
                </div>
            </a>
        </li>
        <li class="py-2">
            <a href="{{ route('admin.profile.edit') }}" class="group">
                <div class="flex items-center text-gray-400 group-hover:text-white @if(Request::routeIs('admin.profile.*')) text-gray-100 @endif">
                    <i class="ph-house block leading-none text-3xl pr-3 @if(Request::routeIs('admin.profile.*')) font-black @endif"></i>
                    <p class="hidden md:block text-xl text-current w-full leading-none @if(Request::routeIs('admin.profile.*')) font-black @endif">テスト</p>
                </div>
            </a>
        </li>
    </ul>
</div>