@if(\Illuminate\Support\Facades\Auth::guard('web')->check())
    <p class="text-primary">
        You Are Logged in As a <strong> User</strong>
    </p>
    @else
    <p class="text-danger">
    You Are Logged Out as a <strong> User</strong>
    </p>
@endif

@if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
    <p class="text-primary">
        You Are Logged in As a <strong> Admin</strong>
    </p>
@else
    <p class="text-danger">
        You Are Logged Out as a <strong> Admin</strong>
    </p>
@endif
