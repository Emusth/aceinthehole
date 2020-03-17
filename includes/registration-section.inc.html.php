<h2 class="mobile-tablet">Registration</h2>
<section id="register">
    <!--Sign up form-->
    <section id="reg-section">
        <h2 class="desktop">Registration</h2>
        <h3>Sign Up Form</h3>
        <form method="post" action=" ">
            <p id="source">Required fields are marked with an asterisk (&#42;).</p>
            <input type="text" name="honeypot" id="honeypot" style="display: none;" value="" alt="if you fill this field out then your email will not be sent" />
            <label for="registerAs">&#42;Register as:</label>
            <select size="1" name="registerAs" id="registerAs" required>
                <option>-</option>
                <option value="Athlete">Participate as an athlete</option>
                <option value="Volunteer">Participate as a volunteer</option>
            </select>
            <label for="firstName">&#42;First Name:</label>
            <input type="text" name="firstName" id="firstName" required>
            <label for="lastName">&#42;Last Name:</label>
            <input type="text" name="lastName" id="lastName" required>
            <label for="myAge">&#42;Age:</label>
            <input type="text" name="myAge" id="myAge" required>
            <label for="myEmail">&#42;Email:</label>
            <input type="email" name="myEmail" id="myEmail" required>
            <label for="emerPhone">&#42;Emergency Contact Phone Number:</label>
            <input type="tel" name="emerPhone" id="emerPhone" required>
            <label for="emerName">&#42;Emergency Contact Name</label>
            <input type="text" name="emerName" id="emerName" required>
            <label for="myGender">&#42;Gender:</label>
            <select size="1" name="myGender" id="myGender" required>
                <option>-</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Non-Binary/Other">Non-Binary/Other</option>
            </select>
            <label for="mySatEvent">&#42;Saturay Event:</label>
            <select size="1" name="mySatEvent" id="mySatEvent" required>
                <option>-</option>
                <option value="Long Course Triathlon">Long Course Triathlon</option>
                <option value="Olympic Triathlon">Olympic Triathlon</option>
                <option value="10K">10K</option>
                <option value="Half Marathon">Half Marathon</option>
            </select>
            <label for="mySunEvent">&#42;Sunday Event:</label>
            <select size="1" name="mySunEvent" id="mySunEvent" required>
                <option>-</option>
                <option value="Sprint Triathlon">Sprint Triathlon</option>
                <option value="Try-a-Tri">Try-a-Tri</option>
                <option value="Splash n' Dash">Splash n' Dash</option>
            </select>
            <label for="myAccommodations">List special accommodations</label>
            <textarea name="myAccommodations" id="myAccommodations" rows="10" cols="20"></textarea>
            <input id="mySubmit" type="submit" value="Submit">
        </form>
    </section>
    <!--Registration prices-->
    <section>
    <h3 class="mobile-tablet">Prices</h3>
        <ul>
            <h3 class="desktop">Prices</h3>
            <li>
                <p>Long Course - $240</p>
            </li>
            <li>
                <p>Olympic - $110</p>
            </li>
            <li>
                <p>10k - $50</p>
            </li>
            <li>
                <p>Half Marathon - $75</p>
            </li>
            <li>
                <p>Spring - $90</p>
            </li>
            <li>
                <p>Try-a-Tri - $65</p>
            </li>
        </ul>
    </section>
    <!--Packet pick up-->
    <section>
    <h3 class="mobile-tablet">Packet Pick Up</h3>
        <ul>
            <h3 class="desktop">Packet Pick Up</h3>
            <li>
                <p>
                    All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.
                </p>
            </li>
        </ul>

    </section>
    <section>        <?php include 'includes/weather.inc.html.php' ?>
</section>
</section>