<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> 
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="vaccination/vac_styles.css">
        <!-- <title>Medweb</title> -->
    </head>
    <body>
        <?php
        include('private/navbar.php');
        include('private/effects_rest.php');

        // after moving ./private/ directory to ../../private/ do these:
        // include('../../private/navbar.php');
        // include('../../private/effects.php');
        ?>

        <!--==================== MAIN CONTENT HERE ====================-->
        <div class="container">
            <br><br>
            <br><br>

            <div>
                <!-- Container for State, Dist, Pincode and Date -->
                <div class="ctr">

                    <div class="UserInput">
                    <!-- State -->
                        <select onchange="populate(this.id, 'dist')" name = "states" id = "states">
                            <option value="0" disabled selected>State</option>	
                            <option value="1">ANDAMAN AND NICOBAR ISLANDS</option>
                            <option value="2">ANDHRA PRADESH</option>
                            <option value="3">ARUNACHAL PRADESH</option>
                            <option value="4">ASSAM</option>
                            <option value="5">BIHAR</option>
                            <option value="6">CHANDIGARH</option>
                            <option value="7">CHATTISGARH</option>
                            <option value="8">DADRA &amp; NAGAR HAVELI</option>
                            <option value="9">DAMAN &amp; DIU</option>
                            <option value="10">DELHI</option>
                            <option value="11">GOA</option>
                            <option value="12">GUJARAT</option>
                            <option value="13">HARYANA</option>
                            <option value="14">HIMACHAL PRADESH</option>
                            <option value="15">JAMMU &amp; KASHMIR</option>
                            <option value="16">JHARKHAND</option>
                            <option value="17">KARNATAKA</option>
                            <option value="18">KERALA</option>
                            <option value="19">LAKSHADWEEP</option>
                            <option value="20">MADHYA PRADESH</option>
                            <option value="21">MAHARASHTRA</option>
                            <option value="22">MANIPUR</option>
                            <option value="23">MEGHALAYA</option>
                            <option value="24">MIZORAM</option>
                            <option value="25">NAGALAND</option>
                            <option value="26">ODISHA</option>
                            <option value="27">PONDICHERRY</option>
                            <option value="28">PUNJAB</option>
                            <option value="29">RAJASTHAN</option>
                            <option value="30">SIKKIM</option>
                            <option value="31">TAMIL NADU</option>
                            <option value="32">TELANGANA</option>
                            <option value="33">TRIPURA</option>
                            <option value="34">UTTAR PRADESH</option>
                            <option value="35">UTTARAKHAND</option>
                            <option value="36">WEST BENGAL</option>            
                        </select>
                    </div>

                    <div class="UserInput"> 
                    <!-- District -->
                        <select name = "dist" id = "dist">
                            <option value = "0" disabled selected> District </option>
                        </select>
                    </div>
                
                    <div class="UserInput">
                    <!-- Date -->
                        <input type ="date" id = "date">
                    </div>

                    <div class="UserInput">
                        <div class="title">
                            <select id="DateSpecification">
                                <option value = "0" >Chosen date only</option>
                                <option value = "1" selected>After Chosen Date</option>
                            </select>
                        </div>
                    </div>

                </div>
                 
                <!-- Submit -->
                <div class="ctr">
                    <input type = "submit" id = "Submit" value="Check Availability" onclick="getdistrict()">
                </div>

                <div class="vaccination">
                    <!-- Title for type of slot booking -->
                    <!-- <div class="title">
                        <select id="DateSpecification">
                            <option value = "0" >Chosen date only</option>
                            <option value = "1" selected>All Dates after Chosen Date</option>
                        </select>
                    </div> -->

                    <!-- Search slot by District name -->
                    <div class="by-dist">
                        <table id = "tableDist">
                            <thead>
                                <tr>
                                    <th rowspan="3" width="5%">Sr. no.</th>
                                    <th rowspan="3" width=10%>Center name</th>
                                    <th rowspan="3" width=15%>Address</th>
                                    <th rowspan="3" width=10%>Fee Type</th>
                                    <th colspan="5">Sessions</th>
                                </tr>
                                <tr>
                                    <th colspan="2">Availability</th>
                                    <th rowspan="2">Vaccine Name</th>
                                    <th rowspan="3">Date</th>
                                    <!-- <th rowspan="2">Time</th> -->
                                </tr>
                                <tr>
                                    <th>Dose 1</th>
                                    <th>Dose 2</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                        <!-- Display NoCenter Error -->
                        <div id="NoCenter"></div>
                    </div>
                </div>

                </div>
            </div>
        </div>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src = "vaccination/script.js"></script>
        <script src = "vaccination/byDist.js"></script>
    </body>
</html>