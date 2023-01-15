<?php
include("header.php");
?>

<div class="container bg-light">
    <div class="contacts_form-header">
        <h2 class="contacts_form-header_title text-center">Form Pembelian</h2>
    </div>
    <form class="contacts_form-form" action="https://wa.me/+6281346651603?" method="get" data-type="contacts">
        <div class="contacts_form-form_wrapper d-sm-flex justify-content-between">
            <input class="field required" type="text" placeholder="Name" value="User" name="user" disabled/>
            <input class="field required" type="text" data-type="email" placeholder="Email" name="email" />
        </div>
        <div class="contacts_form-form_wrapper d-sm-flex justify-content-between">
            <input class="field required" type="text" data-type="tel" placeholder="Phone number" name="phone"/>
            <input class="field required" type="text" placeholder="Item" value="Item yang dibeli" disabled name="item"/>
        </div>
        <div class="contacts_form-form_footer">
            <div class="wrapper d-flex flex-wrap align-items-center justify-content-center">
                <div class="checkbox">
                    <input type="checkbox" name="dataProcessing" id="dataProcessing" checked />
                    <label for="dataProcessing">I agree to the terms of data processing. </label>
                </div>
                <a class="link" href="#">Terms and Conditions</a>
                <span><?php  ?></span>
            </div>
            <button class="btn btn--gradient d-block mx-auto" type="submit">
                <span class="text">Send a Message</span>
            </button>
        </div>
    </form>
</div>


<?php
include("footer.php");
?>