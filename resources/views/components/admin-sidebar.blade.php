<div class="flex flex-col h-full">
    @for ($i = 0; $i < 5; $i++)
        <x-ui.link.link href="/user/profile">
            <x-ui.link.icon>
                <i class="fa fa-user"></i>
            </x-ui.link.icon>
            <x-ui.link.nav-content>
                <x-ui.link.nav-title>User</x-ui.link.nav-title>
                <x-ui.link.nav-subtitle>View all users</x-ui.link.nav-subtitle>
            </x-ui.link.nav-content>
        </x-ui.link.link>
    @endfor

    <x-ui.link.link href="/admin">
        <x-ui.link.icon>
            <i class="fa fa-user"></i>
        </x-ui.link.icon>
        <x-ui.link.nav-content>
            <x-ui.link.nav-title>Admin</x-ui.link.nav-title>
            <x-ui.link.nav-subtitle>View admin dashboard</x-ui.link.nav-subtitle>
        </x-ui.link.nav-content>
    </x-ui.link.link>

    @for ($i = 0; $i < 7; $i++)
        <a class="nav-link" href="#">
            <div class="nav-icon">
                <i class="fa fa-home"></i>
            </div>
            <div class="nav-content">
                <div class="nav-title">
                    {{ 'Users' }}
                </div>
                <div class="nav-subtitle">
                    {{ 'View system users, View system users' }}
                </div>
            </div>
        </a>
    @endfor
</div>
