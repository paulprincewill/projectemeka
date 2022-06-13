<section class="hero">
<<<<<<< HEAD
    <h1>The easiest way to manage Rents</h1>
    <p>Manage rents, property and tenants from the comforts of your couch.</p>

    <div id="signup_form" class="hero_form">
        <form @submit.prevent="signUp">
            <label for="signUpEmail">
                Email
                <input type="email" name="email" id="signUpEmail" placeholder="Enter your email address"
                    v-model="post.email" />
            </label>
            <label for="signUpPass">
                Password
                <input type="password" name="password" id="signUpPass" placeholder="Enter your password"
                    v-model="post.password" />
            </label>
            <input type="submit" value="GET STARTED" />
        </form>
        <div class="error_message" v-if="response.feedback!==undefined">
            <p>{{this.response.feedback}}</p>
        </div>
    </div>
</section>
=======
  <div class="hero_text">
    <h1>The easiest way to manage Rents</h1>
    <p>Manage rents, property and tenants from the comforts of your couch.</p>
  </div>

  <?php
        include "../frontend/ui/form/signup.php"
  ?>
  </div>
</section>
>>>>>>> 2e17d4ba47af504d497271040328fd71809fa2c6
