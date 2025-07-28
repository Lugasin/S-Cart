import React, { useEffect, useState } from 'react';
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

const echo = new Echo({
  broadcaster: 'pusher',
  key: 'app-key',
  wsHost: window.location.hostname,
  wsPort: 6001,
  forceTLS: false,
  disableStats: true,
});

function Orders() {
  const [orders, setOrders] = useState([]);

  useEffect(() => {
    echo.private('orders')
      .listen('OrderCreated', (e) => {
        setOrders((prevOrders) => [e.order, ...prevOrders]);
      });
  }, []);

  return (
    <div>
      <h1>Orders</h1>
      <ul>
        {orders.map((order) => (
          <li key={order.id}>
            Order #{order.id} - {order.total}
          </li>
        ))}
      </ul>
    </div>
  );
}

export default Orders;
