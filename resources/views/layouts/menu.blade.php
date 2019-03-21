<li class="{{ Request::is('apps*') ? 'active' : '' }}">
    <a href="{!! route('apps.index') !!}"><i class="fa fa-edit"></i><span>Apps</span></a>
</li>

<li class="{{ Request::is('builds*') ? 'active' : '' }}">
    <a href="{!! route('builds.index') !!}"><i class="fa fa-edit"></i><span>Builds</span></a>
</li>

<li class="{{ Request::is('groups*') ? 'active' : '' }}">
    <a href="{!! route('groups.index') !!}"><i class="fa fa-edit"></i><span>Groups</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('usersubs*') ? 'active' : '' }}">
    <a href="{!! route('usersubs.index') !!}"><i class="fa fa-edit"></i><span>User Subscriptions</span></a>
</li>

<li class="{{ Request::is('userseats*') ? 'active' : '' }}">
    <a href="{!! route('userseats.index') !!}"><i class="fa fa-edit"></i><span>User Seats</span></a>
</li>

<li class="{{ Request::is('userdetails*') ? 'active' : '' }}">
        <a href="{!! route('userdetails.index') !!}"><i class="fa fa-edit"></i><span>User Details</span></a>
    </li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('usersapi*') ? 'active' : '' }}">
    <a href="{!! route('users.api') !!}"><i class="fa fa-edit"></i><span>API</span></a>
</li>

