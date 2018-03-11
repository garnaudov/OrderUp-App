<?php
include 'navigation.php';
?>

<!-- Content -->
<div id="content">
    <section class="section section-lg bg-light">
        <div class="container" data-local-scroll>
            <div class="col-lg-8 push-lg-4">
                <h1>Документация</h1>
                <p class="text-muted lead">Страницата описва елементите и технологиите, които съм използвал за изграждането на OrderUP</p>
                <a href="#main" class="btn btn-outline-secondary btn-lg"><span>Започни <i class="i-after ti-arrow-down"></i></span></a>
                
            </div>
        </div>
        
    </section>
		
	<section id="main" class="container">
        <div class="row">
            <div class="col-md-9"> 
               <!-- Getting Started -->
                <div id="start">
                    <h1 class="border-bottom pb-3">Като за начало</h1>
                    <p class="lead">Front-end частта на OrderUP е HTML/CSS, базиран на <a href="http://v4-alpha.getbootstrap.com/" target="_blank" class="text-primary">Bootstrap 4</a> фреймуърк. Така изградих съвременен, бърз и мобайл-френдли дизайн. </p>
                    
                    <!-- HTML Structure -->
                    <div id="htmlStructure" class="py-3">
                        <h2>HTML структура</h2>
                        <p class="lead">Това е структурата на всеки HTML документ:</p>
<pre class="prettyprint">
&lt;!-- Header --&gt;
&lt;header id="header"&gt;
    ...
&lt;/header&gt;
&lt;!-- Header / End --&gt;
&lt;!-- Content --&gt;
&lt;div id="content"&gt;
		
	&lt;!-- Section --&gt;
	&lt;section&gt;
		...
	&lt;/section&gt;
    &lt;!-- Footer --&gt;
    &lt;footer&gt;
        ...
    &lt;/footer&gt;
&lt;/div&gt;
&lt;!-- Content / End --&gt;
</pre>
                    </div>
                    
                <!-- Content Elements -->
                <div id="content-elements" class="py-5">
    
                    <h1 class="border-bottom pb-3">Съдържание</h1>
                    
                        <!-- Headings -->
                        <h3 id="headings">Заглавия</h3>
                        <div class="example-box">
                            <div class="example-box-title">Заглавия</div>
                            <div class="example-box-content">
                                <h1>h1. заглавие</h1>
                                <h2>h2. заглавие</h2>
                                <h3>h3. заглавие</h3>
                                <h4>h4. заглавие</h4>
                                <h5>h5. заглавие</h5>                                                               
                            </div>
                        </div>
<pre class="prettyprint">
&lt;h1&gt;h1. Bootstrap heading&lt;/h1&gt;
&lt;h2&gt;h2. Bootstrap heading&lt;/h2&gt;
&lt;h3&gt;h3. Bootstrap heading&lt;/h3&gt;
&lt;h4&gt;h4. Bootstrap heading&lt;/h4&gt;
&lt;h5&gt;h5. Bootstrap heading&lt;/h5&gt;
&lt;h6&gt;h6. Bootstrap heading&lt;/h6&gt;
</pre>
                       <!-- Paragraph -->
                        <h3 id="paragr">Параграф</h3>
                        <div class="example-box">
                            <div class="example-box-title">Пример</div>
                            <div class="example-box-content">
                                <p class="lead">Maecenas a risus quis ipsum convallis fringilla in ut magna. Phasellus et sagittis odio. Sed in enim condimentum, lacinia metus id, sollicitudin libero. In ac ultricies justo. </p>
                                <p>Curabitur sit amet turpis eu diam luctus viverra. Sed viverra ornare ex, quis lobortis diam vehicula a. In imperdiet est tristique, malesuada odio quis, volutpat ante. Nulla ullamcorper, nisl sed faucibus posuere, dui turpis mattis turpis, in porttitor massa odio nec sapien.</p>
                            </div>
                        </div>
