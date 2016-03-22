<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Infinix
 */

get_header();?>

<div class="support-banner">
    <img src="/wp-content/uploads/themes/support-banner.jpg">
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p class="support-intro">Bienvenue sur la plate-forme des services personnalisés Infinix. Vous pouvez facilement rechercher les mises à jour, manuels d'utilisation, réseaux, garanties et une FAQ pour résoudre vos problèmes. Nous nous soucions de votre question!</p>
            </div>
        </div>
    </div>
</section>

<section class="support-selection">
    <div class="container">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <h3>STEP 1</h3>
                    <button type="button" class="selection-head" data-toggle="collapse" data-target="#service" aria-expanded="false" aria-controls="service" data-type="0">Sélectionnez votre service</button>
                    <div class="collapse selection-list" id="service">
                        <a href="#" data-service="1">Mises à jour</a>
                        <a href="#" data-service="2">Manuels d'utilisation</a>
                        <a href="#" data-service="3">Centre de service après vente </a>
                        <a href="#" data-service="4">FAQS</a>
                        <a href="#" data-service="5">Garantie</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <h3>STEP 2</h3>
                    <button type="button" class="selection-head" data-toggle="collapse" data-target="#phone" aria-expanded="false" aria-controls="phone" disabled>Sélectionnez votre téléphone</button>
                    <div class="collapse selection-list" id="phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <h3>STEP 3</h3>
                    <button type="button" class="selection-head" data-toggle="collapse" data-target="#location" aria-expanded="false" aria-controls="location" disabled>Sélectionnez votre emplacement</button>
                    <div class="collapse selection-list" id="location">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script id='phoneListTpml' type="x-tmpl-mustache">
{{#data}}
<a href="#" data-id="{{ id }}">{{ name }}</a>
{{/data}}
</script>
<script id='locationListTpml' type="x-tmpl-mustache">
{{#data}}
<a href="#" data-url="{{ url }}">{{ country }}</a>
{{/data}}
</script>
<script id='serivceNetworkListTpml' type="x-tmpl-mustache">
{{#data}}
<button type="button" data-toggle="collapse" data-target="#city-list-{{ index }}">{{ name }}</button>
<div class="city collapse in" id="city-list-{{ index }}" data-id="{{ id }}">
    {{#city}}
        <a href="#" data-city="{{ city }}">{{ city }}</a>
    {{/city}}
</div>
{{/data}}
</script>
<script id='warrantyLocationListTpml' type="x-tmpl-mustache">
{{#data}}
<a href="#" data-id="{{ id }}">{{ country }}</a>
{{/data}}
</script>
<script id="phoneTpml" type="x-tmpl-mustache">
<section class="support-box-wrap support-update">
    <div class="container">
        <div class="row support-box">
            <div class="col-xs-12 box-head">Mises à jour</div>
            <div class="col-xs-12 box-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs" style="text-align: center;">
                            <img src="{{image}}">
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <div class="row">
                                {{#hasLaptop}}
                                <div class="download-item col-xs-12 col-sm-6">
                                    <h5 class="update-laptop">Ordinateur portable</h5>
                                    {{#laptop}}
                                    <div class="update-item">{{&title}}<a class="btn btn-download" href="{{url}}">Download</a></div>
                                    {{/laptop}}
                                </div>
                                {{/hasLaptop}}
                                {{#hasTfcard}}
                                <div class="download-item col-xs-12 col-sm-6">
                                    <h5 class="update-tfcard">Carte de TF</h5>
                                    {{#tfcard}}
                                    <div class="update-item">{{&title}}<a class="btn btn-download" href="{{url}}">Download</a></div>
                                    {{/tfcard}}
                                </div>
                                {{/hasTfcard}}
                                <div class="col-xs-12">
                                    <h5>Notes:</h5>
                                    <p>1. S’il vous plaît Pensez à sauvegarder vos fichiers personnels avant d’installer un nouveau système d'exploitation.</p>
                                    <p>2. S’il vous plaît, suivez strictement les instructions pour mettre à jour nouveau système d'exploitation.</p>
                                    <p>3. Si vous rencontrez un problème, vous pouvez contacter le service apres vente local pour obtenir de l'aide.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 hidden-xs"></div>
                    </div>
                </div>
            </div>
            <img src="/wp-content/uploads/themes/icon-support-update.jpg" class="box-icon">
        </div>
    </div>
</section>
</script>
<script id="manualTpml" type="x-tmpl-mustache">
<section class="support-box-wrap support-manual">
    <div class="container">
        <div class="row support-box">
            <div class="col-xs-12 box-head">Manuels d'utilisation</div>
            <div class="col-xs-12 box-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs" style="text-align: center;">
                            <img src="{{image}}">
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <div class="row">
                                {{#manual}}
                                <div class="download-item col-xs-12 col-sm-6">
                                    <h5>{{&lang}}</h5>
                                    <a class="btn btn-download" href="{{url}}">Read more</a>
                                </div>
                                {{/manual}}
                            </div>
                        </div>
                        <div class="col-md-1 hidden-xs"></div>
                    </div>
                </div>
            </div>
            <img src="/wp-content/uploads/themes/icon-support-manual.jpg" class="box-icon">
        </div>
    </div>
</section>
</script>
<script id="serviceNetworkTpml" type="x-tmpl-mustache">
<section class="support-box-wrap support-service-network">
    <div class="container">
        <div class="row support-box">
            <div class="col-xs-12 box-head">Centre de service après vente</div>
            <div class="col-xs-12 box-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4" style="text-align: center;">
                            <img class="hidden-xs" src="{{flag}}">
                            <div>{{ &country }}</div>
                            <div class="city">{{ data.city }}</div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            {{#data.point}}
                            <table class="address">
                                <tr>
                                    <td>Address</td>
                                    <td>{{ addr }}</td>
                                </tr>
                                <tr>
                                    <td>Telephone</td>
                                    <td>{{ tel }}</td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td>{{ email }}</td>
                                </tr>
                                <tr>
                                    <td>Working time</td>
                                    <td>{{ time }}</td>
                                </tr>
                            </table>
                            {{/data.point}}
                        </div>
                    </div>
                </div>
            </div>
            <img src="/wp-content/uploads/themes/icon-support-service-network.jpg" class="box-icon">
            <img src="/wp-content/uploads/themes/icon-support-csc.jpg" class="box-flag">
        </div>
    </div>
</section>
</script>
<script id="faqTpml" type="x-tmpl-mustache">
<section class="support-box-wrap support-faq">
    <div class="container">
        <div class="row support-box">
            <div class="col-xs-12 box-head">FAQS</div>
            <div class="col-xs-12 box-body">
                <div class="container">
                    <div class="row" role="tabpanel">
                        <div class="col-sm-3">
                            <button id="qa-tabs-btn" type="button" class="visible-xs btn btn-block btn-dropdown" data-toggle="collapse" data-target="#qa-tabs" aria-expanded="true">Category <span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                            <ul class="list-group" role="tablist" id="qa-tabs" aria-expanded="true">
                                {{#title}}
                                <a class="list-group-item" href="#qa{{index}}">{{ title }}</a>
                                {{/title}}
                            </ul>
                        </div>
                        <div class="col-sm-9">
                            <div class="tab-content">
                                {{#content}}
                                <div role="tabpanel" class="tab-pane" id="qa{{index}}">
                                    {{#qa}}
                                    <div class="faq-title">{{&q}}</div>
                                    <div class="faq-body">{{&a}}</div>
                                    {{/qa}}
                                </div>
                                {{/content}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="/wp-content/uploads/themes/icon-support-faq.jpg" class="box-icon">
        </div>
    </div>
</section>
</script>
<script id="warrantyTpml" type="x-tmpl-mustache">
<section class="support-box-wrap support-warranty">
    <div class="container">
        <div class="row support-box">
            <div class="col-xs-12 box-head">Garantie</div>
            <div class="col-xs-12 box-body">
                {{#data}}
                <div class="support-q">{{&q}}</div>
                <div class="support-a">{{&a}}</div>
                {{/data}}
            </div>
            <img src="/wp-content/uploads/themes/icon-support-warranty.jpg" class="box-icon">
            <div class="box-flag hidden-xs"><img src="{{flag}}"><br>{{&country}}</div>
        </div>
    </div>
</section>
</script>

<?php get_footer(); ?>
