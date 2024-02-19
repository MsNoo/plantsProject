
        <form action="notify/notify.php" method="post" class="mb-5 mt-5 rounded-top rounded-bottom form-group">
            <div class="registrationFeatures">
                <p class="titleFeat m-l-s"><b>Notify us about invasive plants</b></p>
                <p class="subtitleFeat m-l-s m-t-s">Please fill out the notification form</p>

                <!-- Name part -->
                <div class="displayInlineBlock">
                    <div class="fontStyle m-l-s">Your Name</div>
                    <div class="nameLine m-l-s">
                        <input class="textboxFeatures" type="text" id="firstName" name="firstName" size="15" required>
                        <label class="smallFontStyle displayBlock" for="firstName">First Name</label>
                    </div>

                    <div class="nameLine" style="margin-left: 5px;">
                        <input class="textboxFeatures" type="text" id="lastName" name="lastName" size="15" required>
                        <label class="smallFontStyle displayBlock" for="lastName">Last Name</label>
                    </div>
                </div>

                <!-- Gender part -->
                <div class="displayInlineBlock">
                    <p class="fontStyle" style="margin-left: 10px">Gender</p>
                    <div style="margin-left: 10px;" class="m-r-s">
                        <select style="color:grey; " class="selectGenderFeatures" name="gender" id="gender" required>
                            <option style="display: none;" value="0">Please Select</option>
                            <option style="color:black;" value="male">Male</option>
                            <option style="color:black;" value="female">Female</option>
                            <option style="color:black;" value="other">Other</option>
                        </select>
                    </div>
                </div>

                <!-- Birth Date part -->
                <div class="nameLine m-l-s">
                    <label class="fontStyle displayBlock" for="birthday">Birth Date</label>
                    <input class="selectBirthDateFeat" type="date" id="birthday" name="birthday" required>
                </div>

                <!-- Invasive Plant part-->
                <div class="nameLine">
                    <div class="fontStyle" style="margin-left: 5px;">Invasive Plant</div>
                    <select style="color:grey; " class="selectGenderFeatures" name="plant" id="plant" required>
                        <option style="display: none;" value="">Please Select</option>
                        <option style="color:black;" value="Sosnovskio barštis">Sosnovskio barštis</option>
                        <option style="color:black;" value="Kanadinė elodėja">Kanadinė elodėja</option>
                        <option style="color:black;" value="Raukšlėtalapis erškėtis">Raukšlėtalapis erškėtis</option>
                        <option style="color:black;" value="Vėlyvoji ieva">Vėlyvoji ieva</option>
                        <option style="color:black;" value="Muilinė guboja">Muilinė guboja</option>
                        <option style="color:black;" value="Uosialapis klevas">Uosialapis klevas</option>
                        <option style="color:black;" value="Varpinė medlieva">Varpinė medlieva</option>
                        <option style="color:black;" value="Didžioji rykštenė">Didžioji rykštenė</option>
                        <option style="color:black;" value="Smulkiažiedė sprigė">Smulkiažiedė sprigė</option>
                        <option style="color:black;" value="Baltažiedė robinija">Baltažiedė robinija</option>
                        <option style="color:black;" value="Šluotinis sausakrūmis">Šluotinis sausakrūmis</option>
                        <option style="color:black;" value="Gausialapis lubinas">Gausialapis lubinas</option>
                        <option style="color:black;" value="Ilgakotis lakišius">Ilgakotis lakišius</option>
                        <option style="color:black;" value="Other">Other</option>
                    </select>
                </div>

                <!-- Address part -->
                <p class="fontStyle m-l-s">Address</p>
                <input class="addressBoxFeatures m-l-s" type="text" id="address" name="address">
                <label class="smallFontStyle displayBlock m-l-s" for="address">Street Address | City | State</label>

                <div class="nameLine m-l-s m-r-s">
                    <p class="fontStyle">Phone Number</p>
                    <input class="addressBoxFeatures2" type="number" name="number">
                </div>

                <div class="nameLine">
                    <p class="fontStyle">Email address</p>
                    <input class="addressBoxFeatures2" type="email" name="email" required>
                </div>

                <!-- Comment part -->
                <div class="displayBlock">
                    <div class="m-t-s m-l-s">
                        <input class="textareaFeatures" name="message" id="message" style="height: 70px" required></input> 
                        <label class="smallFontStyle displayBlock" for="comment">Comment</label>
                    </div>

                    <!-- Button part -->
                    <div>
                        <button name="notify-btn" class="buttonContact m-l-s m-t-s">Notify</button>
                    </div>
                </div>
            </div>
        </form>


