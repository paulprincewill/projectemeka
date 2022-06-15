<section id="add_property">
  <h3>Add Property</h3>
  <form action="">
    <!-- Property Name and Number of Apartment -->
    <div class="property_name_&_number_of_apartments_wrapper">
      <label for="property_name" class="property_name_wrapper">
        <h5>Property name</h5>
        <input
          type="text"
          name=""
          id="property_name"
          placeholder="Type in location as property name"
        />
      </label>
      <div class="number_of_apartments_wrapper">
        <h5>No of Apartments</h5>
        <div class="number_of_apartments">
          <span>-</span>
          <p>0</p>
          <span>+</span>
        </div>
      </div>
    </div>
    <!-- Apartments -->
    <div class="apartments_wrapper">
      <h4>Apartment 1</h4>
      <div class="apartment_details_wrapper">
        <!-- Apartment type -->
        <div class="apartment_type_wrapper">
          <h5>Apartment Type</h5>
          <select name="" id="">
            <option value="Bed Sitter"></option>
          </select>
        </div>
        <!-- Apartment Status -->
        <div class="apartment_status_wrapper">
          <h5>Status</h5>
          <div class="apartment_status">
            <label for="vacant">
              Vacant
              <input type="radio" name="apartment_status" id="vacant" />
            </label>
            <label for="occupied">
              Occupied
              <input type="radio" name="apartment_status" id="occupied" />
            </label>
          </div>
        </div>
        <!--  -->
      </div>
    </div>
  </form>
</section>
