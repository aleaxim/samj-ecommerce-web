<div class="col-lg-6 col-sm-18">
    <div class="order-information">
        <h4>Order Information</h4>

        <ul class="list-inline order-information-list">
            <li>
                <label>Order No.:</label>
                <span>{{ $order->trackingnumber }}</span>
            </li>

            <li>
                <label>Order Date:</label>
                <span>{{ date('Y-m-d', strtotime($order->created_at)) }}</span>
            </li>

            <li>
                <label>Order Status:</label>
                @if ($order->status != 'Cancelled')
                    <span style="color:#2E32CD; font-weight:600">{{ $order->status }}</span>
                @else
                    <span style="color:#CD2E3A; font-weight:600">{{ $order->status }}</span>
                @endif
            </li>

        </ul>
    </div>
</div>
