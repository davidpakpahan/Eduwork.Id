import * as Snow from "/frontend/js/snow.js";

window.onload = function () {
    //create new snow
    var snow = new Snow.default({
        id: "snow",
        theme: "whites",
        min_size: 1,
        max_size: 5,
    });
    snow.start();

    // document.querySelector("body").onclick = function () {
    //     snow.toggle();
    // };
};
