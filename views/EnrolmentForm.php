<h4><center>BASIC EDUCATION ENROLLMENT FORM</center></h4>

<form class="" action="index.html" method="post">
  <h5><center>STUDENT INFORMATION</center></h5>
  <div class="grid">
    <label for="psa-number">
      PSA Birth Certificate No.
      <input type="text" name="psa-number" id="psa-number" placeholder="" required>
    </label>
    <label for="lrn">
      Learners Reference No. (LRN)
      <input type="number" name="lrn" id="lrn" placeholder="" required>
    </label>
  </div>
  <div class="grid">
    <label for="firstname">
      First Name
      <input type="text" name="firstname" id="firstname" placeholder="Juan" required>
    </label>
    <label for="lastname">
      Last Name
      <input type="text" name="lastname" id="lastname" placeholder="Dela Cruz" required>
    </label>
  </div>
  <div class="grid">
    <label for="middlename">
      Middle Name
      <input type="text" name="middlename" id="middlename" placeholder="(Optional)">
    </label>
    <label for="extensionname">
      Extension Name
      <input type="text" name="extensionname" id="extensionname" placeholder="e.g. Jr., III (if applicable)">
    </label>
  </div>
  <div class="grid">
    <label for="birthday">
      Date of Birth
      <input type="date" id="birthday" name="birthday">
    </label>
    <fieldset>
      <legend>Sex</legend>
      <div class="grid">
        <label for="male">
          <input type="radio" id="male" name="sex" value="male">
          Male
        </label>
        <label for="female">
          <input type="radio" id="female" name="sex" value="female">
          Female
        </label>
      </div>
    </fieldset>
    <label for="age">
      Age
      <input type="number" name="age" id="age" required>
    </label>
  </div>
  <fieldset>
    <legend>Belonging to any Indigenous Peoples (IP) Community/Indigenous Cultural Community?</legend>
    <label for="no-community">
      <input type="radio" name="community" id="no-community" value="no">
      No
    </label>
    <label for="yes-community">
      <input type="radio" name="community" id="yes-community" value="no">
      Yes
    </label>
    <label for="yes-answer-community">
      If Yes, please specify
      <input type="text" name="yes-answer-community" id="yes-answer-community">
    </label>
    <label for="mother-tongue">
      Mother Tongue
      <input type="text" name="mother-tongue" id="mother-tongue">
    </label>
  </fieldset>

  <h6>ADDRESS</h6>
  <div class="grid">
    <div>
      <label for="province">Province</label>
      <select id="province" required>
        <option value="" selected>Select a province…</option>
        <option value="Pangasinan">Pangasinan</option>
      </select>
    </div>
    <div>
      <label for="city-or-municipality">City or Municipality</label>
      <select id="city-or-municipality" required disabled>
        <option value="" selected>Select a city or municipality…</option>
        <option value="San Fabian">San Fabian</option>
      </select>
    </div>
    <div>
      <label for="barangay">Barangay</label>
      <select id="barangay" required disabled>
        <option value="" selected>Select a barangay</option>
        <option value="Sabangan">Sabangan</option>
      </select>
    </div>
  </div>
  <div class="grid">
    <label for="house-no-and-street">
      House Number and Street
      <input type="text" name="house-no-and-street" id="house-no-and-street">
    </label>
    <label for="zip">
      Zip Code
      <input type="number" name="zip" id="zip">
    </label>
  </div>

  <h6>PARENT'S/GUARDIAN'S INFORMATION</h6>
  <div class="grid">
    <div>
      Father's Name
      <input type="text" name="father-lastname" id="father-lastname" placeholder="Last Name">
      <input type="text" name="father-firstname" id="father-firstname" placeholder="First Name">
      <input type="text" name="father-middlename" id="father-middlename" placeholder="Middle Name">
    </div>
    <div>
      Mother's Name
      <input type="text" name="mother-lastname" id="mother-lastname" placeholder="Last Name">
      <input type="text" name="mother-firstname" id="mother-firstname" placeholder="First Name">
      <input type="text" name="mother-middlename" id="mother-middlename" placeholder="Middle Name">
    </div>
  </div>
  <div class="grid">
    <label for="tel-number">
      Telephone No.
      <input type="text" name="tel-number" id="tel-number">
    </label>
    <label for="cel-number">
      Cellphone No.
      <input type="text" name="cel-number" id="cel-number">
    </label>
  </div>

  <h6><center>For Returning Learners (Balik-Aral) and Those Who Shal Transfer/Move In</center></h6>
  <div class="grid">
    <label for="last-grade-level-completed">
      Last Grade Level Completed
      <input type="number" name="last-grade-level-completed" id="last-grade-level-completed">
    </label>
    <label for="last-school-year-completed">
      Last School Year Completed
      <input type="text" name="last-school-year-completed" id="last-school-year-completed">
    </label>
  </div>
  <div class="grid">
    <label for="last-school-name">
      School Name
      <input type="text" name="last-school-name" id="last-school-name">
    </label>
    <label for="last-school-id">
      School ID
      <input type="text" name="last-school-id" id="last-school-id">
    </label>
  </div>
  <label for="last-school-address">
    School Address
    <input type="text" name="last-school-address" id="last-school-address">
  </label>

  <h6><center>For Learners in Senior High School</center></h6>
  <div class="grid">
    <fieldset>
      <legend>Semester</legend>
      <label for="sem1">
        <input type="radio" id="sem1" name="semester" value="1">
        1<sup>st</sup> Sem
      </label>
      <label for="sem2">
        <input type="radio" id="sem2" name="semester" value="2">
        2<sup>nd</sup>
      </label>
    </fieldset>
    <div class="track">
      <label for="track">Track</label>
      <select id="track" required>
        <option value="" selected>Select a track…</option>
        <option value="Academic">Academic</option>
      </select>
    </div>
    <div class="strand">
      <label for="strand">Strand</label>
      <select id="strand" required>
        <option value="" selected>Select a strand…</option>
        <option value="STEM">Science, Technology, Engineering, and Mathematics</option>
      </select>
    </div>
  </div>

  <button type="submit">Submit</button>
</form>