<pre class="prettyprint">&lt;p class="lead"&gt;...&lt;/p&gt;
&lt;p&gt;...&lt;/p&gt;
</pre>
                    </div> 
                    
                     <!-- Icons -->
                    <div id="icons" class="py-3">
                        <h2>Икони</h2>
                        <p class="lead">Използван е добреизглеждащ сет с икони - <a href="http://themify.me/themify-icons/" target="_blank" class="text-primary">Themify Icons</a></p>
                        <h3>Основни икони</h3>
                        <div class="example-box">
                            <div class="example-box-title">Пример</div>
                            <div class="example-box-content">
                                <div class="row">
                                    <div class="col-md-4"> 
                                        <span class="icon icon-lg"><i class="ti-desktop"></i></span>
                                    </div>
                                    <div class="col-md-4"> 
                                        <span class="icon"><i class="ti-desktop"></i></span>
                                    </div>
                                    <div class="col-md-4"> 
                                        <span class="icon icon-sm"><i class="ti-desktop"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
<pre class="prettyprint html-code">
<span class="icon icon-lg"><i class="ti-desktop"></i></span>
<span class="icon"><i class="ti-desktop"></i></span>
<span class="icon icon-sm"><i class="ti-desktop"></i></span>
</pre>
		
                    </div>
                </div>
                <!-- Content Elements / End -->
                <!-- Components -->
                <div id="components" class="py-5">
                    <h1 class="border-bottom pb-3">Компоненти</h1>
                    
                        <h3 id="buttons">Бутони</h3>
                        <div class="example-box">
                            <div class="example-box-title">Примери - използвани цветове</div>
                            <div class="example-box-content">
                                
                                <button type="button" class="btn btn-outline-secondary"><span>Тъмносин</span></button>
                                <button type="button" class="btn btn-outline-success"><span>Зелен</span></button>
                                <button type="button" class="btn btn-outline-info"><span>Светлосин</span></button>
                                <button type="button" class="btn btn-outline-warning"><span>Оранжев</span></button>
                                <button type="button" class="btn btn-outline-danger"><span>Червен</span></button>
                            </div>
                        </div>
                     <!-- Tooltips -->
                    <h3 id="tooltips">Tooltip-ове</h3>
                        
                        <p class="lead">Както в менюто, така и в отделните страници за поръчване съм обозначил с туултип-ове
                                (изплуващи облачета) някои полезни качества на дадения продукт. Целта е клиентите да обърнат внимание на това и
                                по този начин да направят по-информиран и здравословен избор за хранене. :)</p>
                            <div class="example-box-title"></div>
                            <div class="example-box-content">
                                    <img data-tooltip data-placement="bottom" title="Без глутен" data-tooltip src="assets\img\no-gluten.png" width="26" height="26">
                                    <img class="mar-left" data-tooltip data-placement="bottom" title="С натурални продукти" src="assets\img\natural-food.png" width="26" height="26">
                                    <img class="mar-left" data-tooltip data-placement="bottom" title="Без добавени захари" src="assets\img\no-added-sugar.png" width="26" height="26">
                                        </br></br></br>
                                    <img data-tooltip data-placement="bottom" title="Веган" src="assets\img\vegan-food.png" width="26" height="26">                                            
                                    <img class="mar-left" data-tooltip data-placement="bottom" title="Приготвено със зехтин" src="assets\img\olive-oil.png"  width="26" height="26">
                                    <img class="mar-left" data-tooltip data-placement="bottom" title="Без соя" src="assets\img\no-soy.png" width="26" height="26">
                            </div>
                            <pre class="prettyprint">
