var notificationsWrapper = $('.main-header-notification');
var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
var notificationsCountElem = notificationsToggle.find('span[data-count]');
var notificationsCount = parseInt(notificationsCountElem.data('count'));
var notifications = notificationsWrapper.find('li.scrollable-container');

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('status-liked');
// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\StatusLiked', function (data) {
    var existingNotifications = notifications.html();
    var newNotificationHtml = `<a href="`+data.user_id+`"><div class="media-body"><h6 class="media-heading text-right">` + data.user_name + `</h6> <p class="notification-text font-small-3 text-muted text-right">` + data.comment + `</p><small style="direction: ltr;"><p class="media-meta text-muted text-right" style="direction: ltr;">` + data.date + data.time + `</p> </small></div></div></a>`;
    notifications.html(newNotificationHtml + existingNotifications);
    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    notificationsWrapper.find('.notif-count').text(notificationsCount);
    notificationsWrapper.show();
});