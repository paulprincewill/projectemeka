<section class="add_property">
  <h3>Add Property</h3>
  <form action="">
    <!-- Property Name and Number of Apartment -->
    <div class="property_name_and_number_of_apartments_wrapper">
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
          <i
            ><img src="../assets/_icons/remove_icon.svg" alt="Remove Icon"
          /></i>
          <p>2</p>
          <i><img src="../assets/_icons/add_icon.svg" alt="Add Icon" /></i>
        </div>
      </div>
    </div>
    <!-- Apartments -->
    <div class="add_apartments_wrapper">
      <div class="add_apartment">
        <!-- Apartment Details -->
        <div class="add_apartment_details_wrapper">
          <h4>Apartment 1</h4>
          <!-- Apartment type -->
          <div class="add_apartment_type_wrapper">
            <h5>Apartment Type</h5>
            <select name="" id="">
              <option value="">Bed Sitter</option>
              <option value="">Self Con</option>
              <option value="">Two Bedroom</option>
              <option value="">Three Bedroom</option>
              <option value="">Duplex</option>
            </select>
          </div>
          <!-- Apartment Status -->
          <div class="add_apartment_status_wrapper">
            <h5>Status</h5>
            <div class="add_apartment_status">
              <label>
                <input
                  type="radio"
                  name="apartment_status"
                  id="vacant"
                  checked
                />
                <span class="radio"></span>
                <p>Vacant</p>
              </label>
              <label>
                <input type="radio" name="apartment_status" id="occupied" />
                <span class="radio"></span>
                <p>Occupied</p>
              </label>
            </div>
          </div>
        </div>
        <!-- Apartment Tenant -->
        <div class="add_apartment_tenant_wrapper">
          <button>Add Tenant +</button>
          <div class="add_tenant_details_wrapper">
            <h4>Tenant Details</h4>
            <div class="add_tenant_details">
              <div>
                <h5>Name</h5>
                <p>Kunlenort</p>
              </div>
              <div>
                <h5>Phone No.</h5>
                <p>080****</p>
              </div>
              <div>
                <h5>Due Date</h5>
                <p>8/12/2022</p>
                <img
                  src="../assets/_icons/calender_icon.svg"
                  alt="Calender Icon"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