&lt;img data-tooltip data-placement=&quot;bottom&quot; title=&quot;Без глутен&quot; data-tooltip src=&quot;assets\img\no-gluten.png&quot; width=&quot;26&quot; height=&quot;26&quot;&gt;
&lt;img data-tooltip data-placement=&quot;bottom&quot; title=&quot;С натурални продукти&quot; src=&quot;assets\img\natural-food.png&quot; width=&quot;26&quot; height=&quot;26&quot;&gt;
&lt;img data-tooltip data-placement=&quot;bottom&quot; title=&quot;Без добавени захари&quot; src=&quot;assets\img\no-added-sugar.png&quot; width=&quot;26&quot; height=&quot;26&quot;&gt;
&lt;img data-tooltip data-placement=&quot;bottom&quot; title=&quot;Веган&quot; src=&quot;assets\img\vegan-food.png&quot; width=&quot;26&quot; height=&quot;26&quot;&gt;                                          
&lt;img data-tooltip data-placement=&quot;bottom&quot; title=&quot;Приготвено със зехтин&quot; src=&quot;assets\img\olive-oil.png&quot;  width=&quot;26&quot; height=&quot;26&quot;&gt;
&lt;img data-tooltip data-placement=&quot;bottom&quot; title=&quot;Без соя&quot; src=&quot;assets\img\no-soy.png&quot; width=&quot;26&quot; height=&quot;26&quot;&gt;
</pre>
                            
                        
                   
                   
                    
                    <!-- Carousel -->
                    <div id="carousel" class="py-3">
                        <h2>Слайдер</h2>
                        <p class="lead">Слайдерът е удобен и интуитивен инструмент за представяне на съдържание. Посетете страницата на<a class="text-primary" href="http://kenwheeler.github.io/slick/" target="_blank">Slick</a> за да прегледате пълната документация на компонента.</p>
                        <div class="example-box">
                            <div class="example-box-title">Пример</div>
                            <div class="example-box-content">
                                <!-- Carousel -->
                                <div class="carousel carousel-items" data-slick='{
                                    "slidesToShow": 3, 
                                    "slidesToScroll": 1,
                                    "dots": true,
                                    "arrows": false,
                                    "responsive": [
                                        {
                                            "breakpoint": 991,
                                            "settings": {
                                                "slidesToShow": 2
                                            }
                                        },
                                        {
                                            "breakpoint": 575,
                                            "settings": {
                                                "slidesToShow": 1
                                            }
                                        }
                                    ]
                                    }'>
                                    <div class="carousel-item">
                                        <img src="assets/img/photos/menu-sample-drinks.jpg" class="rounded" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/photos/menu-sample-salads.jpg" class="rounded" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/photos/menu-sample-pizza.jpg" class="rounded" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/photos/menu-sample-dessert.jpg" class="rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Components / End -->        
<!-- Files & Credits -->
                <div id="files" class="py-3">
                        <h2>Прикачени файлове и използвани технологии</h2>
                </div>
                <!-- Presentation -->    
                <div id="pptx" class="py-3">
                        <h2>Презентация</h2>
                        <p class="lead">Оттук можете да изтеглите и прегледате презентацията за проекта</p>
                        <a href="https://drive.google.com/open?id=1MAaJbCfaFhYkmtxJScaZOw5w70WF811s" class="btn btn-outline-secondary btn-lg"><span>Презентация</span></a>
                </div>
                <!-- Broshure -->    
                <div id="broshure" class="py-3">
                        <h2>Брошура</h2>
                        <p class="lead">Оттук можете да видите брошурата за проекта</p>
                        <a href="https://drive.google.com/open?id=15h-km635Zhy0JXyAPxrAc7mqWyMlIfEc" class="btn btn-outline-secondary btn-lg"><span>Брошура</span></a>
                </div>
                <!-- JS Files -->
                    <div id="jsFiles" class="py-3">
                        <h2>JavaScript файлове</h2>
                        <ul class="list-unstyled">
                            <li><code>core.js</code><code>, order.js</code> - <strong>JavaScript файлове</strong></li>
                        </ul>
                        <p>Пълен лист с всички използвани плъгин-и</p>
<pre class="prettyprint">
&lt;script src=&quot;assets/plugins/jquery/dist/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.2/sweetalert2.all.min.js.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/bootstrap/dist/js/bootstrap.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/slick-carousel/slick/slick.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/jquery.appear/jquery.appear.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/jquery.scrollto/jquery.scrollTo.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/jquery.localscroll/jquery.localScroll.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/skrollr/dist/skrollr.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/animsition/dist/js/animsition.min.js&quot;&gt;&lt;/script&gt;
</pre>                  
                        <p>Tooltip-овете  е въведени посредством функцията: 
