import './bootstrap';

Echo.private('orders')
    .listen('OrderCreated', (e) => {
        alert('New order created: ' + e.order.id);
    });
