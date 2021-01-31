<?php

/*
 * Template Name: Frontpage
 * Template Post Type: post, page, product
 */

get_header();
?>
<div class="container alert alert-primary text-center" role="alert">
    Imagine Cyberpur <a href="https://cyberpur.com" class="alert-link">Make Janakpur a cyber city </a> Contest.
</div>
<div class="masthead text-center text-white purple p-4">
    <div class="masthead-content">
        <div class="container">
            <h1 class="masthead-heading mb-0">My Team Name</h1>
            <h2 class="masthead-subheading mb-0">Team Vision</h2>
            <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</div>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/01.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">What problem we are solving..</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit
                        iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione
                        voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/02.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <h2 class="display-4">How we are designing system..</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit
                        iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione
                        voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/03.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">What features will webapp have..</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit
                        iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione
                        voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="jumbotron jumbotron-fluid purple">
    <div class="container">
        <div class="row vertical-align-middle mt-5 mb-5">
            <div class="col-md-6">
                <h1 class="text-inverse">How our Work will help in making Cyberpur?</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-4">
    <div class="row">
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit
                iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione
                voluptatum molestiae adipisci, beatae obcaecati..</p>
        </div>
        <div class="col-md-6">
            <form>
                <div class="form-group right ml-2">
                    <button type="submit" class="btn btn-primary custom-button">Submit</button>
                </div>
                <div class="form-group left">
                    <input type="email" class="form-control" placeholder="name@example.com">
                    <small id="emailHelp" class="form-text text-muted">Subscribe to get Early-Access to WebApp.</small>
                </div>
            </form>
        </div>
    </div>
</div>
<main class="container">


    <div style="border-bottom: 1px solid #dfe3e8;">
    </div>

    <div class="container full-page mt-5" id="resources">
        <div class="text-center mb-5">
            <h2>Workshop Tasks<h2>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/04.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Day 1: Discover Idea</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary custom-button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/04.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Day 2 : Design System</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary custom-button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/04.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Day 3 : Develop WebApp</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary custom-button">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="simple-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Workshop Plan</h1>
        <p class="lead">Things we have done while in Brainstorming workshop sessions.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 fw-normal">Day 1</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title simple-card-title">19 <small class="text-muted"> Jan</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Define Task #</li>
                        <li>Define Task #</li>
                        <li>Define Task #</li>
                        <li>Define Task #</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Get Access</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 fw-normal">Day 2</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title simple-card-title">20 <small class="text-muted"> Jan</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Define Task #</li>
                        <li>Define Task #</li>
                        <li>Define Task #</li>
                        <li>Define Task #</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Get Access</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 fw-normal">Day 3</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title simple-card-title">21 <small class="text-muted"> Jan</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Define Task #</li>
                        <li>Define Task #</li>
                        <li>Define Task #</li>
                        <li>Define Task #</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Get Access</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
