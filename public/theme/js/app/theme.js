'use strict';

function darkTheme(element) {

    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", element.getAttribute('url'), false); // false for synchronous request
    xmlHttp.send(null);
    window.location.reload();
}
