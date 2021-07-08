const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css/')
//  admin js
    .js('resources/js/admins/vendor.js', 'public/js/admins/vendor.js')
    // .js('resources/js/admins/notification.js', 'public/js/admins/notification.js')
    .js('resources/js/admins/ckeditor.js', 'public/js/admins/ckeditor.js')
    .js('resources/js/admins/pages/user.js', 'public/js/admins/pages/user.js')
    .js('resources/js/admins/pages/role.js', 'public/js/admins/pages/role.js')
    .js('resources/js/admins/api.js', 'public/js/admins/api.js')
    .js('resources/js/admins/pages/slide.js', 'public/js/admins/pages/slide.js')
    .js('resources/js/admins/pages/why-us.js', 'public/js/admins/pages/why-us.js')
    .js('resources/js/admins/pages/mentor.js', 'public/js/admins/pages/mentor.js')
    .js('resources/js/admins/pages/testimonial.js', 'public/js/admins/pages/testimonial.js')
    .js('resources/js/admins/pages/partner.js', 'public/js/admins/pages/partner.js')
    .js('resources/js/admins/pages/benefit.js', 'public/js/admins/pages/benefit.js')
    .js('resources/js/admins/pages/gallery.js', 'public/js/admins/pages/gallery.js')
    .js('resources/js/admins/pages/blog.js', 'public/js/admins/pages/blog.js')
    .js('resources/js/admins/pages/press.js', 'public/js/admins/pages/press.js')
    .js('resources/js/admins/pages/job.js', 'public/js/admins/pages/job.js')
    .js('resources/js/admins/pages/social-value.js', 'public/js/admins/pages/social-value.js')
    .js('resources/js/admins/pages/program.js', 'public/js/admins/pages/program.js')
    .js('resources/js/admins/pages/course.js', 'public/js/admins/pages/course.js')
    .js('resources/js/admins/pages/parent.js', 'public/js/admins/pages/parent.js')
    // .js('resources/js/admins/pages/test.js', 'public/js/admins/pages/test.js')
//  admin  Css
    .sass('resources/sass/admins/vendor.scss', 'public/css/admins/vendor.css')
    /*=======Website Js and Style Customize=====*/
    .sass('resources/sass/websites/theme.scss', 'public/css/websites/theme.css')
    .sass('resources/sass/websites/customize.scss', 'public/css/websites/customize.css')
    .sass('resources/sass/websites/pages/home.scss', 'public/css/websites/pages/home.css')
    .sass('resources/sass/websites/pages/parents.scss', 'public/css/websites/pages/parents.css')
    .sass('resources/sass/websites/pages/program.scss', 'public/css/websites/pages/program.css')
    .sass('resources/sass/websites/pages/school.scss', 'public/css/websites/pages/school.css')
    .sass('resources/sass/websites/pages/my-account.scss', 'public/css/websites/pages/my-account.css')
    .sass('resources/sass/websites/pages/contact-us.scss', 'public/css/websites/pages/contact-us.css')
    .sass('resources/sass/websites/pages/blog.scss', 'public/css/websites/pages/blog.css')
    .sass('resources/sass/websites/pages/mini-challenge.scss', 'public/css/websites/pages/mini-challenge.css')
    .sass('resources/sass/websites/pages/course-detail.scss', 'public/css/websites/pages/course-detail.css')
    .sass('resources/sass/websites/pages/social-value-creation.scss', 'public/css/websites/pages/social-value-creation.css')

    .js('resources/js/websites/vendor.js', 'public/js/websites/vendor.js')
    .scripts('resources/js/websites/api.js', 'public/js/websites/api.js')
    .js('resources/js/websites/auth.js', 'public/js/websites/auth.js')
    .js('resources/js/websites/pages/home.js', 'public/js/websites/pages/home.js')
    .js('resources/js/websites/pages/parents.js', 'public/js/websites/pages/parents.js')

    //.copyDirectory('resources/plugins','public/plugins')
    .sourceMaps();
