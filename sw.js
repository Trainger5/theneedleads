// /sw.js - Service Worker for Web Push
// Place this at your SITE ROOT (e.g., /sw.js)
// self.addEventListener('push', (event) => {
//   const data = event.data ? event.data.json() : {};
//   const title = data.title || 'New Notification';
//   const options = {
//     body: data.body || '',
//     icon: data.icon || '/icons/icon-192.png',
//     badge: data.badge || '/icons/icon-192.png',
//     data: data.url || '/',
//   };
//   event.waitUntil(self.registration.showNotification(title, options));
// });

// self.addEventListener('notificationclick', (event) => {
//   event.notification.close();
//   const target = event.notification.data || '/';
//   event.waitUntil(clients.openWindow(target));
// });

// sw.js
// importScripts("https://pushads123.com/pn-sw.js");

