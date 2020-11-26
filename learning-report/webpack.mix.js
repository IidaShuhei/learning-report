const mix = require("laravel-mix");

mix.react("resources/js/app.js", "public/js")
    .js("resources/js/subject.js", "public/js")
    .js("resources/js/charge_subject.js", "public/js")
    .sass("resources/sass/app.scss", "public/css");
