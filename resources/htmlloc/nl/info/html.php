<div class="hmargin">

<div class="wf">
<h3><?=$html->a('overlay=shop&product=1','Local variables (reserved names)');?></h3>
<?php echo $html->debug($localvars);?>

<pre><?php // print_r($this); ?></pre>
<?=$html->a('overlay=react&ref=3','reageer');?><br>
<?=$html->a('overlay=mail','mail');?><br>
</div>

</div>

<div class="hmargin">
    
<div class="wf">
<h2>Mijn IT</h2>
<dl>
    <dt>Zaakvoerder</dt>
    <dd>Hariot Gaetan</dd>
    
    <dt>Ondernemingsnummer</dt>
    <dd>BE1234567890</dd>

    <dt>BTW plichtig</dt>
    <dd>Nee</dd>

</dl>
</div>

<div class="wf">
<h2>Why my website is so great!</h2>
<dl>
    <dt>Progressive enhancement (instead of Graceful degradation)</dt>
    <dd>This website is fully accesible without javascript,  HTML 5 or CSS 3</dd>
    <dd>But with javascript it become even more attractive/interactive</dd>

    <dt>Cookies</dt>
    <dd>I don't use cookies, unless you explicit set site preferences</dd>
    
    <dt>Responsive design</dt>
    <dd>This website is mobile Friendly</dd>
      
    <dt>Web 2.0</dt>
    <dd>This website encourage you to interact with our website</dd>
    <dd>This website use modern design principles, wich is very user friendly (eg overlays instead of popups)</dd>
</dl>
</div>

<div class="wf">
<h2>How my website was made so great (Client side)</h2>
<p>Responsive design principles: mobile first, unobtrusive JavaScript and progressive enhancement</p>

<dl>
    <dt>HTML 4.1 STRICT, HTML5 ready</dt>
    <dd>Design is done with &lt;div&gt; elements instead of tables</dd>
    <dd>This website uses static pure html-overlays </dd>
    <dd>Template language: Just PHP and HTML (no overhead from HAML, Smarty, or templatepower)</dd>

    <dt>CSS 2.1 valid, CSS3 ready</dt>
    <dd>Embedded stylesheets, to reduce http-server request, (with all overhaed) and avoid caching</dd>
    <dd>PHP-stylesheets, no preprocessor necesarry (LESS,SASS/SCSS)</dd>
    <dd>Browser resetter: Normalize.css</dd>
    <dd>Library: Non yet (like twitter bootstrap, or..)</dd>
    
    <dt>Unobtrusive javascript</dt>
    <dd>Javascript is fully separeted from the html page</dd>
    <dd>Library (non yet, maybe jquery)</dd>
    <dd>Tought, not much *DHTML* on my site</dd>

    <dt>Ajax</dt>
    <dd>Is nothing more than XMLhttprequest in javascript</dd>
    <dd>Serverside this is processed and answered</dd>
    <dd>The answer can be HTML, XML, or Json</dd>
    <dd>I like JSON more</dd>
</div>

<div class="wf">
<h2>How my website was made so great (Server side)</h2>
<dl>
    <dt>HTML</dt>
    <dd>Yes, i use static HTML pages where posible</dd>
    <dd>This reduce DB-request, and speeds up page loading</dd>

    <dt>MySQL 5</dt>
    <dd>Thougt, where necesary i use a database</dd>
    <dd>Input will be sanitized and stripped,..</dd>
    <dd>Prepared statements, PHP PDO CLASS</dd>

    <dt>CMS</dt>
    <dd>To manage all my content i use my own content manage system</dd>
    <dd>Joomla, Drupal, are good products, but i prefered to write my own</dd>
    <dd>The CMS is linked to my database, static page are crafted by hand</dd>
    <dd>In the future, i plan to add an editor for these static pages</dd>
    
    <dt>PHP 5</dt>
    <dd>
    <p>PHP is use to process input (url-queries too), acces database, and build the actual HTML-page.<br>  
    It's important to make readable code therefor i use following programming principles:</p>
    <p>There a beautiful frameworks, CakePHP, Zend, Django, Symphony<br>
    But writing my own does teach me more.
    </p>
    <h4>Some nice programming principles and quotes</h4>
    <ul>
        <li><a href="http://mmiika.wordpress.com/oo-design-principles/">OOP: Object Oriented Programming</a></li>
        <li>KISS: Keep it simple stupid!</li>
        <li>DRY: Don't repeat yourself</li>
        <li>COC: Convention Over Configuration</li>
        <li>YAGNI:You aren't gonna need it</li>
        <li>SOC: Separation of concerns</li>
        <li>SRP: single responsibility principle</li>
    </ul>
    <ul>
        <li>Distinguish between cause and effect (working with computers)</li>
        <li>Distinguish between fact and opinion (working with people)</li>
        <li>As simple as possible, but no simpler (design)</li>
    </ul>
    <ul>
        <li>If it ain't broke, don't fix it</li>
        <li><a href="http://en.wikipedia.org/wiki/MoSCoW_method">MoSCoW</a></li>
        <li><a href="http://en.wikipedia.org/wiki/List_of_software_development_philosophies">much more on wiki</a></li>
    </ul>
    </dd>
