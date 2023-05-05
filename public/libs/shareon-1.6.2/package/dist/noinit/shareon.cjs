/*! shareon v1.6.2 */
'use strict';

var urlBuilderMap = {facebook:function (d) { return ("https://www.facebook.com/sharer/sharer.php?u=" + (d.url)); },linkedin:function (d) { return ("https://www.linkedin.com/sharing/share-offsite/?url=" + (d.url)); },mastodon:function (d) { return ("https://toot.karamoff.dev/?text=" + (d.title) + "%0D%0A" + (d.url) + (d.text ? ("%0D%0A%0D%0A" + (d.text)) : '') + (d.via ? ("%0D%0A%0D%0A" + (d.via)) : '')); },messenger:function (d) { return ("https://www.facebook.com/dialog/send?app_id=" + (d.fbAppId) + "&link=" + (d.url) + "&redirect_uri=" + (d.url)); },odnoklassniki:function (d) { return ("https://connect.ok.ru/offer?url=" + (d.url) + "&title=" + (d.title) + (d.media ? ("&imageUrl=" + (d.media)) : '')); },pinterest:function (d) { return ("https://pinterest.com/pin/create/button/?url=" + (d.url) + "&description=" + (d.title) + (d.media ? ("&media=" + (d.media)) : '')); },pocket:function (d) { return ("https://getpocket.com/edit.php?url=" + (d.url)); },reddit:function (d) { return ("https://www.reddit.com/submit?title=" + (d.title) + "&url=" + (d.url)); },telegram:function (d) { return ("https://telegram.me/share/url?url=" + (d.url) + (d.text ? ("&text=" + (d.text)) : '')); },twitter:function (d) { return ("https://twitter.com/intent/tweet?url=" + (d.url) + "&text=" + (d.title) + (d.via ? ("&via=" + (d.via)) : '')); },viber:function (d) { return ("viber://forward?text=" + (d.title) + "%0D%0A" + (d.url) + (d.text ? ("%0D%0A%0D%0A" + (d.text)) : '')); },vkontakte:function (d) { return ("https://vk.com/share.php?url=" + (d.url) + "&title=" + (d.title) + (d.media ? ("&image=" + (d.media)) : '')); },whatsapp:function (d) { return ("https://wa.me/?text=" + (d.title) + "%0D%0A" + (d.url) + (d.text ? ("%0D%0A%0D%0A" + (d.text)) : '')); }};

// eslint-disable-next-line import/no-unresolved

var initializeShareon = function () {
  var shareonContainers = document.getElementsByClassName('shareon');

  // iterate over <div class="shareon">
  for (var i = 0; i < shareonContainers.length; i += 1) {
    /** @type Element */
    var container = shareonContainers[i];

    // iterate over children of <div class="shareon">
    for (var j = 0; j < container.children.length; j += 1) {
      /** @type Element */
      var child = container.children[j];

      if (child) {
        var classListLength = child.classList.length;

        // iterate over classes of the child element
        for (var k = 0; k < classListLength; k += 1) {
          var cls = child.classList.item(k);

          // if it's one of the networks
          if (Object.prototype.hasOwnProperty.call(urlBuilderMap, cls)) {
            var preset = {
              url: encodeURIComponent(
                child.dataset.url
                || container.dataset.url
                || window.location.href
              ),
              title: encodeURIComponent(
                child.dataset.title
                || container.dataset.title
                || document.title
              ),
              media: encodeURIComponent(
                child.dataset.media
                || container.dataset.media
                || ''
              ),
              text: encodeURIComponent(
                child.dataset.text
                || container.dataset.text
                || ''
              ),
              via: encodeURIComponent(
                child.dataset.via
                || container.dataset.via
                || ''
              ),
              fbAppId: encodeURIComponent(
                child.dataset.fbAppId
                || container.dataset.fbAppId
                || ''
              ),
            };
            var url = urlBuilderMap[cls](preset);

            if (child.tagName.toLowerCase() === 'a') {
              child.setAttribute('href', url);
              child.setAttribute('rel', 'noopener noreferrer');
              child.setAttribute('target', '_blank');
            } else {
              var getButtonListener = function (buttonUrl) { return function () {
                window.open(buttonUrl, '_blank', 'noopener,noreferrer');
              }; };

              child.addEventListener('click', getButtonListener(url));
            }

            break; // once a network is detected we don't want to check further
          }
        }
      }
    }
  }
};

module.exports = initializeShareon;
