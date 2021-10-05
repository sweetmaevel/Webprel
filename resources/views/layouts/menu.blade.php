<li class="nav-item">
    <a href="{{ route('tables.index') }}"
       class="nav-link {{ Request::is('tables*') ? 'active' : '' }}">
        <p>Tables</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tableProducts.index') }}"
       class="nav-link {{ Request::is('tableProducts*') ? 'active' : '' }}">
        <p>Table Products</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tableServices.index') }}"
       class="nav-link {{ Request::is('tableServices*') ? 'active' : '' }}">
        <p>Table Services</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tablePricings.index') }}"
       class="nav-link {{ Request::is('tablePricings*') ? 'active' : '' }}">
        <p>Table Pricings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tableSales.index') }}"
       class="nav-link {{ Request::is('tableSales*') ? 'active' : '' }}">
        <p>Table Sales</p>
    </a>
</li>


