<?php
$pageTitle = 'Brigitflex Contact Us';
$pageDescription = 'How to contact Brigitflex';
$pageKeywords = 'contact, email, phone, fax, brigitflex';
$pageSubText = 'How to contact us';
include '../include/header.php';
?>

        <!-- Contact Us -->
        <div class="contact-us container">
            <div class="row">
                <div class="contact-form span7">
                    <h4>Phone</h4>
                    <p><?php if ($isMobile): ?><a href="tel:1+#application.PhoneNumber#" id="phoneNumber"><?php endif ?>(847) 741-1452<?php if ($isMobile): ?></a><?php endif ?></p>

                    <h4>Fax</h4>
                    <p>847-741-1470</p>

                    <h4>Email</h4>
                    <p><a href="mailto:Brigitflex@foxvalley.net" id="brigitEmail">Brigitflex@foxvalley.net</a></p>

                    <p>Fleetwood Drive is located in the SouthWest corner of the city of Elgin, IL, approximately one block South of US Route 20 (Lake Street), between the McLean Boulevard and Randall Road exits.  We are in an industrial park which borders the Northern edge of the campus of Elgin Community College.</p>
                </div>
                <div class="contact-address span5">
                    <div><img src="../assets/img/map.png" alt="Map of Brigitflex location" title="Map of Brigitflex location"></div>
                    <h4>Address</h4>
                    <p>1725 Fleetwood Drive <br> Elgin IL 60123</p>
                    <p>Phone: <?php if ($isMobile): ?><a href="tel:1+#application.PhoneNumber#" id="phoneNumber"><?php endif ?>(847) 741-1452<?php if ($isMobile): ?></a><?php endif ?></p>
                </div>
            </div>
        </div>


<?php include '../include/footer.php'; ?>