</dl>
</div>

<div class="wf">
<h2>More about methods and design</h2>
<dl>
    <dt>Agile development Manifesto</dt>
    <dd>HOW = You are more important, than the current tools and processes</dd>
    <dd>WHAT = the way it's asked, not what's planned</dd>
    <dd>WHEN = as soon as posible, instead of negociating and planning</dd>
    <dd>FINISH = If design is good, documentation is easy</dd>
</dl>
<dl>
    <dt>Extreme Programming</dt>
    <dd>Pragmatic Programming </dd>
    <dd>Only implement thing needed</dd>
    <dd>Alert for cowboy coding</dd>
</dl>
</div>

<div class="wf" style="display: none">
<h2>Details about the Model View Controller paradigma</h2>
<p>See here my own Implementation, inspired by mvc, but own interpretation.<br>
The main-target stay the same: seperate logic from data and view.
</p>
<p>
    <a href="http://www.tonymarston.net/php-mysql/model-view-controller.html#2014-04-15">PHP model-view-controller</a>
</p>
<p>
    <a href="http://www.tonymarston.net/php-mysql/4-reasons-why-all-php-frameworks-suck-except-RADICORE.html">4-reasons-why-all-php-frameworks-suck-except-RADICORE</a>
</p>
<h3>Folder structure:</h3>
<ul>
<li>index.php = loader logic (see below)</li>
    <li>core/
        <ul>
           <li>loader.php = class loader (see below)</li> 
           <li>dbi.php = class dbi (for database interaction)</li> 
           <li>...</li> 
        </ul>
    </li>   
    <li>pages/
        <ul>
            <li>page
                <ul>
                    <li>meta.php = controller</li>
                    <li>html.php = view</li>
                    <li>table.php = model, optional for db-interaction</li>
                    <li>css.php = optional css, must be set by controller</li>
                    <li>...</li>
                </ul>
            </li>
        </ul>
    </li>   
</ul>
<h3>Program flow:</h3>
<ul>
    <li>loader = new loader()</li>
    <li>loader->set_root('pages')</li>
    <li>loader->set_page('template','base')</li>
    <li>loader->set_page('main','home')</li>
    <li>loader->load_controller('page')
        <ul>
            <li>process input
                <ul>
                    <li>Open dataBase conection</li>
                    <li>load_model()</li>
                    <li>Insert</li>
                    <li>Update</li>
                </ul>
            </li>
            <li>set_view()</li>
            <li>set_css()</li>
        </ul>             
    </li>
    <li>loader->load_view('template') [Direct output (no Output Buffer)]
        <ul>
            <li>load_view('menu')</li>
            <li>load_view('main')
                <lu>
                    <li>load_view('page')
                        <ul>
                            <li>Open dataBase conection</li>
                            <li>load_model()</li>
                            <li>Select</li>
                            <li>HTML</li>
                        </ul>
                    </li>
                </lu>
            </li>
            <li>load_view('footer')</li>
            <li>load_view('overlay')</li>
        </ul>
    </li>
</ul>
</div>


<div class="wf">
    <h2>About CSS libraries, frameworks, preprocessing languages</h2>
    <ul>
        <li><a href="http://designinstruct.com/roundups/html5-frameworks/">CSS boilerplates</a><br></li>
        <li><a href="http://codegeekz.com/a-roundup-of-best-php-html5-and-css-frameworks/">another roundup</a></li>
        <li>Skeleton: Minimal CSS applied to HTML-tag</li>
        <li>PureCSS: modular CSS-Frameworks</li>
    </ul>
    <iframe src="//player.vimeo.com/video/68331927" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/68331927">Tim G. Thomas: A Developer's Guide to Design Frameworks (and More!)</a> from <a href="http://vimeo.com/ndcoslo">NDC Conferences</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
</div>

</div>