@section('sidebar')

        <!-- BEGIN MENU LAYER -->
        <div class="menu-layer">
            <ul>
                <li data-open-after="true">
                    <a href="{{ url('assign/workout') }}">Dashboard</a>
                </li>

                <li data-open-after="false">
                    <a href="{{ url('assign/workout') }}">Assign Workout</a>
                </li>

                <li data-open-after="false">
                    <a href="{{ url('users') }}">Manage users</a>
                </li>

                <li data-open-after="false">
                    <a href="{{ url('create/user') }}">Register user</a>
                </li>
            </ul>
        </div><!--.menu-layer-->
        <!-- END OF MENU LAYER -->