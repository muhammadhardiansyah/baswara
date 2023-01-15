<?php
include("header.php");
?>

<div class="container">
    <h4 class="display text-center my-3">PAYMENT DETAILS</h4>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Item</th>
                    <th scope="col">Confirmation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Item 1</td>
                    <td>
                        <i class="fa-solid fa-check fa-1x"></i>
                        <span>Berhasil</span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Item 2</td>
                    <td>
                        <i class="fa-solid fa-spinner fa-1x"></i>
                        <span>Menunggu Konfirmasi</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
include("footer.php");
?>