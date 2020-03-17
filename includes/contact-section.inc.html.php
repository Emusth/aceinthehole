<h2 class="mobile-tablet">Contact Us</h2>
<section id="contact-grid">
    <section id="contact-section">
    <h2 class="desktop">Contact Us</h2>
        <h3>Send a Message</h3>
        <form method="post" action=" " id="inquiryForm">
            <input type="text" name="honeypot" style="display: none;" id="honeypot" value="" alt="if you fill this field out then your email will not be sent" />
            <label for="myName">Name:</label>
            <input type="text" name="myName" id="myName" required>
            <label for="myEmail">E-mail:</label>
            <input type="text" name="myEmail" id="myEmail" required>
            <label for="myParticipant">How would you like to get involved?</label>
            <select size="1" name="myParticipant" id="myParticipant" required>
                <option>-</option>
                <option value="Athlete">Athlete</option>
                <option value="Volunteer">Volunteer</option>
                <option value="Other">Other</option>
            </select>
            <label for="myQuestion">Questions or Comments: </label>
            <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
            <input id="mySubmit" type="submit" value="Submit">
        </form>
    </section>
    <?php include 'includes/aside.inc.html.php' ?>
</section>