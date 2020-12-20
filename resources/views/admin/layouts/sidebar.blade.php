<div class="sidebar" data-background-color="white" data-active-color="danger">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href={!! url('/admin') !!} class="simple-text">
                Elhawary Brands
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="{!! url('/admin') !!}">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{!! url('/admin/users') !!}">
                    <i class="ti-user"></i>
                    <p>Users</p>
                </a>
            </li>
            <li>
                <a href="{!! url('/admin/category') !!}">
                    <i class="ti-view-list-alt"></i>
                    <p>Caregory</p>
                </a>
            </li>

            <li>
                <a href="{!! url('/admin/product') !!}">
                    <i class="ti-archive"></i>
                    <p>Product</p>
                </a>
            </li>

            <li>
                <a href="{!! url('/admin/orders') !!}">
                    <i class="ti-shopping-cart-full"></i>
                    <p>Orders</p>
                </a>
            </li>
            <li>
                <a href="{!! url('/admin/feedbacks') !!}">
                    <i class="ti-comment-alt"></i>
                    <p>Messages</p>
                </a>
            </li>


        </ul>
    </div>
</div>
