<!DOCTYPE html>
<html lang="en">

<head>
    <title>望族美容护肤中心</title>
    <meta name="description" content="望族美容护肤中心望族美容护肤中心望族美容护肤中心望族美容护肤中心">
    <meta name="keywords" content="望族美容护肤中心">
    <?php include('./includes/meta.php'); ?>
</head>

<body class="font-hei">
    <div class="globe" style="text-align:center;">

        <?php include('./includes/header.php'); ?>

        <div class="h100"></div>

        <div id="contact-modern">
            <div class="wrap">
                <div class="container">


                    <h2>联系我们</h2>
                    <div class="h25 sep-line"></div>
                    <div class="h25"></div>


                    <div class="row">

                        <div class="col-md-6">

                            <table id="contact-table">

                                <tr>
                                    <td><img src="https://369usa.com/images/icons/phone.png" /></td>
                                    <td>Telephone:<br />(212) 371-2888</td>
                                </tr>

                                <tr>
                                    <td><img src="https://369usa.com/images/icons/email.png" /></td>
                                    <td>Email:<br />uvnailspa1058@gmail.com</td>
                                </tr>

                                <tr>
                                    <td><img src="https://369usa.com/images/icons/address.png" /></td>
                                    <td>Address:<br />1058 3rd Ave, <br />New York, NY 10065</td>
                                </tr>

                                <tr>
                                    <td><img src="https://www.369usa.com/images/icons/wechat.png" /></td>
                                    <td>Wechat:<br />colin6478828</td>
                                </tr>

                                <tr>
                                    <td><img src="https://369usa.com/images/icons/hour.png" /></td>
                                    <td>Hours:<br />Monday - Saturday 10:00am - 9:00pm<br />Sunday 10:30pm -
                                        8:00pm</td>
                                </tr>


                            </table>

                        </div>

                        <div class="col-md-6 gmap">

                            <img class="mapload" width="100%" src="https://369usa.com/images/loading/loaderline.gif" />

                            <div class="mapframe">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.247170906545!2d-73.83377978424178!3d40.75658807932695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2600d961b6e57%3A0xb3d35ea8da9be7af!2s132-61%2041st%20Rd%2C%20Flushing%2C%20NY%2011355!5e0!3m2!1szh-TW!2sus!4v1676775779894!5m2!1szh-TW!2sus"
                                    width="600" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="h100"></div>

                <?php include('./includes/copyright.php'); ?>

            </div>
</body>

<script>
    jQuery(document).ready(function ($) {
        var h = $('#contact-table').height();
        $('#contact-modern .gmap').css('height', h + 'px');
        $('#contact-modern .gmap iframe').css('height', (h) + 'px');
        setTimeout(function() {
            $('#contact-modern .gmap .mapload').hide();
            $('#contact-modern .gmap .mapframe').show();
        }, 2000);
    });
</script>

</html>