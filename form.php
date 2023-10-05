<html>

<div id="form-page">
    <section class="form-bloc">

        <div class="form-content">
            <form id="hireme" action ="thanks.php" method="post">
                <div class="form-title">
                <h2>HIRE ME !</h2>
                </div>
            <ul>
                <li>
                    <label for="fullName">Full name&nbsp;:</label>
                    <input type="text" id="fullName" name="user_fullname" placeholder="Your name here" required/>
                </li>
                <li>
                    <label for="address">Address&nbsp;:</label>
                    <input type="text" id="address" name="user_address" placeholder="Your address here" required/>
                </li>
                <li>
                    <label for="phone">Phone number&nbsp;:</label>
                    <input type="tel" id="phone" name="user_phone_number" placeholder="Your phone number here" required/>
                </li>
                <li id="scrolling">
                    <label for="monster_type">Type of monster&nbsp;:</label>
                    <select name="monster_type" id="monster_type" required>
                        <option value="">Choose the right monster</option>
                        <option value="Spiders">Spiders</option>
                        <option value="Bats">Bats</option>
                        <option value="Barghest">Barghest</option>
                        <option value="Bruxa">Bruxa</option>
                        <option value="Striga">Striga</option>
                    </select>
                </li>
                <li id="scrolling">
                    <label for="monster_size">Size of the monster&nbsp;:</label>
                    <select name="monster_size" id="monster_size" required>
                        <option value="">Choose the right size</option>
                        <option value="XXXXL">XXXXL</option>
                        <option value="XXXL">XXXL</option>
                        <option value="XXL">XXL</option>
                        <option value="XL">XL</option>
                        <option value="Normal">Normal</option>
                    </select>
                </li>
                <li>
                    <label for="message">Describe the monster&nbsp;:</label>
                    <textarea id="message" name="user_message" placeholder="Your message here" required></textarea>
                </li>
            </ul>
            </form>
        </div>

        <div>
            <!-- <button type="submit" form="hireme" value="Update">SEND !</button> -->
        </div>
    </section>

</div>

</html>