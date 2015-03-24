<html>
<head>
    <title>Laravel</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/template.css" rel="stylesheet" type="text/css">
    <script>
        //        $(document).ready(function () {
        ////            setTimeout(function () {
        ////                $('.action > .btn').effect('shake', {times: 3}, 5000);
        ////            }, 1500);
        //        })
    </script>
</head>
<body>
<header class="landing-header">
    <nav class="navbar navbar-top">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li data-target="#services" class="active"><a href="#services">Diensten</a></li>
                <li data-target="#about-me"><a href="#about-me">Over mij</a></li>
                <li data-target="#projects"><a href="#projects">Projecten</a></li>
                <li data-target="#contact"><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <section class="content text-center">
        <div class="slogan">Ik bouw web applicaties.</div>
        <div class="action">
            <button class="btn">Hoe ik u kan helpen</button>
        </div>
    </section>
</header>
<hr>
<div id="services">
    <div class="col-md-8 col-md-offset-2">
        <h2 class="heading">Diensten</h2>
        @for($i =0; $i <3; $i++)
            <article class="service row">
                <section class="picture col-md-4 {{($i % 2) ? 'pull-right' : 'pull-left'}}">
                    <img class="img-responsive" alt="Naam dienst" src="http://placehold.it/180x180">
                </section>
                <section class="content col-md-8">
                    <div class="heading">Design</div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at ex vulputate, placerat felis
                        feugiat,
                        luctus est. Integer dictum risus et urna euismod ultricies. Nunc tempus mi elit, vitae accumsan
                        lorem
                        placerat cursus. Nunc cursus mollis aliquam. Sed elementum aliquet sem id pulvinar.
                    </div>
                    <div class="read-more">
                        <button class="btn btn-primary">Lees meer</button>
                    </div>
                </section>
            </article>
        @endfor
    </div>
</div>
<hr>
<div id="projects">
    <div class="col-md-10 col-md-offset-1">
        <h2 class="heading">Projecten</h2>
        <section class="project col-md-4">
            <img class="img-responsive" src="http://placehold.it/350x250">
        </section>
        <section class="project col-md-4">
            <img class="img-responsive" src="http://placehold.it/350x250">
        </section>
        <section class="project col-md-4">
            <img class="img-responsive" src="http://placehold.it/350x250">
        </section>
        <div class="col-md-12 show-all">
            <button class="btn btn-primary btn-lg">Bekijk alle projecten</button>
        </div>
    </div>
</div>
<hr>
<div id="about-me">
    <div class="col-md-8 col-md-offset-2">
        <h2 class="heading">Over mij</h2>
        <section class="content text-center">
            <p>
                <strong>Hi, ik ben Guido en ik bouw graag web applicaties.</strong>
            </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida justo non purus
                rhoncus rutrum. Vivamus egestas nec sapien interdum finibus. 
            </p>

            <p>Ut aliquet odio et lobortis cursus. Aliquam facilisis arcu sit amet eleifend rhoncus.
                Aliquam eros justo, fermentum vel varius sit amet, condimentum a metus.</p>

            <p>Nunc ornare nulla venenatis, commodo augue non, suscipit ligula. Aenean sed nisi sodales dui
                ultricies accumsan maximus non augue. Fusce hendrerit lacus et ipsum pharetra, at libero.</p>

            <p>Vestibulum viverra, justo ullamcorper accumsan imperdiet, nibh sem consequat nisl,
                sit amet luctus ante arcu in velit. Nam tincidunt leo vitae enim mattis.</p>
        </section>
    </div>
</div>
<div id="quote">
    <div class="col-md-8 col-md-offset-2">
        <section class="text">Intuitive design is how we give the user new superpowers.</section>
        <section class="author">- Jared Pool</section>
    </div>
</div>
<div id="contact">
    <h2 class="heading"><strong>Vraag een vrijblijvende offerte aan</strong> of stel een vraag</h2>
    <section class="form col-md-6 col-md-offset-3">
        <form>
            <div class="form-group">
                <label for="name">Naam *</label>
                <input id="name" class="form-control" type="text"/>
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input id="email" class="form-control" type="email"/>
            </div>
            <div class="form-group">
                <label for="message">Bericht *</label>
                <textarea rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" class="btn btn-primary btn-lg" value="Versturen">
        </form>
    </section>
</div>
<hr>
<footer id="footer">
    &copy; 2015 Guido Schmitz
    <ul class="pages">
        <li><a href="#">Diensten</a></li>
        <li><a href="#">Over mij</a></li>
        <li><a href="#">Projecten</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <section class="social">
        <a href="#"><img src="/images/skype.png" alt="Skype"></a>
        <a href="#"><img src="/images/linkedin.png" alt="LinkedIn"></a>
        <a href="#"><img src="/images/facebook.png" alt="Facebook"></a>
        <a href="#"><img src="/images/twitter.png" alt="Twitter"></a>
    </section>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script>
    $(document).ready(function () {
        $('.navbar a[href^="#"]').on('click', function (event) {
            var target = $($(this).parent().data('target'));
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 50
                }, 1000);
            }
        });

        var navHeight = $('.landing-header').position().top + $('.landing-header').outerHeight(true);
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > navHeight - 50) {
                $('nav').addClass('navbar-fixed-top');
            }
            else {
                $('nav').removeClass('navbar-fixed-top');
            }
        });
    })
</script>
</body>
</html>