<pre class="prettyprint">
&lt;script&gt;
$(function() {
$('[data-tooltip]').tooltip();
});
&lt;/script&gt;</pre>
                                </p>
                        <p>Тази страница използва допълнителен <code>assets/js/prettify.js</code> плъгин за код хайлайтър.</p>
                    </div>
                    <!-- Images -->    
                <div id="photos" class="py-3">
                        <h2>Снимки</h2>
                        <p class="lead">Снимката <code>assets/img/photos/bg-desk.jpg</code> за фон на страница <code>order.php</code> е със свободен лиценз: 
                        <a href="http://www.freepik.com">Designed by Freepik</a></p>
                        <p class="lead">Символните означения, използвани за означаване на някои хранителни предимства 
                            на предлаганите в асортимента продукти са също със свободен лиценз: <a href="https://icons8.com">Icons8</a></p> 
                        <p class="lead">Всички останали използвани снимки са авторски, заснети от мен.</p>
                        
                </div>
                 <!-- Logo -->    
                <div id="logo" class="py-3">
                        <h2>Лого на проекта</h2>                         
                        <p class="lead">Концепцията и цялостното изграждане на логото на проекта, OrderUP, са направени от мен посредством
                        софтуера на <a href="https://www.adobe.com">Adobe</a> - Adobe Illustrator (AI).</br>
                        Логото е направено в 4 различни варианта в зависимост както от цвета на фона зад него (Light и Dark), така и от подходяща
                        ориентация в различните случаи (Horizontal):
                        <div class="example-box">
                            <div class="example-box-title">Варианти на логото, основен и хоризонтален, подхоящи за светъл фон:</div>
                            <div class="example-box-content">
                                        <img src="assets/img/logo-dark.svg" alt="" width="188" class="mt-5 mb-5">
                            <span><img class="mar-left" src="assets/img/logo-horizontal-dark.svg" width="350" alt=""></span>
                            </div>
                        </div></br></br>
                        <div class="example-box">
                            <div class="example-box-title">Варианти на логото, основен и хоризонтален, подхоящи за тъмен фон:</div>
                            <div class="example-box-content-dark">
                                        <img src="assets/img/logo-light.svg" alt="" width="188" class="mt-5 mb-5">
                            <span><img class="mar-left" src="assets/img/logo-horizontal-light.svg" width="350" alt=""></span>
                                    
                            </div>
                        </div>
                </div>
                <!-- Files & Credits / End -->
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                <nav id="side-navigation" class="stick-to-content pt-5" data-local-scroll>
                    <ul class="nav nav-vertical">
                        <li class="nav-item">
                            <a class="nav-link" href="#start"><span>Начало</span></a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#htmlStructure"><span>HTML структура</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#content-elements"><span>Съдържание</span></a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#headings"><span>Заглавия</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#paragr"><span>Параграф</span></a></li>                               
                                <li class="nav-item"><a class="nav-link" href="#icons"><span>Икони</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#components"><span>Компоненти</span></a>
                            <ul>
                                
                                <li class="nav-item"><a class="nav-link" href="#buttons"><span>Бутони</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#tooltips"><span>Tooltip-ове</span></a></li>                                  
                                <li class="nav-item"><a class="nav-link" href="#carousel"><span>Слайдер</span></a></li>                                
                            </ul>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#files"><span>Прикачени файлове и използвани технологии</span></a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#pptx"><span>Презентация</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#broshure"><span>Брошура</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#jsFiles"><span>JavaScript технологии</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#photos"><span>Снимки</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#logo"><span>Лого</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> 
    </section> 
    <!-- Panel Mobile -->
    <nav id="panel-mobile">
        <div class="module module-logo bg-dark dark">
                <img src="../assets/img/logo-light.svg" alt="" width="88">
            <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
        </div>
        <nav class="module module-navigation"></nav>
        
    </nav>
    <!-- Footer -->
    <?php 
    include "footer.php";
?>

    <!-- Footer / End -->
 <!-- JS Plugins -->
<!-- JS CodeHighlighter -->
<script src="assets/js/prettify.js"></script>
<!-- Additional Initializations -->
<script>
    // Pretty Print Init
    !function ($) {
        $(function(){
          window.prettyPrint && prettyPrint()   
        })
    }(window.jQuery)
    // Html Markups 
    $('.php-code').each(function(){
        var innerHtml = $(this).php();
        innerHtml = innerHtml.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
        $(this).php(innerHtml);
    });
    Core.Component.tooltip();
</script>
</body>
</html>
