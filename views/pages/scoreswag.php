<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . "/../inc/head.php"; ?>
<body>
    <?php require __DIR__ . "/../inc/header.php"; ?>

    <div class="container col-xxl-8 py-5 bg-opdark">
        <h1 class="display-5 fw-bold lh-1 mb-3">Membership WP Plugin / HubSpot Integration</h1>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/public/images/projects/scoreswag.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                
                <p class="lead">This is a project that I completed for a client on Upwork. I fulfilled their needs by creating a plugin with all of the needed functionality.</p><p>I created a special member type on WordPress and utilized the account login functionality. The users initially create their accounts via a HubSpot form. When a user is created on HubSpot a webhook makes a call to an endpoint I built on WordPress. This creates the users account on WordPress and emails the user their login info. Users are then able to claim deals which are tracked to their account.</p>
                <p>Users are able to login and edit their account information. There a few different pieces of that users are able to update suche as school and sport played. All of this information is stored in the HubSpot CRM. When a user edits their info on the WordPress site, they are really editing their info on HubSpot. This is done by making a call to HubSpot's API. When a user views their info after loggin in on WordPress, it's pulled from an API call. This call is cached for one hour to prevent making too many API Calls.</p>
                <p>The deals were managed by a special post type. Each deal also had a specific tracking url. This tracking URL is added to a HubSpot marketing email. If a member clicks the deal tracking link inside of an email, it will automatically track the deal to the members account without needing to be logged in.</p>
                <p>I built a custom settings page for this plugin. On the settings page admin users are able to edit the HTML for the signup email</p>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-md-2"></div>

            <div class="col-md-4">

                <p class="h3 mt-5">Features</p>
                <ul>
                    <li>Custom WordPress Plugin</li>
                    <li>Custom WP Admin Settings Page</li>
                    <li>Membership Account Functionality</li>
                    <li>Updating HubSpot Info Via API</li>
                    <li>Customize Email HTML Via Form</li>
                    <li>Tracking URLs</li>
                </ul>

            </div>

            <div class="col-md-4">

                <p class="h3 mt-5">Skills</p>
                <ul>
                    <li>PHP</li>
                    <li>JavaScript</li>
                    <li>WordPress</li>
                </ul>

            </div>

            <div class="col-md-2"></div>

        </div>

    </div>
</body>
</html>
